<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\WEB\Santander\AESCrypto;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
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
use App\Mail\ReservaFailed;
use App\Mail\PagoSuccess;

class SantanderTestController extends Controller
{
    public function keys()
    {
        $keys = SantanderKeys::where('hotel_id',2)->where('ambiente','prod')->first();
    }

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
                dd($sxe, $xml, $descrypted_xml, $keys, Crypt::decryptString($keys['id_company']), Crypt::decryptString($keys['user']), Crypt::decryptString($keys['id_sucursal']), Crypt::decryptString($keys['pass_user']) );
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
}
