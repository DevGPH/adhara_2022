@extends('layouts.app')

@section('content')
<style>
    .wrapper-inner{
        max-width               : 1300px;
        margin                  : 0 auto;
        padding-top             : 100px;
        padding-bottom          : 100px;
        padding-left            : 60px;
        padding-right           : 60px;
    }

    @media screen and (min-width: 1200px) {
        .wrapper-inner{
            padding-top: 50px;
            padding-left: 150px;
            padding-right: 150px;
        }
    }
</style>

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

    <!-- Section Features -->
    <div class="section">
        <div class="widget-features-grid">
            <div class="wrapper-inner">
                <!-- Features Content -->
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/mandala.png') }}">
                                <a href="{{ route('mandala',[App::getLocale()]) }}">
                                    <h3>@lang('main.fun.beach.title')</h3>
                                    <p>@lang('main.fun.beach.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/traslados.png') }}">
                                <a href="#">
                                    <h3>@lang('main.fun.bus.title')</h3>
                                    <p>@lang('main.fun.bus.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/puerto.png') }}">
                                <a href="#">
                                    <h3>@lang('main.fun.port.title')</h3>
                                    <p>@lang('main.fun.port.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/cenote.png') }}">
                                <a href="#">
                                    <h3>@lang('main.fun.cenote.title')</h3>
                                    <p>@lang('main.fun.cenote.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/chiapas.png') }}">
                                <a href="#">
                                    <h3>@lang('main.fun.explore.title')</h3>
                                    <p>@lang('main.fun.explore.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/fun/avis.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.fun.rent.title')</h3>
                                    <p>@lang('main.fun.rent.text')</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Content End -->
            </div>
        </div>
    </div>
</div>

@endsection
