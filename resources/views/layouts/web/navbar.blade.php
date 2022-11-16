<!-- Site Header -->
<div class="site-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="wrapper">
            <div class="header-contact">
                <ul>
                    <li>+1-800-123-45-67</li>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="header-lang">
                <ul>
                    <li class="active"><a href="#"> {{ Str::of(App::getLocale())->upper() }}</a></li>
                    <li><a href="{{ route(Route::currentRouteName(),$lang)}}">{{ (App::getLocale() == 'es') ? 'EN' : 'ES' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="wrapper">
            <div class="header-logo">
                <a href="{{ route('inicio', ['locale' => App::getLocale()]) }}"><img src="{{ asset('images/logos/logo.png') }}" alt="Hotel Adhara Cancun"></a>
            </div>
            <div class="header-nav">
                <ul class="nav-left">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li class="sub"><a href="rooms.html">ROOMS</a>
                        <ul>
                            <li><a href="rooms.html">ROOMS LISTING</a></li>
                            <li><a href="rooms-detail.html">ROOMS DETAIL</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">SERVICES</a></li>
                </ul>
                <ul class="nav-right">
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="booking.html">BOOKING</a></li>
                    <li class="sub"><a href="blog.html">BLOG</a>
                        <ul>
                            <li><a href="blog.html">BLOG LISTING</a></li>
                            <li><a href="blog-single.html">BLOG SINGLE PHOTO</a></li>
                            <li><a href="blog-single-gallery.html">BLOG SINGLE GALLERY</a></li>
                            <li><a href="blog-single-vimeo.html">BLOG SINGLE VIMEO</a></li>
                            <li><a href="blog-single-youtube.html">BLOG SINGLE YOUTUBE</a></li>
                        </ul>
                    </li>
                    <li><a href="contactus.html">CONTACT</a></li>
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


  