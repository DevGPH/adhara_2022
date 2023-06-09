@extends('layouts.app')

@section('content')

<!-- Site Main -->
<div class="site-main">
    <!-- Section Slider -->
    @include('_partials.slider')
    <!-- Section Slider End -->

    <!-- Section Rooms -->
    <div class="section">
        <div class="widget-rooms-carousel top-over">
            <div class="wrapper-inner">
                <!-- Rooms Title -->
                <div class="widget-title">
                    <h5>OUR ROOMS</h5>
                    <h2>Experience The Freedom</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                </div>
                <!-- Rooms Title End -->
                <!-- Rooms Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    @foreach ($rooms as $room)
                        <div class="rooms-item">
                            <div class="item-inner">
                                <div class="item-photo">
                                    <a href="{{ route('rooms',[App::getLocale(),$room->id]) }}" data-background="{{ asset($room->preview) }}"></a>
                                </div>
                                <div class="item-desc">
                                    <h2><a href="{{ route('rooms',[App::getLocale(),$room->id]) }}">{{ (App::getLocale() == 'es') ?  $room->categoria->nombre_es: $room->categoria->nombre_en }}</a></h2>
                                    <!--h3>$ 160.00</h3-->
                                    @if ($room->categoria->tag_es == 'estandar')
                                        <p> @lang('main.room-estandar')</p>
                                    @elseif ($room->categoria->tag_es == 'one-bedroom-suite')
                                        <p> @lang('main.room-one')</p>
                                    @elseif ($room->categoria->tag_es == 'ejecutiva')
                                        <p> @lang('main.room-ejecutivo')</p>
                                    @endif
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Rooms Carousel End -->
            </div>
        </div>
    </div>
    <!-- Section Rooms End -->

    <!-- Section About Promo -->
    <div class="section">
        <div class="widget-about-promo" data-background="{{ asset('images/utilities/hotel.png') }}">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>@lang('main.index.location')</h5>
                            <h2>@lang('main.index.hotel')</h2>
                            <p>@lang('main.index.hotel.item-1')</p>
                            <p>@lang('main.index.hotel.item-2')</p>
                            <!--a href="aboutus.html" class="btn">LEARN MORE</a-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section About Promo End -->

    <!-- Section Features -->
    <div class="section">
        <div class="widget-features-grid">
            <div class="wrapper-inner">
                <!-- Features Title -->
                <div class="widget-title">
                    <h5>@lang('main.index.hotel.amenities')</h5>
                    <h2>@lang('main.index.hotel.amenities.label')</h2>
                    <p>@lang('main.index.hotel.amenities.text')</p>
                    <p>@lang('main.index.hotel.amenities.text.2')</p>
                </div>
                <!-- Features Title End -->
                <!-- Features Content -->
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/pool.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.pool.title')</h3>
                                    <p>@lang('main.index.hotel.service.pool.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/restaurant.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.restaurant.title')</h3>
                                    <p>@lang('main.index.hotel.service.restaurant.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/eventos.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.eventos.title')</h3>
                                    <p>@lang('main.index.hotel.service.eventos.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/negocios.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.bussiness.title')</h3>
                                    <p>@lang('main.index.hotel.service.bussiness.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/terraza.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.terraza.title')</h3>
                                    <p>@lang('main.index.hotel.service.terraza.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/gym.png') }}">
                                <a href="{{ route('hotel.details',[App::getLocale()]) }}">
                                    <h3>@lang('main.index.hotel.service.gym.title')</h3>
                                    <p>@lang('main.index.hotel.service.gym.text')</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Content End -->
            </div>
        </div>
    </div>
    <!-- Section Features End -->

    <!-- Section Gallery -->
    <div class="section">
        <div class="widget-gallery-carousel">
            <div class="wrapper-full-inner">
                <!-- Gallery Title -->
                <div class="widget-title">
                    <h5>@lang('main.index.gallery.title')</h5>
                    <h2>@lang('main.index.gallery.title.2')</h2>
                    <p>@lang('main.index.gallery.text')</p>
                </div>
                <!-- Gallery Title End -->
                <!-- Gallery Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/room.png') }}" data-background="{{ asset('images/gallery/room.png') }}" title="One Bed Room Suite" class="popup-gallery">
                            <span class="item-text">One Bed Room Suite</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/pool.png') }}" data-background="{{ asset('images/gallery/pool.png') }}" title="Piscina & Pool Bar" class="popup-gallery">
                            <span class="item-text">Piscina & Pool Bar</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/gym.png') }}" data-background="{{ asset('images/gallery/gym.png') }}" title="Gimnasio" class="popup-gallery">
                            <span class="item-text">@lang('main.index.gallery.gym')</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/lobby.png') }}" data-background="{{ asset('images/gallery/lobby.png') }}" title="Centro de negocios" class="popup-gallery">
                            <span class="item-text">@lang('main.index.gallery.center')</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/restaurant.png') }}" data-background="{{ asset('images/gallery/restaurant.png') }}" title="Lobby Bar" class="popup-gallery">
                            <span class="item-text">Lobby Bar</span>
                        </a>
                    </div>
                </div>
                <!-- Gallery Carousel End -->
            </div>
        </div>
    </div>
    <!-- Section Gallery End -->

    <!-- Section Video -->
    <div class="section">
        <div class="widget-video-full" data-background="{{ asset('/images/utilities/video_background.png') }}">
            <div class="wrapper-full-inner">
                <!-- Video Title -->
                <div class="widget-title">
                    <h5>@lang('main.index.video.title')</h5>
                    <h2>@lang('main.index.video.title.2')</h2>
                    <p>@lang('main.index.video.text')</p>
                </div>
                <!-- Video Title End -->
                <!-- Video Content -->
                <div class="widget-inner">
                    <a href="https://www.youtube.com/watch?v=dZ3SroWHwkE" class="video-play popup-video"><i class="fa fa-play"></i></a>
                </div>
                <!-- Video Content End -->
            </div>
        </div>
    </div>
    <!-- Section Video End -->

    <!-- Section Offers -->
    <div class="section">
        <div class="widget-offers-grid" data-background="{{ asset('images/offers/offers.png') }}">
            <div class="wrapper-inner">
                <!-- Offers Title -->
                <div class="widget-title">
                    <h5>@lang('main.index.offers.title')</h5>
                    <h2>@lang('main.index.offers.subtitle')</h2>
                    <p>@lang('main.index.offers.text')</p>
                </div>
                <!-- Offers Title End -->
                <!-- Offers Content -->
                <div class="widget-inner">
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/desayuno.png') }}"></div>
                            <div class="item-desc">
                                <h3>@lang('main.index.offers.hotel.title')</h3>
                                <p>@lang('main.index.offers.hotel.subtitle')</p>
                                <p>@lang('main.index.offers.hotel.text')</p>
                                <a href="#" class="btn-link">@lang('main.button.more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/clubestrella.png') }}"></div>
                            <div class="item-desc">
                                <h3>@lang('main.index.offers.club.title')</h3>
                                <p>@lang('main.index.offers.club.subtitle')</p>
                                <p>@lang('main.index.offers.text')</p>
                                <a href="https://clubestrella.mx/es" target="_blank" class="btn-link">@lang('main.button.more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/meal.png') }}"></div>
                            <div class="item-desc">
                                <h3>@lang('main.index.offers.restaurant.title')</h3>
                                <p>@lang('main.index.offers.restaurant.subtitle')</p>
                                <p>@lang('main.index.offers.restaurant.text')</p>
                                <a href="#" class="btn-link">@lang('main.button.more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/oktrip.png') }}"></div>
                            <div class="item-desc">
                                <h3>@lang('main.index.offers.oktrip.title')</h3>
                                <p>@lang('main.index.offers.oktrip.text')</p>
                                <a href="https://oktrip.mx/" target="_blank" class="btn-link">@lang('main.button.more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Offers Content End -->
            </div>
        </div>
    </div>
    <!-- Section Offers End -->

    <!-- Section Blog -->
    <div class="section">
        <div class="widget-blog-carousel">
            <div class="wrapper-full-inner">
                <!-- Blog Title -->
                <div class="widget-title">
                    <h5>@lang('main.index.services.title')</h5>
                    <h2>@lang('main.index.services.subtitle')</h2>
                    <p>@lang('main.index.services.text')</p>
                </div>
                <!-- Blog Title End -->
                <!-- Blog Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="blog-item">
                        <div class="item-media">
                            <!--div class="item-date"><img src="{{ asset('images/services/icon.png') }}" alt=""></div-->
                            <div class="media-photo">
                                @if (App::getLocale() == 'en')
                                    <a href="https://api.whatsapp.com/send?phone=529981221861" data-background="{{ asset('images/services/movile_en.png') }}"></a>
                                @else
                                    <a href="https://api.whatsapp.com/send?phone=529981221861" data-background="{{ asset('images/services/movile_es.png') }}"></a>
                                @endif
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="https://api.whatsapp.com/send?phone=529981221861"></a>@lang('main.index.service.whats.title')</h3>
                            <h5>@lang('main.index.service.whats.subtitle')</h5>
                            <p>@lang('main.index.service.whats.text')</p>
                            <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn-link">@lang('main.button.info')</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <!--div class="item-date"><img src="{{ asset('images/services/icon3.png') }}" alt=""></div-->
                            <div class="media-photo">
                                <a href="{{ route('servicios',[App::getLocale()]) }}" data-background="{{ asset('images/services/service2.png') }}"></a>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="{{ route('servicios',[App::getLocale()]) }}"></a>@lang('main.index.service.bus.title')</h3>
                            <h5>@lang('main.index.service.bus.subtitle')</h5>
                            <p>@lang('main.index.service.bus.text')</p>
                            <p>@lang('main.index.service.bus.text2')</p>
                            <p>@lang('main.index.service.bus.text3')</p>
                            <a href="{{ route('servicios',[App::getLocale()]) }}" class="btn-link">@lang('main.button.info')</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <!--div class="item-date"><img src="{{ asset('images/services/icon4.png') }}" alt=""></div-->
                            <div class="media-photo">
                                <a href="{{ route('servicios',[App::getLocale()]) }}" data-background="{{ asset('images/services/service5.png') }}"></a>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="{{ route('servicios',[App::getLocale()]) }}"></a>@lang('main.index.service.parking.title')</h3>
                            <h5>@lang('main.index.service.parking.subtitle')</h5>
                            <p>@lang('main.index.service.parking.text')</p>
                            <a href="{{ route('servicios',[App::getLocale()]) }}" class="btn-link">@lang('main.button.info')</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <!--div class="item-date"><img src="{{ asset('images/services/icon2.png') }}" alt=""></div-->
                            <div class="media-photo">
                                <a href="{{ route('servicios',[App::getLocale()]) }}" data-background="{{ asset('images/services/baño.png') }}"></a>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="{{ route('servicios',[App::getLocale()]) }}"></a>@lang('main.index.service.room.title')</h3>
                            <h5>@lang('main.index.service.room.subtitle')</h5>
                            <p>@lang('main.index.service.room.text')</p>
                            <a href="{{ route('servicios',[App::getLocale()]) }}" class="btn-link">@lang('main.button.info')</a>
                        </div>
                    </div>
                    <!--div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>17</b>SEP</div>
                            <div class="media-gallery">
                                <div class="media-carousel owl-carousel owl-theme owl-type1">
                                    <a href="blog-single-gallery.html" data-background="{{ asset('images/blogs/photo-blog-4.jpg') }}"></a>
                                    <a href="blog-single-gallery.html" data-background="{{ asset('images/blogs/photo-blog-1.jpg') }}"></a>
                                    <a href="blog-single-gallery.html" data-background="{{ asset('images/blogs/photo-blog-2.jpg') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single-gallery.html">Enjoy Wimbledon Finals Week The Grandium Hotel</a></h3>
                            <h5>EVENTS</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single-gallery.html" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>14</b>AUG</div>
                            <div class="media-video video-full">
                                <iframe src="https://player.vimeo.com/video/39493181?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=0" width="500" height="281"></iframe>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single-vimeo.html">The Ultimate Father's Day Gift: The Grandium Hotel</a></h3>
                            <h5>ACCOMONDATION</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single-vimeo.html" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>12</b>MAY</div>
                            <div class="media-video video-full">
                                <iframe src="https://www.youtube.com/embed/SqeYP8EU79M" width="560" height="315" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single-youtube.html">Father's Day Dining &amp; Afternoon Tea Specials</a></h3>
                            <h5>SERVICES</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single-youtube.html" class="btn-link">READ MORE</a>
                        </div>
                    </div-->
                </div>
                <!-- Blog Carousel End -->
            </div>
        </div>
    </div>
    <!-- Section Blog End -->

    <!-- Section Testimonials -->
    <div class="section">
        <div class="widget-testimonials-carousel">
            <div class="wrapper-inner">
                <!-- Testimonials Title -->
                <div class="widget-title">
                    <h5>@lang('main.testimonials.title')</h5>
                    <h2>@lang('main.testimonials.subtitle')</h2>
                    <p>@lang('main.testimonials.text')</p>
                </div>
                <!-- Testimonials Title End -->
                <!-- Testimonials Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <div class="item-comment">
                            @lang('main.testimonials.item1')
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/1.png') }}"></div>
                            <h5>VANESSA N.</h5>
                            <h6>UK, LONDRES</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            @lang('main.testimonials.item2')
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/2.png') }}"></div>
                            <h5>STEFFGA MB.</h5>
                            <h6>COSTA RICA, MS</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            @lang('main.testimonials.item3')
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/3.png') }}"></div>
                            <h5>LAURA A.</h5>
                            <h6>MÉXICO</h6>
                        </div>
                    </div>
                </div>
                <!-- Testimonials Carousel End -->
            </div>
        </div>
    </div>
    <!-- Section Testimonials End -->
</div>
<!-- Site Main End -->



@endsection
