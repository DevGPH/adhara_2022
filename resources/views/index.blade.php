@extends('layouts.app')

@section('content')

@include('layouts.web.slide')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

<div class='main-body'>
    <div class="row" id="initial-section">
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-6 padding-cabing">
            <h4>Hotel Adhara Cancún</h4>
            <p>@lang('main.body-item1')</p>
            <p>@lang('main.body-item2')</p>
            <p><strong>@lang('main.body-item3')</strong></p>
            <!--p><strong>Av. Carlos Nader 1,2,3 SM.1,MZ.2 Quintana Roo, México</strong></p-->
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-6 padding-cabing">
            <img src="{{ asset('images/home/fachada.jpg') }}" class='img-fluid not-full shadow' alt="Adhara Cancun" id="fachada">
        </div>
    </div>

    <div class="row separator" id="room-service">
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-7 padding-cabing">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom_2.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom_3.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom_4.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom_5.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/habitaciones/one_bedroom_6.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
            </div>      
            <script>
                    $(document).ready(function() {
                        $('#owl-demo').owlCarousel({
                            loop: false,
                            margin: 10,
                            nav: true,
                            dotsContainer: '#myDots',
                            navContainer: '#MyNavs',
                            autoplay:true,
                            autoplayTimeout:3000,
                            rewind:true,
                            autoplayHoverPause:false,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                600:{
                                    items:1,
                                    nav:false
                                },
                                1000:{
                                    items:1,
                                    nav:true,
                                    loop:false
                                }
                            }
                        })
                    
                    });
                
                
            </script>
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-5 padding-cabing">
            <h4 class="mob-space">@lang('main.body-item5')</h4>
            <p>@lang('main.body-item6')</p>
            <p>@lang('main.body-item61')</p>
            <div id="myDots" class="owl-dots"></div>
        </div>
    </div>
    <div class="row separator">
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-6 padding-cabing">
            <h4>@lang('main.body-item7')</h4>
            <p>@lang('main.body-item8')</p>
            <p><strong>@lang('main.body-item9')</strong></p>
            <div id="dotsGrill" class="owl-dots"></div>
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-6 padding-cabing">
            <div id="owl-rest" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('images/home/grill_1.png') }}" style="border-radius:8px;width:400px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/home/grill_2.png') }}" style="border-radius:8px;width:400px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/home/grill_3.png') }}" style="border-radius:8px;width:400px;display:block;margin:0 auto;" alt=""></div>
            </div>      
            <script>
                    $(document).ready(function() {
                        $('#owl-rest').owlCarousel({
                            loop: false,
                            margin: 10,
                            nav: true,
                            dotsContainer: '#dotsGrill',
                            navContainer: '#MyNavs',
                            autoplay:true,
                            autoplayTimeout:3000,
                            rewind:true,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                600:{
                                    items:1,
                                    nav:false
                                },
                                1000:{
                                    items:1,
                                    nav:true,
                                    loop:false
                                }
                            }
                        })
                    
                    });
                
                
            </script>
        </div>
    </div>
    <div class="row separator" id="pool-service">
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-7 padding-cabing">
            <div id="owl-pool" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('images/home/pool_4.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/home/pool_6.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
            </div>      
            <script>
                    $(document).ready(function() {
                        $('#owl-pool').owlCarousel({
                            loop: false,
                            margin: 10,
                            nav: true,
                            dotsContainer: '#dotsPool',
                            navContainer: '#MyNavs',
                            autoplay:true,
                            autoplayTimeout:3000,
                            rewind:true,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                600:{
                                    items:1,
                                    nav:false
                                },
                                1000:{
                                    items:1,
                                    nav:true,
                                    loop:false
                                }
                            }
                        })
                    
                    });
                
                
            </script>
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-5 padding-cabing">
            <h4 class="mob-space">@lang('main.body-item10')</h4>
            <p>@lang('main.body-item11')</p>
            <div id="dotsPool" class="owl-dots"></div>
        </div>
    </div>
    <div class="row separator" id='services'>
        <div class="col-12">
            <h4 class='text-c'>@lang('main.body-item12')</h4>
        </div>
        <div class="col-12 col-xs-12 col-md-12 col-lg-4 col-xl-4">
            <h5>@lang('main.body-item13')</h5>
            <img src="{{ asset('images/home/transportation.png') }}" alt="">
            <p style="margin-bottom: 10px">@lang('main.body-item14')</p>
            <p style="margin-top: 10px"><strong>@lang('main.body-dispo')</strong></p>
        </div>
        <div class="col-12 col-xs-12 col-md-12 col-lg-4 col-xl-4">
            <h5>@lang('main.body-item15')</h5>
            <img src="{{ asset('images/home/parking.png') }}" alt="">
            <p>@lang('main.body-item16')</p>
        </div>
        <div class="col-12 col-xs-12 col-md-12 col-lg-4 col-xl-4">
            <h5>@lang('main.body-item17')</h5>
            <img src="{{ asset('images/home/gym.png') }}" alt="">
            <p>@lang('main.body-item18')</p>
        </div>
    </div>

    <div class="row separator" id="pool-service">
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-8 padding-cabing">
            <div id="owl-eve" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('images/home/eventos_1.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
                <div class="item"><img src="{{ asset('images/home/eventos_2.png') }}" style="width:500px;display:block;margin:0 auto;" alt=""></div>
            </div>      
            <script>
                    $(document).ready(function() {
                        $('#owl-eve').owlCarousel({
                            loop: false,
                            margin: 10,
                            nav: true,
                            dotsContainer: '#dotsEve',
                            navContainer: '#MyNavs',
                            autoplay:true,
                            autoplayTimeout:3000,
                            rewind:true,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                600:{
                                    items:1,
                                    nav:false
                                },
                                1000:{
                                    items:1,
                                    nav:true,
                                    loop:false
                                }
                            }
                        })
                    
                    });
                
                
            </script>
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-4 padding-cabing">
            <h4 class="mob-space">Adhara Eventos</h4>
            <p><strong>@lang('main.body-item20')</strong></p>
            <p>@lang('main.body-item21')</p>
            <!--p>@lang('main.body-item22')</p-->
            <p><strong>@lang('main.body-item23')</strong></p>
            <p id='eve-p'><img src="{{ asset('images/icons/social_media/whatsapp.png') }}" class='img-fluid' id='eve-whats' alt=""><a href="https://api.whatsapp.com/send?phone=529981221861" target='_blank'>998 122 1861</a></p>
            <div id="dotsEve" class="owl-dots"></div>
        </div>
    </div>
    <div class="row separator">
        <div class="col-12">
            <h4 class='text-c'>¡Te garantizamos la mejor tarifa!</h4>
            <p id='sub-coco'>@lang('main.body-item25')</p>
        </div>
    </div>
    <!--div class="row separator" id='cocos-sandwich'>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/cerdo.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/pollo.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/cerdo_cerveza.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/resala.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/arrachera.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('images/home/reuben.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4 offset-lg-4 offset-xl-4 col-xl-4">
            <img src="{{ asset('images/home/roast.png') }}" class='img-fluid' alt="">
        </div>
    </div>
    <div class="row" id='coco-link'>
        <div class="col-12">
            <p><strong>@lang('main.body-item27')</strong></p>
            <p><a href="http://cocodrillos.com" target='_blank'><strong>www.cocodrillos.com</strong></a></p>
        </div>
    </div-->
    <div class="row separator" id='ok-link'>
        <div class="col-12">
            <h4 class='text-c'>OkTrip</h4>
            <p>@lang('main.body-item28')</p>
            <p>@lang('main.body-oktrip')</p>
        </div>
        <div class="col-12">
            <p><strong>@lang('main.body-item27')</strong></p>
            <p style="margin-bottom: 30px;"><a href="https://oktrip.mx" target='_blank'><strong>www.oktrip.mx</strong></a></p>
        </div>
    </div>
</div>
<div class="banner">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('images/home/oktrip.jpg') }}" class='img-fluid' alt="">
        </div>
    </div>
</div>

<div class="second-body">
    <div class="row mid-separator" id='club-link'>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-7 padding-cabing">
            <h4>@lang('main.body-item29')</h4>
            <p>@lang('main.body-item30')</p>
            <p>@lang('main.body-item31')</p>
            <p><strong>@lang('main.body-item32')</strong></p>
            <p class="ancor"><a href="http://clubestrella.mx/es" target='_blank'><strong>www.clubestrella.mx</strong></a></p>
        </div>
        <div class="col-12 col-xs-6 col-md-6 col-lg-6 col-xl-5 padding-cabing">
            <img src="{{ asset('images/home/clubestrella.png') }}" class='img-fluid not-full' alt="">
        </div>
    </div>
</div>

@endsection
