@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/gallery/fondo_galeria.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>DISCOVER THE GRANDIUM</h5>
                <h1>Gallery Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">PAGES</a></li>
                        <li>GALLERY PAGE</li>
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
                    <li class="active"><a href="#" data-filter="*">ALL PHOTOS</a></li>
                    <li><a href="#" data-filter=".rooms">ROOMS</a></li>
                    <li><a href="#" data-filter=".skybar">SKY BAR &amp; LOUNGE</a></li>
                    <li><a href="#" data-filter=".welness">WELNESS &amp; SPA</a></li>
                    <li><a href="#" data-filter=".restaurant">RESTAURANT</a></li>
                    <li><a href="#" data-filter=".wedding">WEDDING</a></li>
                    <li><a href="#" data-filter=".conference">CONFERENCE</a></li>
                </ul>
            </div>
            <!-- Gallery Filter End -->
            <!-- Gallery List -->
            <div class="widget-gallery-grid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                        <div class="gallery-item">
                            <a href="assets/img/photo-gallery-1.jpg" data-background="assets/img/photo-gallery-1.jpg" title="Photo Name" class="popup-gallery"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item skybar restaurant">
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
                    </div>
                </div>
            </div>
            <!-- Gallery List End -->
        </div>
    </div>
    <!-- Section Gallery End -->
</div>

@endsection
