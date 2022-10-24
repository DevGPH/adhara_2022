@extends('layouts.app')

@section('content')
  
@include('layouts.web.slide')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

<div class="main-body" id="rooms" style="margin-top:80px;padding-top:60px;">
    
    <div class="row">
        <div class="col-sm-6">
            <p><img src="{{ asset('images/cotizacion/down.png') }}" width="20" height="20"> @lang('main.quotation-item002') {{ $full_date }} </p>
            <p><img src="{{ asset('images/cotizacion/up.png') }}" width="20" height="20" > @lang('main.quotation-item003') {{ $full_date_2 }}</p>
            <p><img src="{{ asset('images/cotizacion/bed.png') }}" width="20" height="20" > @lang('main.quotation-item004') {{ $habitaciones }} &nbsp; <img src="{{ asset('images/cotizacion/Adulto.png') }}" width="20" height="20">: {{ $total_adultos }}  &nbsp; &nbsp;<img src="{{ asset('images/cotizacion/Adulto.png') }}" width="15" height="15"> : {{ $total_kids }}</p>
        </div>
        <div class="col-sm-6">
            <h4 id='price_taxes'>@lang('main.quotation-item001')</h4>
        </div>
    </div>

    <div class="row" style="margin-top:20px">
        <div class="col-12 col-xs-12 col-md-12 col-lg-6 col-xl-5">
            <div class="room-title">
                @if ($lang == 'es')
                    <h4>Estandar Room</h4> 
                @else
                   <h4> Habitacion Estandar</h4>
                @endif
            </div>
            <img src="{{ asset('images/accommodations_1.png') }}" class="img-fluid" alt="">
            <ul class="features-room">
                <li><img src="{{ asset('images/cotizacion/wifi.png') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Wifi" alt=""></li>
                {{-- <li><img src="{{ asset('images/cotizacion/coffee.png') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Cafetera" alt=""></li>
                <li><img src="{{ asset('images/cotizacion/roomservice.png') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Servicio Hab." alt=""></li> --}}
            </ul>
            <a class="plus-features" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                @lang('main.quotation-item014')
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body no-style">
                    <ul class='plus-facilities'>
                        <li>@lang('main.room-item4')</li>
                        <li>@lang('main.room-item5')</li>
                        <li>@lang('main.room-item6')</li>
                        <li>@lang('main.room-item7')</li>
                        <li>@lang('main.room-item8')</li>
                        <li>@lang('main.room-item9')</li>
                        <li>@lang('main.room-item10')</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xs-12 col-md-12 col-lg-6 col-xl-7">
            <div class="row" style="margin: 0px;padding-top:35px;">
                @if ($status == 'Error')
                    <img src="{{ asset('images/cotizacion/missing_dates.png') }}" alt="Missing Dates" style="display:block;margin:0px auto;margin-top:30px;margin-bottom:30px;width:300px;">
                    <div class="error_season" style="text-align: center;">{{ $data }}</div>
                @else
                    @foreach ($estandar as $room)
                
                        <div class="col-3 col-lg-3 adhara-color text-white d-flex align-items-center justify-content-center">
                            <div class="item-d">
                                @if ($room['magica'])
                                    <img src="{{ asset('images/cotizacion/magica.png') }}" class="wand" alt="">
                                @endif
                                <p class="title-room-format">{{ $room['isTarifaMagica'] }}</p>
                                <p class="span-room-format">{{ $room['plan_x_alimentos'] }}</p>
                            </div>
                        </div>
                        <div class="col-9 col-lg-9" style="padding: 0px;">
                            <div class="row" style="margin: 0px">
                                <div class="col-4 adhara-color text-white">
                                    @if ($room['plan_x_alimentos'] == 'Solo Habitacion')
                                        <p class="format-room">@lang('main.quotation-item011')</p>
                                    @else
                                        <p class="format-room">@lang('main.quotation-item012')</p>
                                    @endif
                                </div>
                                <div class="col-5 adhara-color text-white">
                                    <p class='format-room'>@lang('main.quotation-item013')</p>
                                </div>
                                <div class="col-3 adhara-color text-white border-empty">
                                    <p class="format-room" style="display: none">Send</p>
                                </div>
                                <div class="col-4">
                                    <p class="format-room">$ {{ number_format($room['total'],2) }} {{ $room['currency'] }}</p>
                                </div>
                                <div class="col-5">
                                    <p class="format-room">$ {{ number_format($room['total']*0.90,2) }} {{ $room['currency'] }}</p>
                                </div>
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <form action="{{ route('reservations',['locale'=>App::getLocale()]) }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="habitacion_id" value="{{ $room['id'] }}" readonly>
                                        <input type="hidden" name="checkIn" value="{{ $checkIn }}" readonly>
                                        <input type="hidden" name="checkOut" value="{{ $checkOut }}" readonly>
                                        <input type="hidden" name="cuartos" value="{{ $room['cuartos'] }}" readonly>
                                        <input type="hidden" name="noches" value="{{ $room['noches'] }}" readonly>
                                        <input type="hidden" name="total" value="{{ $room['total'] }}" readonly>
                                        <input type="hidden" name="currency" value="{{ $room['currency'] }}" readonly>
                                        <input type="hidden" name="fullDate" value="{{ $full_date }}" readonly>
                                        <input type="hidden" name="fullDate2" value="{{ $full_date_2 }}" readonly>
                                        <input type="hidden" name="total_adultos" value="{{ $total_adultos }}" readonly>
                                        <input type="hidden" name="total_kids" value="{{ $total_kids }}" readonly>
                                        <input type="hidden" name="total_kids_no_bf" value="{{ $total_kids_no_bf }}" readonly>
                                        @foreach ($adultos as $adulto)
                                            <input type="hidden" name="adultos[]" value="{{ $adulto }}">
                                        @endforeach
                                        @foreach ($infantes as $infante)
                                            <input type="hidden" name="infantes[]" value="{{ $infante }}">
                                        @endforeach
                                        @foreach ($infantes_no_bf as $infante_no_bf)
                                            <input type="hidden" name="infantes_no_bf[]" value="{{ $infante_no_bf }}">
                                        @endforeach
                                        <button type="submit" id="" class="btn btn-outline-danger btn-sm">@lang('main.quotation-item016')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    });   
</script>


@endsection
