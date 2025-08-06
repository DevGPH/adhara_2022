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
                <h5>@lang('main.maya.title')</h5>
                <h1>@lang('main.maya.subtitle')</h1>
                <p> @lang('main.maya.text')</p>
                <p> @lang('main.maya.text2')</p>
                <p> @lang('main.maya.text3')</p>
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
                                    <a href="{{ asset('images/tren/1.png') }}" data-background="{{ asset('images/tren/1.png') }}" title="tren maya" class="popup-gallery"></a>
                                    <a href="{{ asset('images/tren/2.png') }}" data-background="{{ asset('images/tren/2.png') }}" title="tren maya" class="popup-gallery"></a>
                                    <a href="{{ asset('images/tren/3.png') }}" data-background="{{ asset('images/tren/3.png') }}" title="tren maya" class="popup-gallery"></a>
                                    <a href="{{ asset('images/tren/4.png') }}" data-background="{{ asset('images/tren/4.png') }}" title="tren maya" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/tren/1.png') }}" title="tren maya"></a>
                                        <a href="#" data-background="{{ asset('images/tren/2.png') }}" title="tren maya"></a>
                                        <a href="#" data-background="{{ asset('images/tren/3.png') }}" title="tren maya"></a>
                                        <a href="#" data-background="{{ asset('images/tren/4.png') }}" title="tren maya"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.maya.p3')</h5>
                                <p> @lang('main.maya.p4') </p>
                                <p> @lang('main.maya.p5') </p>
                                <p> @lang('main.maya.p6') </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.maya.p')</h5>
                                <h2>@lang('main.maya.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.maya.live')</a>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.maya.features.title')</h5>
                                <h2>@lang('main.maya.features.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.maya.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.maya.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.maya.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.maya.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.maya.list.5')</li>
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
