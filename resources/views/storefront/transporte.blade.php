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
                <h5>@lang('main.transport.title')</h5>
                <h1>@lang('main.transport.subtitle')</h1>
                <p> @lang('main.transport.text')</p>
                <p> @lang('main.transport.text2')</p>
                <p> @lang('main.transport.text3')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.beach.title')</a></li>
                        <li>Tour Cenotes Zapotes</li>
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
                                    <a href="{{ asset('images/transporte/1.png') }}" data-background="{{ asset('images/transporte/1.png') }}" title="TRANSFERS" class="popup-gallery"></a>
                                    <a href="{{ asset('images/transporte/2.png') }}" data-background="{{ asset('images/transporte/2.png') }}" title="TRANSFERS" class="popup-gallery"></a>
                                    <a href="{{ asset('images/transporte/3.png') }}" data-background="{{ asset('images/transporte/3.png') }}" title="TRANSFERS" class="popup-gallery"></a>
                                    <a href="{{ asset('images/transporte/4.png') }}" data-background="{{ asset('images/transporte/4.png') }}" title="TRANSFERS" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/transporte/1.png') }}" title="TRANSFERS"></a>
                                        <a href="#" data-background="{{ asset('images/transporte/2.png') }}" title="TRANSFERS"></a>
                                        <a href="#" data-background="{{ asset('images/transporte/3.png') }}" title="TRANSFERS"></a>
                                        <a href="#" data-background="{{ asset('images/transporte/4.png') }}" title="TRANSFERS"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.transport.p3')</h5>
                                <p> @lang('main.transport.p4') </p>
                                <p> @lang('main.transport.p5') </p>
                                <p> @lang('main.transport.p6') </p>
                                <p> @lang('main.transport.p7') </p>
                                <p> @lang('main.transport.p8') </p>
                                <p> @lang('main.transport.p9') </p>
                                <p> @lang('main.transport.p10') </p>
                                <p> @lang('main.transport.p11') </p>
                                <p> @lang('main.transport.p12') </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.transport.p')</h5>
                                <h2>@lang('main.transport.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.transport.live')</a>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.transport.features.title')</h5>
                                <h2>@lang('main.transport.features.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.transport.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.transport.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.transport.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.transport.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.transport.list.5')</li>
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
