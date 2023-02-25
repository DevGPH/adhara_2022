<!-- Site Header -->
<div class="site-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="wrapper">
            <div class="header-contact">
                <ul>
                    <li>
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=529981221861" target='_blank'>
                            <img src="{{ asset('images/logos/whatsapp.png') }}" id='whats_header'> 
                            +52 9981221861
                        </a>
                    </li>
                    <li><a class="nav-link" href="https://www.facebook.com/HotelAdharaCancun" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="nav-link" href="https://www.instagram.com/adharacancun/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <!--li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li-->
                </ul>
            </div>
            <div class="header-lang">
                <ul>
                    <li class="active"><a href="#"> {{ Str::of(App::getLocale())->upper() }}</a></li>
                    <li>
                        <a href="{{ route(Route::currentRouteName(),$lang)}}">
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
                    <li><a href="index.html">@lang('main.nav-home')</a></li>
                    <!--li><a href="aboutus.html">ABOUT US</a></li-->
                    <li class="sub"><a href="rooms.html">@lang('main.nav-rooms')</a>
                        <ul>
                            <li><a href="rooms.html">ROOMS LISTING</a></li>
                            <li><a href="rooms-detail.html">ROOMS DETAIL</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">@lang('main.nav-services')</a></li>
                </ul>
                <ul class="nav-right">
                    <li><a href="gallery.html">CLUB ESTRELLA</a></li>
                    <!--li><a href="booking.html">BOOKING</a></li-->
                    <!--li class="sub"><a href="blog.html">BLOG</a>
                        <ul>
                            <li><a href="blog.html">BLOG LISTING</a></li>
                            <li><a href="blog-single.html">BLOG SINGLE PHOTO</a></li>
                            <li><a href="blog-single-gallery.html">BLOG SINGLE GALLERY</a></li>
                            <li><a href="blog-single-vimeo.html">BLOG SINGLE VIMEO</a></li>
                            <li><a href="blog-single-youtube.html">BLOG SINGLE YOUTUBE</a></li>
                        </ul>
                    </li-->
                    <li><a href="contactus.html">@lang('main.nav-contact')</a></li>
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


  