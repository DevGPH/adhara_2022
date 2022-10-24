<?php

namespace App\Http\Controllers\WEB\Reservas;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WEB\Home\HomeController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;


use App\Mail\ConfirmationMail;

#Modelos
use App\Models\Temporada;
use App\Models\TipoCambio;
use App\Models\Habitacion;
use App\Model\Reserva;
use App\Models\Pais;
use App;


#Fecha libreria
use Carbon\Carbon;
use Facade\Ignition\DumpRecorder\Dump;  

class ReservaController extends Controller
{
    private $endpoint = 'https:adharaexpress.com.mx/api/';

    public function index(Request $request,$locale)
    {

        if(empty($request->all())){ //se verifiva si el request esta vacio que quiere decir que viene de un refresh o cambio de idioma
            //si esta vacio, se toma la informacion del cookie 
            $dataBooking = (array)json_decode(Cookie::get('dataBooking'));//$dataBooking: variable utilizada para no tomarla directamente del request ya que puede estar vacio y entonces se toma de los cookies
        } else { // si tiene informacion quiere decir que viene del la consulta de reserva
            Cookie::queue(Cookie::forget('dataBooking'));//se borra el cookie guardado para poder guardar la nueva informacion
            $dataBooking = $request->all();
            // Cookie::queue(Cookie::make('dataBooking', json_encode($request->all()), 100,'/'.App::getLocale().'/booking'));
            Cookie::queue(Cookie::make('dataBooking', json_encode($request->all()), 100)); // cookie utilizada para guardar la informacion de booking en caso de cambiar el idioma o refrescar la pagina
        }

        config(['app.timezone' => 'America/Cancun']);
        $homecontroller = new HomeController();
        $rate = $homecontroller->rateToday($locale);
        $dates = Str::of($dataBooking['empieza'])->explode(' - ');
        $checkIn = Carbon::parse($dates[0])->format('Y-m-d');
        $checkOut = Carbon::parse($dates[1])->format('Y-m-d');

        $adultos = [];
        $infantes = [];
        $infantes_no_bf = [];
        $total_adultos = 0;
        $total_kids = 0;
        $total_kids_no_bf = 0;
        array_push($adultos,$dataBooking['room_1_adults']);
        $total_adultos += $dataBooking['room_1_adults'];
        

        if($dataBooking['rooms'] > 1)
        {
            if($dataBooking['rooms'] == 2)
            {
                $total_adultos += $dataBooking['room_2_adults'];
                array_push($adultos,$dataBooking['room_2_adults']);
            }
            if($dataBooking['rooms'] == 3)
            {
                $total_adultos += $dataBooking['room_3_adults'];
                array_push($adultos,$dataBooking['room_3_adults']);
            }
        }

        if($dataBooking['kids'] > 0)
        {
            $total_kids += $dataBooking['room_1_kids'];
            array_push($infantes,$dataBooking['room_1_kids']);

            $total_kids_no_bf += $dataBooking['room_1_kids_no_bf'];
            array_push($infantes_no_bf,$dataBooking['room_1_kids_no_bf']);

            if($dataBooking['rooms'] > 1)
            {
                if(isset($dataBooking['room_2_kids']))
                {
                    $total_kids += $dataBooking['room_2_kids'];
                    array_push($infantes,$dataBooking['room_2_kids']);

                    $total_kids_no_bf += $dataBooking['room_2_kids_no_bf'];
                    array_push($infantes_no_bf,$dataBooking['room_2_kids_no_bf']);
                }
                    

                if(isset($dataBooking['room_3_kids']))
                {
                    $total_kids += $dataBooking['room_3_kids'];
                    array_push($infantes,$dataBooking['room_3_kids']);

                    $total_kids_no_bf += $dataBooking['room_3_kids_no_bf'];
                    array_push($infantes_no_bf,$dataBooking['room_3_kids_no_bf']);
                }
                    
            }
        }else{
            for ($i=0; $i < $dataBooking['rooms'] ; $i++) { 
                array_push($infantes,0);
                array_push($infantes_no_bf,0);
            }
        }

        $day1 =     Carbon::parse($dates[0])->format('d');
        $month1 =   Carbon::parse($dates[0])->format('m');
        $year1 =    Carbon::parse($dates[0])->format('Y');
        $day2 =     Carbon::parse($dates[1])->format('d');
        $month2 =   Carbon::parse($dates[1])->format('m');
        $year2 =    Carbon::parse($dates[1])->format('Y');
    
        switch ($month1){
            case  "1"; $month_label1 = "Enero";      break;  case  "2"; $month_label1 = "Febrero";    break;   case  "3"; $month_label1 = "Marzo";      break;
            case  "4"; $month_label1 = "Abril";      break;  case  "5"; $month_label1 = "Mayo";       break;   case  "6"; $month_label1 = "Junio";      break;
            case  "7"; $month_label1 = "Julio";      break;  case  "8"; $month_label1 = "Agosto";     break;   case  "9"; $month_label1 = "Septiembre"; break;
            case "10"; $month_label1 = "Octubre";    break;  case "11"; $month_label1 = "Noviembre";  break;   case "12"; $month_label1 = "Diciembre";  break;
        }

        switch ($month2){
            case  "1"; $month_label2 = "Enero";      break;  case  "2"; $month_label2 = "Febrero";    break;   case  "3"; $month_label2 = "Marzo";      break;
            case  "4"; $month_label2 = "Abril";      break;  case  "5"; $month_label2 = "Mayo";       break;   case  "6"; $month_label2 = "Junio";      break;
            case  "7"; $month_label2 = "Julio";      break;  case  "8"; $month_label2 = "Agosto";     break;   case  "9"; $month_label2 = "Septiembre"; break;
            case "10"; $month_label2 = "Octubre";    break;  case "11"; $month_label2 = "Noviembre";  break;   case "12"; $month_label2 = "Diciembre";  break;
        }

        $full_date = NULL;
        $full_date_2 = NULL;

        if($locale == 'es')
        {
            $full_date = $day1.' '.$month_label1.' '.$year1;
            $full_date_2 = $day2.' '.$month_label2.' '.$year2;
        }else{
            $full_date = Carbon::parse($dates[0])->format('d F Y');
            $full_date_2 = Carbon::parse($dates[1])->format('d F Y');
        }

        $url = $this->endpoint.$locale.'/temporada-habitacion'; 

        $response = Http::asForm()->post($url, [
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'habitaciones' => $dataBooking['rooms'],
            'adultos' => $adultos,
            'infantes' => $infantes,
            'infantes_no_bf' => $infantes_no_bf,
        ]);

        $result = $response->json();

        if($result['code'] != 200)
        {

            return view('storefront.cotizacion')->with([
                'data'              => $result['message'],
                'checkIn'           => $checkIn,
                'checkOut'          => $checkOut,
                'estandar'          => NULL,
                'superior'          => NULL,
                'ejecutivo'          => NULL,
                'cambio'            => 0,
                'total_adultos'     => $total_adultos,
                'total_kids'        => $total_kids,
                'total_kids_no_bf'  => $total_kids_no_bf,
                'full_date'         => $full_date,
                'full_date_2'       => $full_date_2,
                'habitaciones'      => $dataBooking['rooms'],
                'adultos'           => $adultos,
                'infantes'          => $infantes,
                'infantes_no_bf'    => $infantes_no_bf,
                'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
                'status' => 'Error',
                'rate' => $rate
            ]);
        }
        
        #vista de la reserva   
        $estandar_collection = array(); 
        $ejecutivo_collection = array(); 
        $superior_collection = array(); 

        $cambio = TipoCambio::first();

        foreach ($result['data'] as $room)  
        {
            if($locale == 'es')
            {
                for ($i=0; $i < (int)$room['cuartos']; $i++) 
                {     
                    $y = $i +1;
                    $room['habitacion_'.$y]['total'] = $room['habitacion_'.$y]['total'] * $cambio->valor_x_moneda;
                }
                $room['currency'] = 'MXN';
                $room['total'] = $room['total'] * $cambio->valor_x_moneda;
            }
      
            if((string)$room['habitacion'] == "Estandar")
            {
                array_push($estandar_collection,$room);

            }else if((string)$room['habitacion'] === 'Superior')
            {
                array_push($ejecutivo_collection,$room);
            }else if((string)$room['habitacion'] === 'Ejecutiva')
            {
                array_push($superior_collection,$room);
            }       
        }

        return view('storefront.cotizacion')->with([
            'data'              => $result['data'],
            'checkIn'           => $checkIn,
            'checkOut'          => $checkOut,
            'estandar'          => $estandar_collection,
            'superior'          => $superior_collection,
            'ejecutivo'          => $ejecutivo_collection,
            'cambio'            => $cambio,
            'total_adultos'     => $total_adultos,
            'total_kids'        => $total_kids,
            'total_kids_no_bf'  => $total_kids_no_bf,
            'full_date'         => $full_date,
            'full_date_2'       => $full_date_2,
            'habitaciones'      => $dataBooking['rooms'],
            'adultos'           => $adultos,
            'infantes'          => $infantes,
            'infantes_no_bf'    => $infantes_no_bf,
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'status' => $result['status'],
            'rate' => $rate
        ]);
    }


