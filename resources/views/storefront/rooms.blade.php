@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            @if ($habitacion->categoria->tag_es == 'estandar')
                <div class="widget-background" data-background="{{ asset('images/rooms/background_estandar.png') }}"></div>
            @elseif ($habitacion->categoria->tag_es == 'one-bedroom-suite')
                <div class="widget-background" data-background="{{ asset('images/rooms/background.png') }}"></div>
            @elseif ($habitacion->categoria->tag_es == 'ejecutiva')
                <div class="widget-background" data-background="{{ asset('images/rooms/background_ejecutivo.png') }}"></div>
            @endif
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>{{ (App::getLocale() == 'es') ? $habitacion->categoria->subtittulo_es : $habitacion->categoria->subtittulo_en }}</h5>
                <h1>{{( App::getLocale() == 'es' ) ? 'Habitación ' . $name : $name . ' Room' }}</h1>
                <p> {{ (App::getLocale() == 'es') ? $habitacion->categoria->short_desc_es : $habitacion->categoria->short_desc_en }} </p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.breadcrumb.rooms')</a></li>
                        <li>{{( App::getLocale() == 'es' ) ? 'HABITACIÓN ' . $name : $name . ' ROOM' }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms Detail -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="widget-rooms-detail">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Room Slider -->
                            <div class="room-slider">
                                <!--div class="room-price">$ 160.00 <small>PER NIGHT</small></div-->
                                <div class="owl-carousel owl-theme owl-type1">
                                    @if ($habitacion->categoria->tag_es == 'estandar')
                                        <a href="{{ asset('images/rooms/estandar_1.png') }}" data-background="{{ asset('images/rooms/estandar_1.png') }}" title="Standar Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/estandar_2.png') }}" data-background="{{ asset('images/rooms/estandar_2.png') }}" title="Standar Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/estandar_3.png') }}" data-background="{{ asset('images/rooms/estandar_3.png') }}" title="Standar Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/estandar_4.png') }}" data-background="{{ asset('images/rooms/estandar_4.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    @elseif ($habitacion->categoria->tag_es == 'one-bedroom-suite')
                                        <a href="{{ asset('images/rooms/one1.png') }}" data-background="{{ asset('images/rooms/one1.png') }}" title="One BedRoom Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/one2.png') }}" data-background="{{ asset('images/rooms/one2.png') }}" title="One BedRoom Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/one3.png') }}" data-background="{{ asset('images/rooms/one3.png') }}" title="One BedRoom Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/one4.png') }}" data-background="{{ asset('images/rooms/one4.png') }}" title="One BedRoom Room" class="popup-gallery"></a>
                                    @elseif ($habitacion->categoria->tag_es == 'ejecutiva')
                                        <a href="{{ asset('images/rooms/ejecutiva_1.png') }}" data-background="{{ asset('images/rooms/ejecutiva_1.png') }}" title="Ejecutive Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/ejecutiva_2.png') }}" data-background="{{ asset('images/rooms/ejecutiva_2.png') }}" title="Ejecutive Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/ejecutiva_3.png') }}" data-background="{{ asset('images/rooms/ejecutiva_3.png') }}" title="Ejecutive Room" class="popup-gallery"></a>
                                        <a href="{{ asset('images/rooms/ejecutiva_4.png') }}" data-background="{{ asset('images/rooms/ejecutiva_4.png') }}" title="Ejecutive Room" class="popup-gallery"></a>
                                    @endif
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                    @if ($habitacion->categoria->tag_es == 'estandar')
                                        <a href="#" data-background="{{ asset('images/rooms/estandar_1.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/estandar_2.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/estandar_3.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/estandar_4.png') }}" title="Standar Room"></a>

                                    @elseif ($habitacion->categoria->tag_es == 'one-bedroom-suite')
                                        <a href="#" data-background="{{ asset('images/rooms/one1.png') }}" title="One BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/one2.png') }}" title="One BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/one3.png') }}" title="One BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/one4.png') }}" title="One BedRoom Room"></a>

                                    @elseif ($habitacion->categoria->tag_es == 'ejecutiva')
                                        <a href="#" data-background="{{ asset('images/rooms/ejecutiva_1.png') }}" title="Two BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/ejecutiva_2.png') }}" title="Two BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/ejecutiva_3.png') }}" title="Two BedRoom Room"></a>
                                        <a href="#" data-background="{{ asset('images/rooms/ejecutiva_4.png') }}" title="Two BedRoom Room"></a>
                                    @endif
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.room.desc.title')</h5>
                                <p> {{ (App::getLocale() == 'es') ? $habitacion->categoria->desc_es : $habitacion->categoria->desc_en }} </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.room.booking')</h5>
                                <h2>@lang('main.room.booking.room')</h2>
                                <div class="data-form">
                                    <form action="{{ route('reservations',['locale'=>App::getLocale()]) }}" method="GET">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkin" placeholder="@lang('main.booking.checkIn')" class="datepicker" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkout" placeholder="@lang('main.booking.checkOut')" class="datepicker" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="adultos" required>
                                                    <option value="">@lang('main.booking.adults')</option>
                                                    <option value="1">1 @lang('main.booking.adult')</option>
                                                    <option value="2">2 @lang('main.booking.adults')</option>
                                                    <option value="3">3 @lang('main.booking.adults')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="infantes" required>
                                                    <option value="">@lang('main.booking.kids')</option>
                                                    <option value="1">0 @lang('main.booking.kids')</option>
                                                    <option value="1">1 @lang('main.booking.kid')</option>
                                                    <option value="2">2 @lang('main.booking.kids')</option>
                                                    <option value="3">3 @lang('main.booking.kids')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="habitacion_id" value="{{ $id }}">
                                                <input type="hidden" name="rooms" value="1">
                                                <input type="hidden" name="custom_booking" value="true">
                                                <button type="submit" class="btn">@lang('main.booking.now')</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Features -->
                            <div class="room-features">
                                <h5>@lang('main.room.feafures')</h5>
                                <h2>@lang('main.room.feafures.room')</h2>
                                <ul>
                                    @foreach ($amenidades as $item)
                                        <li><i class="fa fa-check"></i> {{ (App::getLocale() == 'es') ? $item->amenidad->nombre_es : $item->amenidad->nombre_en }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Room Features End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
</div>


@endsection
