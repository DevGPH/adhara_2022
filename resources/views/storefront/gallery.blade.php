@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/gallery/fondo_galeria.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.gallery.title')</h5>
                <h1>@lang('main.gallery.subtitle')</h1>
                <p>@lang('main.gallery.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>@lang('main.breadcrumb.gallery')</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Gallery -->
    <div class="section">
        <div class="wrapper-inner">
            <!-- Gallery Filter -->
            <div class="widget-filter-top">
                <ul>
                    <li class="active"><a href="#" data-filter="*">@lang('main.gallery.all')</a></li>
                    <li><a href="#" data-filter=".rooms">@lang('main.gallery.rooms')</a></li>
                    <li><a href="#" data-filter=".restaurant">@lang('main.gallery.food')</a></li>
                    <li><a href="#" data-filter=".welness">@lang('main.gallery.gym')</a></li>
                    <li><a href="#" data-filter=".skybar">@lang('main.gallery.pool')</a></li>
                    <li><a href="#" data-filter=".conference">@lang('main.gallery.event')</a></li>
                    <!--li><a href="#" data-filter=".conference">CONFERENCE</a></li-->
                </ul>
            </div>
            <!-- Gallery Filter End -->
            <!-- Gallery List -->
            <div class="widget-gallery-grid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/1.png') }}" data-background="{{ asset('images/gallery/1.png') }}" title="Habitación estándar" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/2.png') }}" data-background="{{ asset('images/gallery/2.png') }}" title="Habitación ejecutiva" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/3.png') }}" data-background="{{ asset('images/gallery/3.png') }}" title="Baño de habitación ejecutiva" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/4.png') }}" data-background="{{ asset('images/gallery/4.png') }}" title="Bed Room Suite " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/5.png') }}" data-background="{{ asset('images/gallery/5.png') }}" title="Desayunador Bed Room Suite " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/6.png') }}" data-background="{{ asset('images/gallery/6.png') }}" title="Barra Bed Room Suite" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/7.png') }}" data-background="{{ asset('images/gallery/7.png') }}" title="Loby Bar" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/8.png') }}" data-background="{{ asset('images/gallery/8.png') }}" title="Buffet restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/9.png') }}" data-background="{{ asset('images/gallery/9.png') }}" title="Pan recién horneado Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/10.png') }}" data-background="{{ asset('images/gallery/10.png') }}" title="Barra fría Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/11.png') }}" data-background="{{ asset('images/gallery/11.png') }}" title="Buffet restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/12.png') }}" data-background="{{ asset('images/gallery/12.png') }}" title="Cortes restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/13.png') }}" data-background="{{ asset('images/gallery/13.png') }}" title="Restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/14.png') }}" data-background="{{ asset('images/gallery/14.png') }}" title="Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/15.png') }}" data-background="{{ asset('images/gallery/15.png') }}" title="Restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/16.png') }}" data-background="{{ asset('images/gallery/16.png') }}" title="Restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/17.png') }}" data-background="{{ asset('images/gallery/17.png') }}" title="Pan recién horneado Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/18.png') }}" data-background="{{ asset('images/gallery/18.png') }}" title="Restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/19.png') }}" data-background="{{ asset('images/gallery/19.png') }}" title="Gimnasio" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/20.png') }}" data-background="{{ asset('images/gallery/20.png') }}" title="Gimnasio" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/21.png') }}" data-background="{{ asset('images/gallery/21.png') }}" title="Gimnasio" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/22.png') }}" data-background="{{ asset('images/gallery/22.png') }}" title="Gimnasio" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/23.png') }}" data-background="{{ asset('images/gallery/23.png') }}" title="Terraza Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/24.png') }}" data-background="{{ asset('images/gallery/24.png') }}" title="Piscina Hotel Adhara Cancún " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/25.png') }}" data-background="{{ asset('images/gallery/25.png') }}" title="Piscina & Pool bar Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/26.png') }}" data-background="{{ asset('images/gallery/26.png') }}" title="Jardín Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/27.png') }}" data-background="{{ asset('images/gallery/27.png') }}" title="Sala de juntas Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/28.png') }}" data-background="{{ asset('images/gallery/28.png') }}" title="Piscina & Pool bar Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/29.png') }}" data-background="{{ asset('images/gallery/29.png') }}" title="Terraza Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/30.png') }}" data-background="{{ asset('images/gallery/30.png') }}" title="Piscina Hotel Adhara Cancún " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/31.png') }}" data-background="{{ asset('images/gallery/31.png') }}" title="Piscina Hotel Adhara Cancún " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/32.png') }}" data-background="{{ asset('images/gallery/32.png') }}" title="Baño de habitación estándar" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item restaurant">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/33.png') }}" data-background="{{ asset('images/gallery/33.png') }}" title="Restaurante Adhara Grill" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/34.png') }}" data-background="{{ asset('images/gallery/34.png') }}" title="Decoración Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/35.png') }}" data-background="{{ asset('images/gallery/35.png') }}" title="Entrada Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/36.png') }}" data-background="{{ asset('images/gallery/36.png') }}" title="Piscina Hotel Adhara Cancún " class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/37.png') }}" data-background="{{ asset('images/gallery/37.png') }}" title="Naturaleza Hotel Adhara Cancún" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/38.png') }}" data-background="{{ asset('images/gallery/38.png') }}" title="Salón de eventos Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/39.png') }}" data-background="{{ asset('images/gallery/39.png') }}" title="Salón de eventos Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/40.png') }}" data-background="{{ asset('images/gallery/40.png') }}" title="Salón de eventos Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/41.png') }}" data-background="{{ asset('images/gallery/41.png') }}" title="Salón de eventos Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="{{ asset('images/gallery/42.png') }}" data-background="{{ asset('images/gallery/42.png') }}" title="Salón de eventos Adhara Eventos" class="popup-gallery"></a>
                        </div>
                    </div>
                    <!--div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar restaurant">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-6.jpg" data-background="assets/img/photo-gallery-6.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-7.jpg" data-background="assets/img/photo-gallery-7.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar restaurant">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-8.jpg" data-background="assets/img/photo-gallery-8.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar restaurant">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-9.jpg" data-background="assets/img/photo-gallery-9.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-2.jpg" data-background="assets/img/photo-gallery-2.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-10.jpg" data-background="assets/img/photo-gallery-10.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item conference">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-11.jpg" data-background="assets/img/photo-gallery-11.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item wedding restaurant conference">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-12.jpg" data-background="assets/img/photo-gallery-12.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item wedding">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-13.jpg" data-background="assets/img/photo-gallery-13.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-3.jpg" data-background="assets/img/photo-gallery-3.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-14.jpg" data-background="assets/img/photo-gallery-14.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-15.jpg" data-background="assets/img/photo-gallery-15.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness wedding">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-16.jpg" data-background="assets/img/photo-gallery-16.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item welness wedding">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-17.jpg" data-background="assets/img/photo-gallery-17.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-4.jpg" data-background="assets/img/photo-gallery-4.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div-->
                </div>
            </div>
            <!-- Gallery List End -->
        </div>
    </div>
    <!-- Section Gallery End -->
</div>

@endsection
