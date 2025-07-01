@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/hotel_detalles/fondo_hotel.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.details.hotel.title')</h5>
                <h1>@lang('main.details.hotel.subtitle')</h1>
                <p>@lang('main.details.hotel.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>@lang('main.breadcrumb.services')</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Services -->
    <div class="section">
        <div class="wrapper-inner">
            <!-- Services List -->
            <div class="widget-services-list">
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/park_intern.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/estacionamiento2.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.service.parking.title')</h5>
                        <h2>@lang('main.service.parking.subtitle')</h2>
                        <p>@lang('main.service.parking.text')</p>
                        <p>@lang('main.service.parking.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/especial1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/especial3.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.service.room.title')</h5>
                        <h2>@lang('main.service.room.subtitle')</h2>
                        <p>@lang('main.service.room.text')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/whats3.png') }}"></div>
                        @if (App::getLocale() == 'es')
                            <div class="photo-small" data-background="{{ asset('images/services/whats_es.png') }}"></div>
                        @else
                            <div class="photo-small" data-background="{{ asset('images/services/whats_en.png') }}"></div>
                        @endif

                        <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-default">@lang('main.service.whats.button')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.service.whats.title')</h5>
                        <h2>@lang('main.service.whats.subtitle')</h2>
                        <p>@lang('main.service.whats.text')</p>
                        <p>@lang('main.service.whats.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/transpor1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/transpor2.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.service.bus.title')</h5>
                        <h2>@lang('main.service.bus.subtitle')</h2>
                        <p>@lang('main.service.bus.text')</p>
                        <!--p>@lang('main.service.bus.text2')</p>
                        <p>@lang('main.service.bus.text3')</p-->
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/11.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Piscina & Pool Bar</h5>
                        <h2>@lang('main.details.hotel.pool.subtitle')</h2>
                        <p>@lang('main.details.hotel.pool.text')</p>
                        <p>@lang('main.details.hotel.pool.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/2.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/22.png') }}"></div>
                        <a href="{{ route('menu.hotel', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.details.hotel.food.title')</h5>
                        <h2>@lang('main.details.hotel.food.subtitle')</h2>
                        <p>@lang('main.details.hotel.food.text')</p>
                        <p>@lang('main.details.hotel.food.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/3.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/33.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.details.hotel.event.title')</h5>
                        <h2>@lang('main.details.hotel.event.subtitle')</h2>
                        <p>@lang('main.details.hotel.event.text')</p>
                        <p>@lang('main.details.hotel.event.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/4.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/44.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.details.hotel.center.title')</h5>
                        <h2>@lang('main.details.hotel.center.subtitle')</h2>
                        <p>@lang('main.details.hotel.center.text')</p>
                        <p>@lang('main.details.hotel.center.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/5.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/55.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.details.hotel.terrace.title')</h5>
                        <h2>@lang('main.details.hotel.terrace.subtitle')</h2>
                        <p>@lang('main.details.hotel.terrace.text')</p>
                        <p>@lang('main.details.hotel.terrace.text2')</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/6.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/66.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>@lang('main.details.hotel.gym.title')</h5>
                        <h2>@lang('main.details.hotel.gym.subtitle')</h2>
                        <p>@lang('main.details.hotel.gym.text')</p>
                        <p>@lang('main.details.hotel.gym.text2')</p>
                    </div>
                </div>
            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>

@endsection
