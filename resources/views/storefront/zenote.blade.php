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
                <h5>@lang('main.zenote.title')</h5>
                <h1>@lang('main.zenote.subtitle')</h1>
                <p> @lang('main.zenote.text')</p>
                <p> @lang('main.zenote.text2')</p>
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
                                    <a href="{{ asset('images/cenote/cenote1.png') }}" data-background="{{ asset('images/cenote/cenote1.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote2.png') }}" data-background="{{ asset('images/cenote/cenote2.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote3.png') }}" data-background="{{ asset('images/cenote/cenote3.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote4.png') }}" data-background="{{ asset('images/cenote/cenote4.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote5.png') }}" data-background="{{ asset('images/cenote/cenote5.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote6.png') }}" data-background="{{ asset('images/cenote/cenote6.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote7.png') }}" data-background="{{ asset('images/cenote/cenote7.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote8.png') }}" data-background="{{ asset('images/cenote/cenote8.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote9.png') }}" data-background="{{ asset('images/cenote/cenote9.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote10.png') }}" data-background="{{ asset('images/cenote/cenote10.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote11.png') }}" data-background="{{ asset('images/cenote/cenote11.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote12.png') }}" data-background="{{ asset('images/cenote/cenote12.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote13.png') }}" data-background="{{ asset('images/cenote/cenote13.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                    <a href="{{ asset('images/cenote/cenote14.png') }}" data-background="{{ asset('images/cenote/cenote14.png') }}" title="Cenotes Zapotes" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/cenote/cenote1.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote2.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote3.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote4.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote5.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote6.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote7.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote8.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote9.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote10.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote11.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote12.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote13.png') }}" title="Cenotes Zapotes"></a>
                                        <a href="#" data-background="{{ asset('images/cenote/cenote14.png') }}" title="Cenotes Zapotes"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.zenote.p3')</h5>
                                <p> @lang('main.zenote.p4') </p>
                                <p> @lang('main.zenote.p5') </p>
                                <p> @lang('main.zenote.p6') </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.zenote.p')</h5>
                                <h2>@lang('main.zenote.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.zenote.live')</a>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.zenote.feafures.title')</h5>
                                <h2>@lang('main.zenote.feafures.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.zenote.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.zenote.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.zenote.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.zenote.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.zenote.list.5')</li>
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
