<?php

namespace App\Http\Controllers\WEB\Santander;

use App\Http\Controllers\WEB\Santander\AESCrypto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\SantanderResponse;
use App\Models\SantanderRequest;
use App\Models\SantanderKeys;
use App\Models\Santander;
use App\Models\CurlError;
use App\Models\Reserva;
use App\Models\Huesped;
use App;

#MAIL
use App\Mail\ConfirmationMail;

class SantanderController extends Controller
{
    public function index($folio)
    {
        $reserva = Reserva::where('folio',$folio)->first();
        if($reserva != null)
        {
            $huesped = Huesped::findOrFail($reserva['huesped_id']);
            $invoice = 'Inv-'.$reserva['folio'];
            $keys = SantanderKeys::where('hotel_id',2)->where('ambiente','prod')->first();
            
            $xml = "<?xml version='1.0' encoding='UTF-8' standalone='yes'?>
            <P>
                <business>
                    <id_company>".Crypt::decryptString($keys['id_company'])."</id_company>
                    <id_branch>".Crypt::decryptString($keys['id_sucursal'])."</id_branch>
                    <user>".Crypt::decryptString($keys['user'])."</user>
                    <pwd>".Crypt::decryptString($keys['pass_user'])."</pwd>
                </business>
                <url>
                    <reference>".$invoice."</reference>
                    <amount>".$reserva['precio']."</amount>
                    <moneda>".$reserva['currency']."</moneda>
                    <canal>W</canal>
                    <omitir_notif_default>1</omitir_notif_default>
                    <st_correo>1</st_correo>
                    <mail_cliente>".$huesped->email."</mail_cliente>
                    <datos_adicionales>
                        <data id='1' display='true'>
                            <label>Nombre</label>
                            <value>".$huesped->nombre." ".$huesped->apellidos."</value>
                        </data>
                    </datos_adicionales>
                </url>
            </P>";


            $prev_xml = $xml;
        
            $semilla_xml= Crypt::decryptString($keys['semilla_xml']);
            $key_commerce = Crypt::decryptString($keys['llave_comercial']);

            $aes = new AESCrypto();
            $encrypted_xml = $aes->encriptar($xml, $semilla_xml);

            
            $xml = "<pgs><data0>".$key_commerce."</data0><data>".$encrypted_xml."</data></pgs>";
            $encode = urlencode($xml);
            $post_str = "xml=".$encode;

            $santander_request = new SantanderRequest();
            $santander_request->xml_raw = $prev_xml;
            $santander_request->xml_encrypted = $post_str;
            $santander_request->huesped_id = $huesped->id;
            $santander_request->save();

            $URL_produccion = "https://bc.mitec.com.mx/p/gen";
			$URL_pruebas = "https://qa5.mitec.com.mx/p/gen";

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $URL_produccion,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $post_str,
                CURLOPT_HTTPHEADER => array(
                    "Cache-Control: no-cache",
                    "Content-Type: application/x-www-form-urlencoded",
                ),
            ));

