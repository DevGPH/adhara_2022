<?php

namespace App\Http\Controllers\WEB\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoCambio;
use App\Models\Temporada;

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

    function rateToday($locale)
    {
        $pointer = now();
        $temporada = Temporada::where('startDate','<',$pointer->toDateString())->where('endDate','>',$pointer->toDateString())->orWhere('startDate', $pointer->toDateString())->orWhere('endDate', $pointer->toDateString())->first();
        $conversion = TipoCambio::first();
        if($temporada == null)
        {
            $today = Carbon::now()->addDay();
            $temporada = Temporada::where('startDate','<',$today->toDateString())->where('endDate','>',$today->toDateString())->orWhere('startDate', $today->toDateString())->orWhere('endDate', $today->toDateString())->first();

            if ($temporada == null) {
                return ($locale == 'es') ? 'Sin definir' : 'Undefined';
            }
    
        }
        $price = ($locale == 'es') ? ($conversion->valor_x_moneda * $temporada->tarifa_x_dolares) : $temporada->tarifa_x_dolares; 
        $currency = ($locale == 'es') ? 'MXN' : $temporada->currency;
        if($temporada != null)
            return $price.' '.$currency;
    }
}

