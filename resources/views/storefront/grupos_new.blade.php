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
                <h5>@lang('main.gpr.title')</h5>
                <h1>@lang('main.gpr.subtitle')</h1>
                <p> @lang('main.gpr.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.gpr.title')</a></li>
                        <li>Club de playa Mandala beach</li>
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
                                    <a href="{{ asset('images/grupos/1.png') }}" data-background="{{ asset('images/grupos/1.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/2.png') }}" data-background="{{ asset('images/grupos/2.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/3.png') }}" data-background="{{ asset('images/grupos/3.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/4.png') }}" data-background="{{ asset('images/grupos/4.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/5.png') }}" data-background="{{ asset('images/grupos/5.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/6.png') }}" data-background="{{ asset('images/grupos/6.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/7.png') }}" data-background="{{ asset('images/grupos/7.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/grupos/8.png') }}" data-background="{{ asset('images/grupos/8.png') }}" title="Standar Room" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/grupos/1.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/2.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/3.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/4.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/5.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/6.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/7.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/grupos/8.png') }}" title="Standar Room"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.gpr.p3')</h5>
                                <p> @lang('main.gpr.p4') </p>
                                <p> @lang('main.gpr.p5') </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.gpr.p')</h5>
                                <h2>@lang('main.gpr.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981478870" target="_blank" class="btn btn-booking"> @lang('main.gpr.live')</a>
                            </div>
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.gpr.feafures.title')</h5>
                                <h2>@lang('main.gpr.feafures.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.gpr.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.gpr.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.gpr.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.gpr.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.gpr.list.5')</li>
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
