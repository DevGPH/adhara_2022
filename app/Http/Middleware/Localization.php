<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;


class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->headers->get('referer') != null)
        {
            if(Str::contains($request->headers->get('referer'), '?'))
            {
                if($request->path() == 'en/booking' || $request->path() == 'es/booking')
                {
                    $path = Str::of($request->headers->get('referer'))->explode('?');
                    if (count($path) > 2) {

                        $elements = Str::of($path[1])->explode('&');

                        $token = Str::of($elements[0])->explode('=');
                        $empieza = Str::of($elements[1])->explode('=');
                        $dates = Str::of($empieza[1])->explode('+-+');
                        $paxs = Str::of($elements[5])->explode('=');
                        $rooms = Str::of($elements[10])->explode('=');
                        $room1_adults = Str::of($elements[6])->explode('=');
                        $room1_kids = Str::of($elements[7])->explode('=');
                        if((int)$rooms[1] > 1)
                        {
                            if((int)$rooms[1] == 2)
                            {
                                $room2_adults = Str::of($elements[12])->explode('=');
                                $room2_kids = Str::of($elements[13])->explode('=');
                                $request->merge([
                                    'room_2_adults' => $room2_adults[1],
                                    'room_2_kids' => $room2_kids[1],
                                ]);
                            }
                            if((int)$rooms[1] == 3)
                            {
                                $room3_adults = Str::of($elements[14])->explode('=');
                                $room3_kids = Str::of($elements[15])->explode('=');
                                $request->merge([
                                    'room_3_adults' => $room3_adults[1],
                                    'room_3_kids' => $room3_kids[1],
                                ]);
                            }
                        }
                        $adultos = Str::of($elements[8])->explode('=');
                        $kids = Str::of($elements[9])->explode('=');

                        $request->merge([
                            '_token' => $token[1],
                            'empieza' => $dates[0].' - '.$dates[1],
                            'total-paxs' => $paxs[1],
                            'rooms' => $rooms[1],
                            'adults' => $adultos[1],
                            'kids' => $kids[1],
                            'csrf_token' => 'csrf_token',
                            'room_1_adults' => $room1_adults[1],
                            'room_1_kids' => $room1_kids[1],
                        ]);
                    }
                }
            }
        }


        if($request->locale == NULL)
        {
            App::setLocale('es');
        }else{
            App::setLocale($request->locale);
        }

        return $next($request);
    }
}
