@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/staff/back.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5 style="width:100%;text-align: center;">{{ ($lang == 'en') ? 'DESCUBRE NUESTROS ESPACIOS' : 'DISCOVER OUR SPACES' }}</h5>
                <h1 style="width:100%;text-align: center;margin-top:30px;">{{ ($lang == 'en') ? 'Galería Hotel Adhara Cancún' : 'Hotel Adhara Cancún Gallery' }}</h1>
                <a href="https://adharacancun.com/es/gallery">
                    <img src="{{ asset('images/staff/ad.png') }}" alt="Adhara Cancun" style="width: 200px;display:block;margin:auto; margin-top:20px;">
                </a>
                <h1 style="width:100%;text-align: center;margin-top:30px;">{{ ($lang == 'en') ? 'Galería Hotel Adhara Express' : 'Hotel Adhara Cancún Express' }}</h1>
                <a href="https://adharaexpress.com.mx/es/galeria">
                    <img src="{{ asset('images/staff/ex.png') }}" alt="Adhara Cancun" style="width: 200px;display:block;margin:auto;margin-top:20px;">
                </a>
                <!-- Title End -->
            </div>
        </div>
    </div>
</div>

@endsection