    public function reservations(Request $request,$locale)
    {
        if (Cookie::get('dataBooking') !== null){ // cookie utilizada para guardar la informacion de booking en caso de cambiar el idioma o refrescar la pagina
            Cookie::queue(Cookie::forget('dataBooking')); //se borra al dar click en reservar
        }

        $paises = Pais::all();
        $habitacion = Habitacion::findOrFail($request->habitacion_id);
        // $rate = rateToday($locale);
        $homecontroller = new HomeController();
        $rate = $homecontroller->rateToday($locale);

        
        return view('storefront.reservations',[
            'paises' => $paises,
            'habitaciones' =>  $request->cuartos,
            'checkIn'      =>  $request->checkIn,
            'checkOut'     =>  $request->checkOut,
            'total'        =>  $request->cookie('user')?($request->total*.9):$request->total,
            'currency'     =>  $request->currency,
            'noches'       =>  $request->noches,
            'adultos'      =>  $request->adultos,
            'infantes'     =>  $request->infantes, 
            'infantes_no_bf'=> $request->infantes_no_bf,
            'habitacion_id'=>  $habitacion->id,
            '_tot_adultos'  =>  $request->total_adultos,
            '_tot_infantes' =>  $request->total_kids,
            '_tot_infantes_no_bf' =>  $request->total_kids_no_bf,
            'fullDate'          =>  $request->fullDate,
            'fullDate2'  =>  $request->fullDate2,
            'habitacion' => $habitacion,
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]);

    }

