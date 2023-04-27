@extends('layouts.app')

@section('content')

@if (session('error'))
    <div class="alert alert-danger" style="position:absolute">
        {{ session('error') }}
    </div>
@endif
@error('condiciones')
    <div class="alert alert-danger" style="position:absolute">{{ $message }}</div>
@enderror

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>STAY THE GRANDIUM</h5>
                <h1>Booking Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>
                <!-- Title Emd -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">PAGES</a></li>
                        <li>BOOKING PAGE</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Booking -->
    <div class="section">
        <div class="widget-booking-form">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <!-- Booking Complete -->
                            <div class="booking-complete">
                                <h5>BOOKING</h5>
                                <h2>Your Reservation Completed</h2>
                                <div class="complete-message">
                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.
                                </div>
                            </div>
                            <!-- Booking Complete End -->
                            <!-- Booking Form -->
                            <div class="booking-form">
                                <h5>BOOKING FORM</h5>
                                <h2>Personal Info</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.</p>
                                <div class="data-form">
                                    <form action="booking.php" id="booking-form" method="POST">
                                        @csrf
                                        <input type="hidden" name="form-room" value="Royal Single Room">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkin" id="form-checkin" value="04/20/2016" placeholder="CHECK IN" class="datepicker">
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="form-checkout" id="form-checkout" value="05/22/2016" placeholder="CHECK OUT" class="datepicker">
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-adults" id="form-adults">
                                                    <option value="">ADULTS</option>
                                                    <option value="1">1 ADULT</option>
                                                    <option value="2" selected>2 ADULT</option>
                                                    <option value="3">3 ADULT</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="form-childrens" id="form-childrens">
                                                    <option value="">CHILDRENS</option>
                                                    <option value="1" selected>1 CHILDREN</option>
                                                    <option value="2">2 CHILDREN</option>
                                                    <option value="3">3 CHILDREN</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-name" id="form-name" placeholder="YOUR NAME">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-surname" id="form-surname" placeholder="YOUR SURNAME">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-email" id="form-email" placeholder="YOUR EMAIL ADDRESS">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-phone" id="form-phone" placeholder="YOUR PHONE">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-address1" id="form-address1" placeholder="ADDRESS LINE 1">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-address2" id="form-address2" placeholder="ADDRESS LINE 2">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-city" id="form-city" placeholder="CITY">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form-country" id="form-country" placeholder="COUNTRY">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea cols="6" rows="8" name="form-requirements" id="form-requirements" placeholder="SPECIAL REQUIREMENTS"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                               <p>
                                                    <input type="checkbox" class="form-check-input" name="condiciones" id="condiciones">
                                                    @lang('main.reservations-item019a') <a class="opt-ft-ok " data-toggle="modal" data-target="#myModal">@lang('main.body-item35')</a>  @lang('main.reservations-item019b')
                                                </p>
                                                <p>@lang('main.reservations-item020')</p>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-check-input" type="radio" name="metodo_pago" value="pago_seguro" checked>
                                                <img src="{{ asset('images/logos/tarjeta.png') }}" width="200" height="70" title="Magica">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" name="habitaciones"    value="{{ $habitaciones }}">
                                                <input type="hidden" name="checkIn"         value="{{ $checkIn }}">
                                                <input type="hidden" name="checkOut"        value="{{ $checkOut }}">
                                                <input type="hidden" name="precio"          value="{{ $total }}">
                                                <input type="hidden" name="currency"        value="{{ $currency }}">
                                                <input type="hidden" name="noches"          value="{{ $noches }}">
                                                @foreach ($adultos as $adulto)

                                                    <input type="hidden" name="adultoss[]" value="{{ $adulto }}">
                                                @endforeach
                                                @foreach ($infantes as $infante)
                                                    <input type="hidden" name="infantess[]" value="{{ $infante }}">
                                                @endforeach
                                                @foreach ($infantes_no_bf as $infante_no_bf)
                                                    <input type="hidden" name="infantess_no_bf[]" value="{{ $infante_no_bf }}">
                                                @endforeach
                                                <input type="hidden" name="plataforma"      value="WEB">
                                                <input type="hidden" name="habitacion_id"   value="{{ $habitacion_id }}">
                                                <input type="submit" value="BOOK NOW BY EMAIL" class="btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Booking Form End -->
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <!-- Booking Detail -->
                            <div class="booking-detail">
                                <h5>BOOKING DETAILS</h5>
                                <h2>Selected Room</h2>
                                <div class="detail-room">
                                    <div class="room-photo">
                                        <a href="rooms-detail.html" data-background="assets/img/photo-room-5.jpg"></a>
                                    </div>
                                    <div class="room-desc">
                                        <h3><a href="rooms-detail.html">{{ $habitacion->categoria->nombre_es }}</a></h3>
                                        <h4>$ {{ $total }} <small>total</small></h4>
                                    </div>
                                </div>
                                <div class="detail-info">
                                    <ul>
                                        <li>
                                            <label>CHECK IN</label>
                                            <p>{{ $checkIn }}</p>
                                        </li>
                                        <li>
                                            <label>CHECK OUT</label>
                                            <p>{{ $checkOut }}</p>
                                        </li>
                                        <li>
                                            <label>ADULTS</label>
                                            <p>{{ $_tot_adultos }}</p>
                                        </li>
                                        <li>
                                            <label>CHILDRENS</label>
                                            <p>{{ $_tot_infantes }}</p>
                                        </li>
                                        <li>
                                            <label>NIGHT</label>
                                            <p>{{ $noches }}</p>
                                        </li>
                                        <li>
                                            <label>TAX (10%)</label>
                                            <p>$ 50</p>
                                        </li>
                                        <li class="total">
                                            <label>TOTAL PRICE</label>
                                            <p>$ {{ $total }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Booking Detail End -->
                            <!-- Booking Help -->
                            <div class="booking-help">
                                <h5>HELP</h5>
                                <h2>Need Booking Help?</h2>
                                <p>If you need help with booking, Our advisor team are 24/7 at your service to help you.</p>
                                <p><a href="mailto:help@thegrandiumhotel.com">help@thegrandiumhotel.com</a></p>
                                <h3><i class="fa fa-phone-square"></i>1-800-123-45-67</h3>
                            </div>
                            <!-- Booking Help End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Booking End -->
</div>

@endsection
