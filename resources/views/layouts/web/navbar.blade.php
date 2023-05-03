<!-- Site Header -->
<div class="site-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="wrapper">
            <div class="header-contact">
                <ul>
                    <li class="custom-link">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=529981221861" target='_blank' style="color:white;">
                            <img src="{{ asset('images/logos/whats_icon.png') }}" id='whats_header'>
                            COTIZA, RESERVA Y PAGA POR WHATSAPP: 998 122 1861
                        </a>
                    </li>
                    <li class="custom-tarifa" id="tarifa-first"><a class="nav-link" target="_blank" style="color: white;">TARIFA MÁGICA</a></li>
                    <li class="custom-tarifa" id="tarifa-middle"><a class="nav-link" target="_blank" style="color: rgb(138 113 153 / 90%);">${{ $rate }}</a></li>
                    <li class="custom-tarifa" id="tarifa-last"><a class="nav-link" target="_blank" style="color: white;"><img src="{{ asset('images/logos/coffeet.png') }}" style="width: 25px;margin-right:6px;" alt=""> INCLUYE DESAYUNO</a></li>
                    @if (Cookie::get('user'))
                        <li class="custom-tarifa" style="margin-left:10px;"><a class="nav-link" href="https://clubestrella.mx" target="_blank" style="color: white;" data-toggle="modal" data-target="#modal-login"><img src="{{ asset('images/logos/clubestrella.png') }}" alt="Clubestrella" style="width: 25px;margin-right:6px;">{{ json_decode(Cookie::get('user'))->name }}</a></li>
                    @else
                       <li class="custom-tarifa" style="margin-left:10px;"><a class="nav-link" href="https://clubestrella.mx" target="_blank" style="color: white;" data-toggle="modal" data-target="#modal-login"><img src="{{ asset('images/logos/clubestrella.png') }}" alt="Clubestrella" style="width: 25px;margin-right:6px;">CLUB ESTRELLA</a></li>
                    @endif
                    <!--li><a class="nav-link" href="https://www.instagram.com/adharacancun/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li-->
                </ul>
            </div>
            <div class="header-lang">
                <ul style="padding-top: 8px;">
                    <li class="active"><a href="#"> {{ Str::of(App::getLocale())->upper() }}</a></li>
                    <li>
                        <a href="{{ route(Route::currentRouteName(),[$lang,$id])}}">
                            <img src="/images/logos/{{(App::getLocale() == 'es') ? 'usa.png' : 'mexico.png' }}" alt="{{ (App::getLocale() == 'es') ? 'English' : 'Spanish'}}" class="flag-lang">
                            {{ (App::getLocale() == 'es') ? 'EN' : 'ES' }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="wrapper center-block">
            <!--div class="header-logo">
                <a href="{{ route('inicio', ['locale' => App::getLocale()]) }}"><img src="{{ asset('images/logos/logo_adhara.png') }}" alt="Hotel Adhara Cancun"></a>
            </div-->
            <div class="header-nav" style="display: inline-block;width:100%;">
                <ul class="nav-left" style="padding-right: 0px;">
                    <li><a href="{{ route('inicio', ['locale' => App::getLocale()])}}">@lang('main.nav-home')</a></li>
                    <!--li><a href="aboutus.html">ABOUT US</a></li-->
                    <li class="sub"><a href="#">@lang('main.nav-rooms')</a>
                        <ul class="simpson">
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 6]) }}">Estandar</a></li>
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 7]) }}">One Bedroom Suite</a></li>
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 8]) }}">Ejecutiva</a></li>
                        </ul>
                    </li>
                    <li class="sub"><a href="#">@lang('main.nav-hotel')</a>
                        <ul class="simpson">
                            <li><a href="#">RESTAURANTE ADHARA GRILL</a></li>
                            <li><a href="#">PISCINA Y POOL & BAR</a></li>
                            <li><a href="#">EVENTOS EJECUTIVOS</a></li>
                            <li><a href="#">CENTRO DE NEGOCIOS</a></li>
                            <li><a href="#">TERRAZA</a></li>
                            <li><a href="#">GYM</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li><img src="{{ asset('images/logos/logo_adhara.png') }}" alt="Hotel Adhara Cancun" style="width: 200px; margin-left:20px;margin-right:20px;"></li>
                </ul>
                <ul class="nav-right" style="padding-left: 0px;">

                    <!--li><a href="booking.html">BOOKING</a></li-->
                    <li class="sub"><a href="#">@lang('main.nav-services')</a>
                        <ul class="simpson">
                            <li><a href="#">HABITACIONES ADAPTADAS</a></li>
                            <li><a href="#">ESTACIONAMIENTO</a></li>
                            <li><a href="#">TRANSPORTACIÓN</a></li>
                            <li><a href="#">ASISTENCIA VIA WHATSAPP</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('gallery', App::getLocale(), 0) }}">GALERÍA</a></li>
                    <li><a href="{{ route('contact', ['locale' => App::getLocale()]) }}">@lang('main.nav-contact')</a></li>
                </ul>
            </div>
            <div class="header-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->
</div>
<!-- Site Header End -->


