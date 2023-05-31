@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/services/fondo.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.services.title')</h5>
                <h1>@lang('main.services.subtitle')</h1>
                <p>@lang('main.services.text')</p>
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
                        <div class="photo-big" data-background="{{ asset('images/services/whats3.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/whats4.png') }}"></div>
                        <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-default">IR A WHATSAPP</a>
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
                        <p>@lang('main.service.bus.text2')</p>
                    </div>
                </div>
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
                <!--div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="assets/img/photo-services-5-1.jpg"></div>
                        <div class="photo-small" data-background="assets/img/photo-services-5-2.jpg"></div>
                        <a href="#" class="btn btn-default">LEARN MORE</a>
                    </div>
                    <div class="item-desc">
                        <h5>OUR FACILITIES</h5>
                        <h2>Spa &amp; Beauty Center</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div-->
            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>

@endsection
