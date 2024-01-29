@extends('layouts.app')

@section('content')

<style>
    #lista_pagos {
        display: flex;
    }

    #lista_pagos li {
        margin-left: 10px;
        margin-right: 10px;
        display: inline-flex;
        align-items: center;
    }

    #lista_pagos li input{
        margin-right: 10px;
    }
</style>

@if (session('error-api'))
    <div class="alert alert-danger" style="position:absolute;z-index:100;">
        @foreach (session('error-api') as $item)
            <p>{{ $item[0] }}</p>
        @endforeach
    </div>
@endif

@if (session('error-string'))
    <div class="alert alert-danger" style="position:absolute;z-index:100;">
        <p>{{ session('error-string') }}</p>
    </div>
@endif
@error('condiciones')
    <div class="alert alert-danger" style="position:absolute;z-index:100;">{{ $message }}</div>
@enderror

@if(session('error'))
    <div class="alert alert-danger" style="position:absolute;z-index:100;">{{ session('error') }}</div>
@endif

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/backgrounds/reserva_background.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <!--h5>STAY THE GRANDIUM</h5-->
                <h1>@lang('main.book.title')</h1>
                <p>@lang('main.book.subtitle')</p>
                <!-- Title Emd -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>@lang('main.breadcrumb.book')</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Booking -->
    <div class="section">
        <div class="widget-booking-form">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <!-- Booking Complete -->
                            <div class="booking-complete">
                                <h5>@lang('main.book.now')</h5>
                                <h2>@lang('main.book.info')</h2>
                                <div class="complete-message">
                                    <i class="fa fa-check"></i>
                                    @lang('main.book.details')
                                </div>
                            </div>
                            <!-- Booking Complete End -->
                            <!-- Booking Form -->
                            <div class="booking-form">
                                <h5>@lang('main.book.now')</h5>
                                <h2>@lang('main.book.info')</h2>
                                <p>@lang('main.book.details')</p>
                                <div class="data-form">
                                    <form action="{{ route('book.reserve',[App::getLocale()]) }}" id="booking-form" method="POST">
                                        @csrf
                                        <input type="hidden" name="form-room" value="Royal Single Room">
                                        <div class="row">
                                            <!--div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkin" id="form-checkin" value="{{$checkIn}}" class="datepicker" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkout" id="form-checkout" value="{{ $checkOut}}" class="datepicker" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-adults" id="form-adults">
                                                    <option value="">ADULTS</option>
                                                    <option value="1">1 ADULT</option>
                                                    <option value="2" selected>2 ADULT</option>
                                                    <option value="3">3 ADULT</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-childrens" id="form-childrens">
                                                    <option value="">CHILDRENS</option>
                                                    <option value="1" selected>1 CHILDREN</option>
                                                    <option value="2">2 CHILDREN</option>
                                                    <option value="3">3 CHILDREN</option>
                                                </select>
                                            </div-->
                                            <div class="col-md-6">
                                                <input type="text" name="nombre" id="form-name" placeholder="@lang('main.reserve.name')" value="{{ ($clubestrella != null) ? $clubestrella->name : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="apellidos" id="form-surname" placeholder="@lang('main.reserve.lastname')" value="{{ ($clubestrella != null) ? $clubestrella->lastname : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" id="form-email" placeholder="@lang('main.reserve.email')" value="{{ ($clubestrella != null) ? $clubestrella->email : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="telefono" id="form-phone" placeholder="@lang('main.reserve.phone')" value="{{ ($clubestrella != null) ? $clubestrella->number : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="ciudad" id="form-address1" placeholder="@lang('main.reserve.city')" value="{{ ($clubestrella != null) ? $clubestrella->city : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="estado_region" id="form-address2" placeholder="@lang('main.reserve.state')" value="{{ ($clubestrella != null) ? $clubestrella->state : '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <select name="pais_id" id="form-adults">
                                                    <option value="" selected>@lang('main.reserve.country')</option>
                                                    <option value="1">USA</option>
                                                    <option value="2">MÉXICO</option>
                                                    <option value="3">OTRO</option>
                                                </select>
                                            </div>
                                            <!--div class="col-md-6">
                                                <input type="text" name="form-country" id="form-country" placeholder="COUNTRY">
                                            </div-->
                                            <div class="col-md-12">
                                                <textarea cols="6" rows="8" name="comentarios" id="form-requirements" placeholder="@lang('main.reserve.details')"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                               <p>
                                                    <input type="checkbox" class="form-check-input" name="condiciones" id="condiciones">
                                                    @lang('main.reservations-item019a') <a class="opt-ft-ok " data-toggle="modal" data-target="#myModal">@lang('main.body-item35')</a>  @lang('main.reservations-item019b')
                                                </p>
                                                <p>@lang('main.reservations-item020')</p>
                                            </div>
                                            <div class="col-md-12">
                                                <ul id="lista_pagos">
                                                    <li>
                                                        <input class="form-check-input" type="radio" name="metodo_pago" value="pago_seguro" checked>
                                                        <img src="{{ asset('images/logos/tarjeta.png') }}" width="200" height="70" title="Magica">
                                                    </li>
                                                    @if ($enable_pago_destino)
                                                        <li>
                                                            <input class="form-check-input" type="radio" name="metodo_pago" value="pago_destino">
                                                            @lang('main.book.at.hotel')
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" name="habitaciones"    value="{{ $habitaciones }}">
                                                <input type="hidden" name="checkIn"         value="{{ $checkIn }}">
                                                <input type="hidden" name="checkOut"        value="{{ $checkOut }}">
                                                <input type="hidden" name="precio"          value="{{ $total }}">
                                                <input type="hidden" name="currency"        value="{{ $currency }}">
                                                <input type="hidden" name="noches"          value="{{ $noches }}">
                                                @foreach ($adultos as $adulto)

                                                    <input type="hidden" name="adultoss[]" value="{{ $adulto }}">
                                                @endforeach
                                                @foreach ($infantes as $infante)
                                                    <input type="hidden" name="infantess[]" value="{{ $infante }}">
                                                @endforeach
                                                @foreach ($infantes_no_bf as $infante_no_bf)
                                                    <input type="hidden" name="infantess_no_bf[]" value="{{ $infante_no_bf }}">
                                                @endforeach
                                                <input type="hidden" name="plataforma"      value="WEB">
                                                <input type="hidden" name="habitacion_id"   value="{{ $habitacion_id }}">
                                                <input type="submit" value="RESERVA AHORA" class="btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Booking Form End -->
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <!-- Booking Detail -->
                            <div class="booking-detail">
                                <h5>@lang('main.book.about')</h5>
                                <h2>@lang('main.book.selected.room')</h2>
                                <div class="detail-room">
                                    <div class="room-photo">
                                        @if ($habitacion->categoria->tag_es == 'estandar')
                                            <a href="#" data-background="{{ asset('images/rooms/estandar_1.png') }}"></a>
                                        @elseif ($habitacion->categoria->tag_es == 'one-bedroom-suite')
                                            <a href="#" data-background="{{ asset('images/rooms/one1.png') }}"></a>
                                        @elseif ($habitacion->categoria->tag_es == 'ejecutiva')
                                            <a href="#" data-background="{{ asset('images/rooms/ejecutiva_2.png') }}"></a>
                                        @endif
                                    </div>
                                    <div class="room-desc">
                                        <h3><a href="#">{{ (App::getLocale() == 'es') ? $habitacion->categoria->nombre_es : $habitacion->categoria->nombre_en }}</a></h3>
                                        <h4>$ {{ $total }} <small>total</small></h4>
                                    </div>
                                </div>
                                <div class="detail-info">
                                    <ul>
                                        <li>
                                            <label>@lang('main.reserve.checkIn')</label>
                                            <p>{{ $checkIn }}</p>
                                        </li>
                                        <li>
                                            <label>@lang('main.reserve.checkOut')</label>
                                            <p>{{ $checkOut }}</p>
                                        </li>
                                        <li>
                                            <label>@lang('main.reserve.adults')</label>
                                            <p>{{ $_tot_adultos }}</p>
                                        </li>
                                        <li>
                                            <label>@lang('main.reserve.kids')</label>
                                            <p>{{ $_tot_infantes }}</p>
                                        </li>
                                        <li>
                                            <label>@lang('main.reserve.night')</label>
                                            <p>{{ $noches }}</p>
                                        </li>
                                        <li>
                                            <!--label>TAX (10%)</label>
                                            <p>$ 50</p-->
                                        </li>
                                        <li class="total">
                                            <label>@lang('main.reserve.price')</label>
                                            <p>$ {{ $total }}</p>
                                        </li>
                                    </ul>
                                </div>
                                <p style='text-align:center;margin-top:20px;'>@lang('main.tax.done')</p>
                                <p style="text-align: center;">@lang('main.tax.missing')</p>
                            </div>
                            <!-- Booking Detail End -->
                            <!-- Booking Help -->
                            <div class="booking-help">
                                <h5>@lang('main.reserve.help')</h5>
                                <h2>@lang('main.reserve.help.title')</h2>
                                <p>@lang('main.reserve.help.text')</p>
                                <p><a href="mailto:reservaciones@gphoteles.com">reservaciones@gphoteles.com</a></p>
                                <h3 style="font-size: 20px;"><i class="fa fa-phone-square"></i>998 881 6500 EXT. 6503</h3>
                                <h3 style="font-size: 20px;"><i class="fa fa-phone-square"></i>998 122 1861 EXT. 6523</h3>
                            </div>
                            <!-- Booking Help End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Booking End -->
</div>

@endsection
