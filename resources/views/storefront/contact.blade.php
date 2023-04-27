@extends('layouts.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success" style="position: absolute;top: 0;z-index: 10000;right: 0;margin-top: 90px;">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger" style="position: absolute;top: 0;z-index: 10000;right: 0;margin-top: 90px;">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" style="position: absolute;top: 0;z-index: 10000;right: 0;margin-top: 90px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Site Main -->
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>GET IN TOUCH WITH US</h5>
                <h1>Contact Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', ['locale' => App::getLocale()]) }}">HOME</a></li>
                        <li>CONTACT PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Contact -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Info -->
                    <div class="widget-contact-info">
                        <ul>
                            <li>
                                <h5>THE GRANDIUM HOTEL</h5>
                                <ul>
                                    <li>The Grandium Hotel 41-49 Longridge Road, Earls Court, London</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:info@thegrandiumhotel.com">info@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h5>RESERVATION</h5>
                                <ul>
                                    <li>Mr. Michael Feldstein - Director of Reservation</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:reservation@thegrandiumhotel.com">reservation@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h5>PUBLIC RELATIONS</h5>
                                <ul>
                                    <li>Ms. Marilyn Suttle - Public Relations Manager</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:public.relations@thegrandiumhotel.com">public.relations@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Contact Info End -->
                </div>
                <div class="col-lg-6">
                    <!-- Contact Form -->
                    <div class="widget-contact-form">
                        <h5>CONTACT FORM</h5>
                        <p>We are eager to hear from you; please fill in your contact information and one of our staff members will contact you shortly.</p>
                        <div class="data-form">
                            <form action="contact.php" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="form-name" name="form-name" placeholder="YOUR NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-surname" name="form-surname" placeholder="YOUR SURNAME">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-email" name="form-email" placeholder="YOUR EMAIL ADDRESS">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-phone" name="form-phone" placeholder="YOUR PHONE">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea cols="6" rows="8" id="form-message" name="form-message" placeholder="YOUR MESSAGE"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="note">* Please fill in all of the required fields</p>
                                    </div>
                                    <div class="col-md-6 align-right">
                                        <input type="submit" value="SEND FORM" class="btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
                <div class="col-lg-12">
                    <!-- Contact Review -->
                    <div class="widget-contact-review">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <i class="fa fa-commenting-o"></i> READ OR WRITE REVIEWS
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-google-plus"></i> GOOGLE PLUS +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-yelp"></i> YELP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-tripadvisor"></i> TRIPADVISOR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Review End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section Contact End -->

    <!-- Section Map -->
    <div class="section">
        <div class="wrapper-full">
            <div class="widget-google-map">
                <!-- Google Map Title -->
                <div class="map-title">
                    <i class="fa fa-map-marker"></i>
                    <h5>MAP</h5>
                </div>
                <!-- Google Map Title End -->
                <!-- Google Map -->
                <div class="map-google"></div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
    <!-- Section Map End -->
</div>
<!-- Site Main End -->

@endsection