            $output = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err)
            {
                //echo "cURL Error #:" . $err;
                $error = new CurlError();
                $error->folio = $reserva['folio'];
                $error->error = $err;
                $error->save();

                return response()->json([
                    'msg' => 'Error con la response',
                    'data' => 'CurlError-'.$reserva['folio'],
                    'code' => 407
                ]);

                //return $this->errorResponse('CurlError-'.$reserva['folio'],407); #407 CurlError
            }
            else
            {
                
                $descrypted_xml = $aes->desencriptar($output, $semilla_xml);
                $sxe = new \SimpleXMLElement($descrypted_xml);

                $satander_response = new SantanderResponse();
                $satander_response->estatus = $sxe->cd_response;
                $satander_response->xml_received = $descrypted_xml;
                $satander_response->url_mitec = $sxe->nb_url;
                $satander_response->huesped_id = $huesped->id;
                $satander_response->save();

                if( strcmp( $sxe->cd_response, "success") == 0 )
                {
                    //header("Location: ".$sxe->nb_url);
                    $data = [
                        'url' => $sxe->nb_url
                    ];
                    return [
                        'msg' => 'URL de pago generada con exito',
                        'data' => $sxe->nb_url,
                        'code' => 201
                    ];
                    //return redirect()->away($sxe->nb_url);
                }
            }

            /*---------------- Termina integracion con Santader ----------------*/

        }else
        {
            return response()->json([
                'msg' => 'Reserva no encontrada',
                'data' => $reserva['folio'],
                'code' => 404
            ]);

            //return $this->errorResponse('Reserva no encontrada-'.$reserva['folio'],408); # Reserva no encontrada se necesita REDIRIGIR
        }
    }

    public function store(Request $request)
    {
        if(!file_exists("log_santander.txt")){
            $file = fopen("log_santander.txt", "w");
            fwrite($file, "---- Inicio de log ---- \n\n" . PHP_EOL);
            fclose($file);
        }

        if(!file_exists("santander.txt")){
            $file2 = fopen("santander.txt", "w");
            fwrite($file2, "---- Inicio de log ----" . PHP_EOL);
            fclose($file2);
        }

        

        $encrypted_xml = $_POST["strResponse"]."\n\n metodo response";

        $file = fopen("log_santander.txt", "a");
        fwrite($file, $msg . PHP_EOL);
        fwrite($file, $encrypted_xml . PHP_EOL);
        fclose($file);

        fwrite($file, $msg . PHP_EOL);
        fwrite($file, $request->all() . PHP_EOL);
        fclose($file);


        if($request->filled('strResponse'))
        {
            $keys = SantanderKeys::where('ambiente','test')->first();
            $semilla_xml= Crypt::decryptString($keys['semilla_xml']);

            $aes = new AesCrypto();
            $descrypted_xml = $aes->desencriptar($request->strResponse, $semilla_xml);
            $response = new SimpleXMLElement($descrypted_xml);
            $aux = Str::of($response->reference)->explode('-');


            $estatus = $response->reference;
            $reference = ($response->reference != "") ? $response->reference : "0000";
            $folio = ($response->foliocpagos != "") ? $response->foliocpagos : "0000";
            $auth = ($response->auth != "") ? $response->auth : "0000";
            $cd_response = ($response->cd_response != "") ? $response->cd_response : "none";
            $cd_error = ($response->cd_error != "") ? $response->cd_error : "none";
            $hora = ($response->time != "") ? $response->time : "0000";
            $fecha = ($response->date != "") ? $response->date : "0000";
            $merchant = ($response->nb_merchant != "") ? $response->nb_merchant : "0000";
            $cc_type = ($response->cc_type != "") ? $response->cc_type : "0000";
            $operation = ($response->tp_operation != "") ? $response->tp_operation : "0000";
            $number = ($response->cc_number != "") ? $response->cc_number : "0000";
            $amount = ($response->amount != "") ? $response->amount : "0000";
            $id_url = ($response->id_url != "") ? $response->id_url : "0000";
            $correo = ($response->email != "") ? $response->email : "none@gmail.com";
            $name = ($huesped != NULL)? $huesped->nombre : 'Adhara';
            $id = $aux[1];

            $reserva = Reserva::where('folio',$id)->first();
            $huesped = NULL; #Huesped dummy equivale al 0

            if($reserva != null)
            {
                $huesped = Huesped::find($reserva['huesped_id']);
            }

            

            $pago = new Santander();
            $pago->reference = $reference;
            $pago->estatus = $estatus;
            $pago->folio = $folio;
            $pago->auth = $auth;
            $pago->cd_response = $cd_response;
            $pago->cd_error = $cd_error;
            $pago->hora = $hora;
            $pago->fecha = $fecha;
            $pago->merchant = $merchant;
            $pago->cc_type = $cc_type;
            $pago->tp_operation = $operation;
            $pago->cc_number = $number;
            $pago->amount = $amount;
            $pago->id_url = $id_url;
            $pago->email = $correo;
            $pago->name = $name; # esta pendiente el nombre
            $pago->encrypted_xml = $request->strResponse;
            $pago->xml_response = $descrypted_xml;
            $pago->huesped_id = ($huesped != NULL) ? $huesped->id : 1; # 1 siempre sera usuario Dummy
            $pago->save();

            #Se actualiza la reserva, el pago fue APROBADO
            if (strcmp( $response->response, "approved") == 0 )
            {
                DB::table('reservaciones')
                    ->where('id', $reserva['id'])
                    ->update(['estatus' => 'aprobada','satander_pago_id' => $pago->id]);

                $reservation = Reserva::findOrFail($reserva['id']);

                /*$reserva['estatus'] = 'aprobada';
                $reserva['santander_pago_id'] = $pago->id;
                $reserva->save();*/

                #Enviar correo de pago exitoso
                Mail::to($huesped->email)
                    ->bcc(['programacionweb@gphoteles.com','gerencia@gphoteles.com','ecommerce@gphoteles.com'])
                    ->send(new PagoSuccess($response,$huesped,$reserva->currency));

                Mail::to($request->email)->send(new reservaSuccess($reservation));
                
            }
            else
            {
                DB::table('reservaciones')
                    ->where('id', $reserva['id'])
                    ->update(['estatus' => 'denegada','satander_pago_id' => $pago->id]);

                
                $reservation = Reserva::findOrFail($reserva['id']);

                /*$reserva['estatus'] = 'denegada';
                $reserva['santander_pago_id'] = $pago->id;
                $reserva->save();*/

                Mail::to($request->email)->send(new ReservaFailed($reservation));
            }

        }
    }

    public function reserve(Request $request)
    {
        $status = 'success';
        $msg = '';
        $response = $request->cdResponse;
        $referencia = $request->referencia;
        $result = explode('-',$referencia); 
        $lang = (App::getLocale() == 'es') ? 'en' : 'es';   

        if ($request->nbResponse == 'Rechazado') {
            $status = 'error';
            $msg = $request->nb_error;
        }

        if ($request->nbResponse == 'Aprobado') {
            $reserva = Reserva::where('folio', $result[1])->first();
            $reserva->estatus = 'aprobada';
            $reserva->save();

            $hotel = Hotel::find($reserva->hotel_id);

            $info = [
                'plan_x_habitacion' => $reserva->habitacion->plan->nombre_es,
                'habitacion' => $reserva->habitacion->categoria->nombre_es,
                'created_at' => $reserva->created_at,
                'checkIn' => $reserva->checkIn,
                'checkOut' => $reserva->checkOut,
                'total' => $reserva->precio,
                'adultos' => $reserva->adultos,
                'infantes' => $reserva->infantes,
                'nombre' => $reserva->huesped->nombre,
                'apellidos' => $reserva->huesped->apellidos,
                'noches' => $reserva->noches
            ];

            if ($lang == 'en') {
                $info['plan_x_habitacion'] = $reserva->habitacion->plan->nombre_en;
                $info['habitacion'] = $reserva->habitacion->categoria->nombre_en;
            }

            Mail::to($request->email)->send(new ConfirmationMail($referencia, $hotel->nombre_es, $lang, $info));
            Mail::to('ecommerce@gphoteles.com')->bcc(['programacionweb@gphoteles.com','gerencia@gphoteles.com','ventas@gphoteles.com','recepcion.express@gphoteles.com','reservaciones@gphoteles.com'])->send(new ConfirmationMail($referencia, $hotel->nombre_es, $lang, $info));
              
        }

        return view('storefront.response_santander',[
            'status' => $status,
            'msg' => $msg,
            'response' => $response,
            'referencia' => $referencia,
            'lang' => $lang
        ]);
    }
}
