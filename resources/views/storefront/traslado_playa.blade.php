@extends('layouts.app')

@section('content')
@if (session('error'))
    <div class="alert alert-danger alert-dismissible" role="alert" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('error') }}
    </div>
@endif
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/rooms/background_estandar.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.playas.title')</h5>
                <h1>@lang('main.playas.subtitle')</h1>
                <p> @lang('main.playas.text')</p>
                <p> @lang('main.playas.text2')</p>
                <p> @lang('main.playas.text3')</p>
                <p> @lang('main.playas.text4')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.beach.title')</a></li>
                        <li>Traslado a la playa</li>
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
                                    <a href="{{ asset('images/playa/1.png') }}" data-background="{{ asset('images/playa/1.png') }}" title="Traslado a la playa" class="popup-gallery"></a>
                                    <a href="{{ asset('images/playa/2.png') }}" data-background="{{ asset('images/playa/2.png') }}" title="Traslado a la playa" class="popup-gallery"></a>
                                    <a href="{{ asset('images/playa/3.png') }}" data-background="{{ asset('images/playa/3.png') }}" title="Traslado a la playa" class="popup-gallery"></a>
                                    <a href="{{ asset('images/playa/4.png') }}" data-background="{{ asset('images/playa/4.png') }}" title="Traslado a la playa" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/playa/1.png') }}" title="Traslado a la playa"></a>
                                        <a href="#" data-background="{{ asset('images/playa/2.png') }}" title="Traslado a la playa"></a>
                                        <a href="#" data-background="{{ asset('images/playa/3.png') }}" title="Traslado a la playa"></a>
                                        <a href="#" data-background="{{ asset('images/playa/4.png') }}" title="Traslado a la playa"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <!--div class="room-desc">
                                <h5>@lang('main.playas.p3')</h5>
                                <p> @lang('main.playas.p4') </p>
                                <p> @lang('main.playas.p5') </p>
                                <p> @lang('main.playas.p6') </p>
                            </div-->
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <!--div class="room-booking">
                                <h5>@lang('main.playas.p')</h5>
                                <h2>@lang('main.playas.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.playas.live')</a>
                            </div-->
                            <!-- Room Booking End -->
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.playas.features.title')</h5>
                                <h2>@lang('main.playas.features.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.playas.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.playas.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.playas.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.playas.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.playas.list.5')</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
</div>
@endsection
