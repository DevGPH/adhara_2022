<?php

namespace App\Http\Controllers\WEB\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\TipoCambio;
use App\Models\Temporada;
use App\Models\PlanHab;
use App\Models\Hotel;
use App\Models\Pais;

#Mails
use App\Mail\ContactHotel;

use Carbon\Carbon;
use App;

class HomeController extends Controller
{
    public function index($locale)
    {   
        $rate = $this->rateToday($locale);

        return view('index')->with([
            'home_active' => 'active-link',
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]); 
    }

    public function rooms($locale)
    {
        $rate = $this->rateToday($locale);
        return view('storefront.rooms')->with([
            'room_active' => 'active-link',
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]); 
    }

    public function contact($locale)
    {
        $rate = $this->rateToday($locale);
        return view('storefront.contact')->with([
            'contact_active' => 'active-link',
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]); 
    }

    public function postContact(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'message' => 'required',
        ];

        $messages = [
            'nombre.required' => 'Es necesario rellenar este campo',
            'email.required' => 'Es necesario rellenar este campo',
            'email.email' => 'Formato invalido',
            'asunto.required' => 'Es necesario rellenar este campo',
            'message.required' => 'Es necesario rellenar este campo',
        ];

        $this->validate($request, $rules, $messages); 

        $data = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->message,
        ];
        Mail::to('reservaciones@gphoteles.com')->bcc('juan.alucard.02@gmail.com')->send(new ContactHotel($data));

        $msg = (App::getLocale() == 'es') ? 'Hemos recibido tu mensaje, un agente pronto se comunicara con usted.' : 'We have recieved your message and agent will reach out soon.';

        return back()->with('success', $msg);
    }

    public function covid($locale)
    {
        $rate = $this->rateToday($locale);
        return view('storefront.covid')->with([
            'covid_active' => 'active-link',
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]); 
    }

    public function menu()
    {
        $rate = $this->rateToday(App::getLocale());
        return view('storefront.menu')->with([
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]);    
    }

    public function roomService()
    {
        $rate = $this->rateToday(App::getLocale());
        return view('storefront.room_service')->with([
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]);  
    }

    public function grupos($locale)
    {
        $rate = $this->rateToday($locale);
        return view('storefront.grupos')->with([
            'lang' =>(App::getLocale() == 'es') ? 'en' : 'es',
            'rate' => $rate
        ]);
    }

    public function mail($locale)
    {
        return view('storefront.mail')->with([
            'lang' => (App::getLocale() == 'es') ? 'en' : 'es'
        ]);
    }

    public function mailExpress($locale)
    {
        return view('storefront.mail_express')->with([
            'lang' => (App::getLocale() == 'es') ? 'en' : 'es'
        ]);
    }

    public function getUserC(Request $request, $locale)
    {
        $response = Http::withHeaders([
            'X-User' => 'clubestrella',
            'X-Secret' => 'S0port*2020',
        ])->post('https://clubestrella.mx/api/login-adhara', [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        $result = $response->json();
        if (isset($result['error'])) {
            return response()->json(['error'=> $result['code']], $result['code']);
        }

        $countryName = $result['data']['cliente']['pais'];
        
        $paises = Pais::where('nombre', $countryName)->first();
        if ($paises == null) {
            $paises = Pais::where('id', 145)->first();
            $countryName = $paises->nombre;
        }

        $arrayUser =  [
            'id' => $result['data']['id'],
            'name' => $result['data']['nombre'],
            'lastname' => $result['data']['apellidos'],
            'email'  => $result['data']['email'],
            'partner_number'  => $result['data']['cliente']['numero_socio'],
            'city'  => $result['data']['cliente']['ciudad'],
            'state'  => $result['data']['cliente']['estado'],
            'country'  => $countryName,
            'country_id'  => $paises->id,
            'number'  => $result['data']['cliente']['celular'],
            'total_points'  => $result['data']['puntos']['puntos_totales']
        ];
        $minutes = 30;

        $response = new Response('Set Cookie');
        $response->withCookie(cookie('user', json_encode($arrayUser), $minutes));
        
        return $response;

        // return "session iniciada";
    }
    public function closeUserC(Request $request, $locale)
    {
        Cookie::queue(Cookie::forget('user'));
        return redirect('/');
    }

    function rateToday($locale)
    {
        $hotel = Hotel::findOrFail(2);
        $pointer = now();
        $temporada_raw = DB::select('select * from temporadas WHERE hotel_id = ? AND( startDate < ? AND endDate > ? OR startDate = ? OR endDate = ?)', 
        [
            $hotel->id,
            $pointer->toDateString(),
            $pointer->toDateString(),
            $pointer->toDateString(),
            $pointer->toDateString()
        ]);
        $temporada = $temporada_raw[0];
        $conversion = TipoCambio::first();
        if($temporada == null)
        {
            $today = Carbon::now()->addDay();
            $temporada_raw = DB::select('select * from temporadas WHERE hotel_id = ? AND( startDate < ? AND endDate > ? OR startDate = ? OR endDate = ?)', 
            [
                $hotel->id,
                $today->toDateString(),
                $today->toDateString(),
                $today->toDateString(),
                $today->toDateString()
            ]);
            $temporada = $temporada_raw[0];

            if ($temporada == null) {
                return ($locale == 'es') ? 'Sin definir' : 'Undefined';
            }
    
        }
        $plan = PlanHab::findOrFail(4);

        $plan_total = (double) $plan->desayuno_adulto * 2;

        $price = ($locale == 'es') ? ($conversion->valor_x_moneda * ($temporada->tarifa_x_dolares + $plan_total)) : $temporada->tarifa_x_dolares + $plan_total;
        dd($conversion->valor_x_moneda, $temporada->tarifa_x_dolares, $plan_total);
        $price = round($price);
        $currency = ($locale == 'es') ? 'MXN' : $temporada->currency;
        if($temporada != null)
            return number_format($price).' '.$currency;
    }
}

