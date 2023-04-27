@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>EXPERIENCE THE FREEDOM</h5>
                <h1>{{ $name }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale(), 0) }}">HOME</a></li>
                        <li><a href="#">ROOMS</a></li>
                        <li>{{ $name }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms Detail -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="widget-rooms-detail">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Room Slider -->
                            <div class="room-slider">
                                <div class="room-price">$ 160.00 <small>PER NIGHT</small></div>
                                <div class="owl-carousel owl-theme owl-type1">
                                    <a href="assets/img/photo-room-detail-5.jpg" data-background="assets/img/photo-room-detail-5.jpg" title="Single Room" class="popup-gallery"></a>
                                    <a href="assets/img/photo-room-detail-4.jpg" data-background="assets/img/photo-room-detail-4.jpg" title="Single Room" class="popup-gallery"></a>
                                    <a href="assets/img/photo-room-detail-3.jpg" data-background="assets/img/photo-room-detail-3.jpg" title="Single Room" class="popup-gallery"></a>
                                    <a href="assets/img/photo-room-detail-2.jpg" data-background="assets/img/photo-room-detail-2.jpg" title="Single Room" class="popup-gallery"></a>
                                    <a href="assets/img/photo-room-detail-1.jpg" data-background="assets/img/photo-room-detail-1.jpg" title="Single Room" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                    <a href="#" data-background="assets/img/photo-room-detail-5.jpg" title="Single Room"></a>
                                    <a href="#" data-background="assets/img/photo-room-detail-4.jpg" title="Single Room"></a>
                                    <a href="#" data-background="assets/img/photo-room-detail-3.jpg" title="Single Room"></a>
                                    <a href="#" data-background="assets/img/photo-room-detail-2.jpg" title="Single Room"></a>
                                    <a href="#" data-background="assets/img/photo-room-detail-1.jpg" title="Single Room"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>ROOM DESCRIPTION</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac scelerisque leo. Curabitur sed ornare orci. Nulla molestie pretium libero quis tincidunt. Nullam at arcu vitae felis dignissim lacinia. Integer vitae ipsum quis dolor convallis tristique. Donec lectus ex, posuere id felis et, commodo viverra felis. Morbi aliquet, mauris ornare bibendum elementum, lectus ante posuere lorem, eu condimentum odio nunc nec justo. Quisque vel sapien molestie, ultricies lectus iaculis, gravida sem. Nullam laoreet ipsum eget nunc auctor, vitae imperdiet dui eleifend. Sed molestie facilisis sollicitudin. Cras tincidunt vestibulum metus, sed posuere dui.</p>
                                <p>Vivamus pharetra tortor et congue gravida. Cras erat libero, malesuada in lorem vel, fringilla finibus diam. Morbi sollicitudin placerat placerat. Nullam euismod cursus mattis. Donec sit amet imperdiet sem, vel molestie purus. Duis blandit pharetra ligula ac sodales. Quisque velit massa, congue quis dignissim id, ornare sed arcu.Phasellus id velit iaculis, vulputate magna in, feugiat felis. Nulla eu ligula quis ante venenatis dapibus. Nulla ut congue est. Maecenas diam felis, volutpat vel orci quis, sodales malesuada lectus. Sed id feugiat turpis. Quisque ac turpis id nibh varius pellentesque vitae vitae lacus.</p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>BOOKING</h5>
                                <h2>Book a Room</h2>
                                <div class="data-form">
                                    <form action="{{ route('reservations',['locale'=>App::getLocale()]) }}" method="GET">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkin" placeholder="CHECK IN" class="datepicker" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkout" placeholder="CHECK OUT" class="datepicker" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="adults" required>
                                                    <option value="">ADULTS</option>
                                                    <option value="1">1 ADULT</option>
                                                    <option value="2">2 ADULT</option>
                                                    <option value="3">3 ADULT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="childrens" required>
                                                    <option value="">CHILDRENS</option>
                                                    <option value="1">1 CHILDREN</option>
                                                    <option value="2">2 CHILDREN</option>
                                                    <option value="3">3 CHILDREN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="habitacion_id" value="{{ $id }}">
                                                <button type="submit" class="btn">BOOK NOW THIS ROOM</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Features -->
                            <div class="room-features">
                                <h5>FEATURES</h5>
                                <h2>Room Features</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> BREAKFAST</li>
                                    <li><i class="fa fa-check"></i> WI-FI</li>
                                    <li><i class="fa fa-check"></i> HAIR DRYER</li>
                                    <li><i class="fa fa-check"></i> LCD TV</li>
                                    <li><i class="fa fa-check"></i> SHOWER AND TAB</li>
                                    <li><i class="fa fa-check"></i> SECURITY SYSTEM</li>
                                    <li><i class="fa fa-check"></i> AIR CONDITIONING</li>
                                    <li><i class="fa fa-check"></i> MINI BAR</li>
                                    <li><i class="fa fa-check"></i> TEA AND COFFEE SET</li>
                                </ul>
                            </div>
                            <!-- Room Features End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
</div>


@endsection
