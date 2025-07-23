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
                <h5>@lang('main.avis.title')</h5>
                <h1>@lang('main.avis.subtitle')</h1>
                <p> @lang('main.avis.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.beach.title')</a></li>
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
                                    <a href="{{ asset('images/avis/av1.png') }}" data-background="{{ asset('images/avis/av1.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av2.png') }}" data-background="{{ asset('images/avis/av2.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av3.jpg') }}" data-background="{{ asset('images/avis/av3.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av4.jpg') }}" data-background="{{ asset('images/avis/av4.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av5.jpg') }}" data-background="{{ asset('images/avis/av5.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av6.jpg') }}" data-background="{{ asset('images/avis/av6.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av7.jpg') }}" data-background="{{ asset('images/avis/av7.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av8.jpg') }}" data-background="{{ asset('images/avis/av8.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/avis/av1.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av2.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av3.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av4.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av5.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av6.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av7.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av8.jpg') }}" title="Standar Room"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.avis.p3')</h5>
                                <p> @lang('main.avis.p4') </p>
                                <p> @lang('main.avis.p5') </p>
                                <p> @lang('main.avis.p6') </p>
                                <p> @lang('main.avis.p7') </p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.avis.p')</h5>
                                <h2>@lang('main.avis.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.avis.live')</a>
                            </div>
                            <!-- Room Booking End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
</div>


@endsection
