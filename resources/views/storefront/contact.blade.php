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
                <h5>@lang('main.contact.touch')</h5>
                <h1>@lang('main.contact.page')</h1>
                <p>@lang('main.contact.description')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', ['locale' => App::getLocale()]) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>{{ (App::getLocale() == 'es') ? 'CONTACTO' : 'CONTACT' }}</li>
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
                                <h5>HOTEL ADHARA CANCÚN</h5>
                                <ul>
                                    <li>Av. Carlos Nader 1,2,3 SM.1, MZ.2, C.P. 77500, Cancún Quintana Roo, México.</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:info@thegrandiumhotel.com">info@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h5>@lang('main.contact.reservaciones')</h5>
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
                        <h5>@lang('main.contact.form.title')</h5>
                        <p>@lang('main.contact.form.label')</p>
                        <div class="data-form">
                            <form action="contact.php" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="form-name" name="form-name" placeholder="@lang('main.contact.form.name')*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-surname" name="form-surname" placeholder="@lang('main.contact.form.lastname')*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-email" name="form-email" placeholder="@lang('main.contact.form.email')*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-phone" name="form-phone" placeholder="@lang('main.contact.form.phone')*">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea cols="6" rows="8" id="form-message" name="form-message" placeholder="@lang('main.contact.form.message')*"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="note">* @lang('main.contact.form.require')</p>
                                    </div>
                                    <div class="col-md-6 align-right">
                                        <input type="submit" value="@lang('main.contact.form.send')" class="btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
                <!--div class="col-lg-12">
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
                </div-->
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
                <div class="map-google" id="map" style="width: 100%; height:100%;"></div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
    <!-- Section Map End -->
</div>
<!-- Site Main End -->

@endsection