    public function store(Request $request )
    {
        $url = $this->endpoint.'es/reserva';

        $response = Http::asForm()->post($url, [
                    'nombre' => $request->nombre,
                    'apellidos' => $request->apellidos,
                    'email' => $request->email,
                    'telefono' => $request->telefono,
                    'estado_region' => $request->estado_region,
                    'isWhatsApp' => ($request->isWhatsApp == null) ? 0 : $request->isWhatsApp,
                    'isClub' => ($request->isClub == null) ? 0 : $request->isClub,
                    'ciudad' => $request->ciudad,
                    'pais_id' => $request->pais_id,
                    'habitacion_id' => $request->habitacion_id,
                    'pago_x_destino' => 0,
                    'checkIn' => $request->checkIn,
                    'checkOut' => $request->checkOut,
                    'plataforma' => $request->plataforma,
                    'noches' => $request->noches,
                    'habitaciones' => $request->habitaciones,
                    'adultos' => $request->adultoss,   
                    'infantes' => $request->infantess,
                    'infantes_no_bf' => $request->infantess_no_bf,
                    'precio' => $request->precio,
                    'currency' => $request->currency,
                    'comentarios' => $request->comentarios,
                    'hotel_id' => 1,
                    'payment' => $request->metodo_pago, #pago_seguro , pago_destino
                    'login' => ($request->cookie('user') !== null )?1:0//verificar si existe la cookie para saber si esta logueado
        ]);


        $result = $response->json();
        //dd($result);
        if((int)$result['code'] == 500)
        {
            //dd($result['message']);
            return back()->with('error',$result['message']);
        }

        switch ($result['data']['metodo_pago']) {
            case 'pago_destino':
                #El numero 3 representa pago en destino
                return redirect()->route('response.reserva', ['locale' => 'es','id' => $result['data']['folio']]);
                break;

            case 'pago_seguro':

                $url = url('/').'/api/santander';
                $response = Http::asForm()->post($url,[
                    'id' => $result['data']['folio']
                ]);
                $result = $response->json();

                if($response['code'] == 500)
                {
                    return back()->with('error','Error al generar su metodo de pago, ponganse en contacto con el area de reservas con numero de folio: '.$result['data']['folio']);
                }else{
                    return redirect()->away($result['data']['url'][0]);
                }
                break;

            case 'paypal':
                
                $url = url('/').'/api/paypal';
                $response = Http::asForm()->post($url,[
                    'id' => $result['data']['folio']
                ]);
                $result = $response->json();

                if($response['code'] == 500)
                {
                    return back()->with('error','Error al generar su metodo de pago, ponganse en contacto con el area de reservas con numero de folio: '.$result['data']['folio']);
                }else{
                    return redirect()->away($result['data']['url'][0]);
                }
                break;
            
            default:
                return redirect()->route('response.reserva', ['locale' => App::getLocale(),'id' => $result['data']['folio']]);
                break;
        }
    }


    public function response($locale,$id = '#00000')
    {
        return view('storefront.response')->with([
            'folio' => $id,
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es'
        ]);

    }

    public function contact_mail()
    {
        Mail::to('reservas@gphoteles.com')->send(new ConfirmationMail);
        return redirect('/contact'); 
    }

}

///se utilizara el rateToday() de HomeController;

// function rateToday($locale)
// {
//     $today = now();
//     $temporada = Temporadas::wereDate('startDate','<=',$today->toDateString())->first();
//     $conversion = TipoCambio::first();
//     $price = ($locale == 'es') ? ($conversion->valor_x_moneda * $temporada['tarifa_x_dolares']) : $temporada['tarifa_x_dolares']; 
//     $currency = ($locale == 'es') ? 'MXN' : $temporada['currency'];
//     if($temporada != null)
//         return $price.' '.$currency;
// }