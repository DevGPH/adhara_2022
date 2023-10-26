<style>
        .mob-only {
            display: none;
        }

        @media (max-width: 600px) {
            .mob-only{
                display: block;
            }
        }

</style>
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
                            @lang('main.nav.whats')
                        </a>
                    </li>
                    <li class="custom-tarifa" id="tarifa-first"><a class="nav-link" target="_blank" style="color: white;">@lang('main.nav.magic.rate')</a></li>
                    <li class="custom-tarifa" id="tarifa-middle"><a class="nav-link" target="_blank" style="color: red;">${{ $rate }}</a><div style="position: absolute;margin-top: 15px;margin-left: -40px;color: white;">@lang('main.nav.taxes')</div></li>
                    <li class="custom-tarifa" id="tarifa-last"><a class="nav-link" target="_blank" style="color: white;"><img src="{{ asset('images/logos/coffeet.png') }}" style="width: 25px;margin-right:6px;" alt="">@lang('main.nav.breakfast')</a></li>
                    @if (Cookie::get('user'))
                        <li class="custom-tarifa" style="margin-left:10px;"><a class="nav-link" href="https://clubestrella.mx" target="_blank" style="color: white;" data-toggle="modal" data-target="#modal-login"><img src="{{ asset('images/logos/clubestrella.png') }}" alt="Clubestrella" style="width: 25px;margin-right:6px;">{{ json_decode(Cookie::get('user'))->name }}</a></li>
                    @else
                       <li class="custom-tarifa" style="margin-left:10px;"><a class="nav-link" href="https://clubestrella.mx" target="_blank" style="color: white;"><img src="{{ asset('images/logos/clubestrella.png') }}" alt="Clubestrella" style="width: 25px;margin-right:6px;">CLUB ESTRELLA</a></li>
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
        <div class="wrapper">
            <div class="header-logo">
                <a href="{{ route('inicio', ['locale' => App::getLocale()]) }}"><img src="{{ asset('images/logos/logo_adhara.png') }}" alt="Hotel Adhara Cancun"></a>
            </div>
            <div class="header-nav">
                <ul class="nav-left">
                    <li><a href="{{ route('inicio', ['locale' => App::getLocale()])}}">@lang('main.nav-home')</a></li>
                    <li class="sub"><a href="#">@lang('main.nav-rooms')</a>
                        <ul class="simpson">
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 6]) }}">{{ (App::getlocale() == 'es') ? 'Habitación Estandar' : 'Standar Room'}}</a></li>
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 7]) }}">{{ (App::getlocale() == 'es') ? 'Habitación One Bedroom Suite' : 'One Bedroom Suite Room'}}</a></li>
                            <li><a href="{{ route('rooms', ['locale' => App::getLocale(), 'id' => 8]) }}">{{ (App::getlocale() == 'es') ? 'Habitación Ejecutiva' : 'Ejecutive Room'}}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('hotel.details', ['locale' => App::getLocale()]) }}">@lang('main.nav-hotel')</a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li><a href="{{ route('servicios', [App::getLocale()]) }}">@lang('main.nav-services')</a></li>
                    <li><a href="{{ route('gallery', App::getLocale(), 0) }}">@lang('main.nav.gallery')</a></li>
                    <li><a href="{{ route('contact', ['locale' => App::getLocale()]) }}">@lang('main.nav-contact')</a></li>
                    <li class="mob-only">
                        <a href="{{ route(Route::currentRouteName(),[$lang,$id])}}">
                            <img src="/images/logos/{{(App::getLocale() == 'es') ? 'usa.png' : 'mexico.png' }}" alt="{{ (App::getLocale() == 'es') ? 'English' : 'Spanish'}}" class="flag-lang">
                            {{ (App::getLocale() == 'es') ? 'EN' : 'ES' }}
                        </a>
                    </li>
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


