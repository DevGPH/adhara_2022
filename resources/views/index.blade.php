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
                                    <a href="rooms-detail.html" data-background="{{ asset($room->preview) }}"></a>
                                </div>
                                <div class="item-desc">
                                    <h2><a href="rooms-detail.html">{{ (App::getLocale() == 'es') ?  $room->categoria->nombre_es: $room->categoria->nombre_en }}</a></h2>
                                    <!--h3>$ 160.00</h3-->
                                    <p>{{ (App::getLocale() == 'es') ? $room->categoria->desc_es : $room->categoria->desc_en }}</p>
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
                            <p>@lang('main.index.hotel.item-3')</p>
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
                                <a href="#">
                                    <h3>@lang('main.index.hotel.service.pool.title')</h3>
                                    <p>@lang('main.index.hotel.service.pool.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/restaurant.png') }}">
                                <a href="#">
                                    <h3>@lang('main.index.hotel.service.restaurant.title')</h3>
                                    <p>@lang('main.index.hotel.service.restaurant.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/eventos.png') }}">
                                <a href="#">
                                    <h3>@lang('main.index.hotel.service.eventos.title')</h3>
                                    <p>@lang('main.index.hotel.service.eventos.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/negocios.png') }}">
                                <a href="#">
                                    <h3>@lang('main.index.hotel.service.bussiness.title')</h3>
                                    <p>@lang('main.index.hotel.service.bussiness.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/terraza.png') }}">
                                <a href="#">
                                    <h3>@lang('main.index.hotel.service.terraza.title')</h3>
                                    <p>@lang('main.index.hotel.service.terraza.text')</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="features-item" data-background="{{ asset('images/utilities/gym.png') }}">
                                <a href="#">
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
                        <a href="{{ asset('images/gallery/room.png') }}" data-background="{{ asset('images/gallery/room.png') }}" title="Foto Habitación" class="popup-gallery">
                            <span class="item-text">One Bed Room Suite</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/pool.png') }}" data-background="{{ asset('images/gallery/pool.png') }}" title="Photo Name" class="popup-gallery">
                            <span class="item-text">Pool & Bar</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/gym.png') }}" data-background="{{ asset('images/gallery/gym.png') }}" title="Photo Name" class="popup-gallery">
                            <span class="item-text">Gimnasio</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/lobby.png') }}" data-background="{{ asset('images/gallery/lobby.png') }}" title="Photo Name" class="popup-gallery">
                            <span class="item-text">Centro de negocios</span>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('images/gallery/restaurant.png') }}" data-background="{{ asset('images/gallery/restaurant.png') }}" title="Photo Name" class="popup-gallery">
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
                    <a href="https://vimeo.com/39493181" class="video-play popup-video"><i class="fa fa-play"></i></a>
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
                    <h5>¡Te garantizamos la mejor tarifa!</h5>
                    <h2>Todas las temporadas del año</h2>
                    <p>Estamos completamente seguros de ofrecer esta promesa, porque desde nuestra página web estas haciendo un trato directo con nosotros y ningún intermediario o agencía de ventas externa, puede extender una mejor oferta que la que nosotros te presentamos desde nuestro eficiente y seguro sistema de reservaciones online.</p>
                </div>
                <!-- Offers Title End -->
                <!-- Offers Content -->
                <div class="widget-inner">
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/desayuno.png') }}"></div>
                            <div class="item-desc">
                                <h3>¡Reserva ahora!</h3>
                                <p>La mejor tarifa disponible hoy en Cancún</p>
                                <p>¡Obtén beneficios exclusivos al reservar directamente en nuestra página web!</p>
                                <a href="#" class="btn-link">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/clubestrella.png') }}"></div>
                            <div class="item-desc">
                                <h3>¡Únete a nuestro club de lealtad!</h3>
                                <p>¡Inscríbete en el portal!</p>
                                <p>Compra con nuestros socios y acumula puntos para cambiarlos por recompensas participantes!</p>
                                <a href="https://clubestrella.mx/es" target="_blank" class="btn-link">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/meal.png') }}"></div>
                            <div class="item-desc">
                                <h3>¿Grande o enorme?</h3>
                                <p>Como te guste más.</p>
                                <p>¡Pruébalos todos! Conoce nuestros sabores disponibles en las plataformas de alimentos participantes.</p>
                                <a href="#" class="btn-link">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <div class="offers-item">
                        <div class="item-inner">
                            <div class="item-photo" data-background="{{ asset('images/offers/oktrip.png') }}"></div>
                            <div class="item-desc">
                                <h3>Visita oktrip.mx</h3>
                                <p>En OkTrip podrás descubrir y reservar los mejores hoteles, tours y experiencias al mejor precio.</p>
                                <a href="https://oktrip.mx/" target="_blank" class="btn-link">LEER MÁS</a>
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
                    <h5>BLOG</h5>
                    <h2>Latest News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                </div>
                <!-- Blog Title End -->
                <!-- Blog Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>24</b>DEC</div>
                            <div class="media-photo">
                                <a href="blog-single.html" data-background="{{ asset('images/blogs/photo-blog-1.jpg') }}"></a>    
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single.html">Best Things to Do In London Enjoy the Nightlife</a></h3>
                            <h5>EVENTS</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single.html" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>21</b>NOV</div>
                            <div class="media-photo">
                                <a href="blog-single.html" data-background="{{ asset('images/blogs/photo-blog-2.jpg') }}"></a>    
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single.html">A Walk from The Grandium Hotel Around</a></h3>
                            <h5>TRAVEL</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single.html" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="item-media">
                            <div class="item-date"><b>19</b>OCT</div>
                            <div class="media-photo">
                                <a href="blog-single.html" data-background="{{ asset('images/blogs/photo-blog-3.jpg') }}"></a>    
                            </div>
                        </div>
                        <div class="item-desc">
                            <h3><a href="blog-single.html">Top Events in London This February</a></h3>
                            <h5>EVENTS</h5>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <a href="blog-single.html" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-item">
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
                    </div>
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
                    <h5>TESTIMONIALS</h5>
                    <h2>Happy Clients</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                </div>
                <!-- Testimonials Title End -->
                <!-- Testimonials Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-1.jpg') }}"></div>
                            <h5>MARILYN SUTTLE</h5>
                            <h6>UK, BRIGHTON</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-2.jpg') }}"></div>
                            <h5>JACK MASON</h5>
                            <h6>IRELAND</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-3.jpg') }}"></div>
                            <h5>MICHAEL FELDSTEIN</h5>
                            <h6>POLAND</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-4.jpg') }}"></div>
                            <h5>JOHN FEDERICO</h5>
                            <h6>ITALY</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-1.jpg') }}"></div>
                            <h5>MARILYN SUTTLE</h5>
                            <h6>UK, BRIGHTON</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-2.jpg') }}"></div>
                            <h5>JACK MASON</h5>
                            <h6>IRELAND</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-3.jpg') }}"></div>
                            <h5>MICHAEL FELDSTEIN</h5>
                            <h6>POLAND</h6>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="item-comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et nisl consequat, semper est non, convallis neque. Phasellus id dictum libero. Etiam nunc libero feugiat vel sem non.
                        </div>
                        <div class="item-customer">
                            <div class="customer-photo" data-background="{{ asset('images/utilities/user-4.jpg') }}"></div>
                            <h5>JOHN FEDERICO</h5>
                            <h6>ITALY</h6>
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