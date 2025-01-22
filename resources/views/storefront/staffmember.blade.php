@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/staff/back.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <img src="{{ asset('images/staff/' . $staff->deparment . '.jpg') }}" alt="{{ $staff->staff_member }}" style="width: 200px;display:block;margin:auto;">
                <h5 style="width:100%;text-align: center;">@lang('main.keep.touch')</h5>
                <h1 style="width:100%;text-align: center;">{{ $staff->staff_member }}</h1>
                <p style="width:100%;text-align: center;margin-top:12px;">{{ $staff->title_es }}</p>
                <p style="width:100%;text-align: center;margin-top:0px;margin-bottom:20px;">{{ $staff->title_en }}</p>
                <div style="width: 100%;display:block;">
                    <ul style="margin: auto;width:fit-content;">
                        <li style="margin-bottom: 10px;"><img src="{{ asset('images/staff/t.png') }}" alt="Telephone" style="width: 15px; margin-right:15px;"> Tel. <a href="tel:+52{{  str_replace(' ', '', $staff->telephone)  }}" target="_blank"> {{ $staff->telephone }}</a></li>
                        <li style="margin-bottom: 10px;"><img src="{{ asset('images/staff/c.png') }}" alt="Mobile" style="width: 15px; margin-right:15px;"> Cel. <a href="tel:+52{{  str_replace(' ', '', $staff->mobile)  }}" target="_blank"> {{ $staff->mobile }}</a></li>
                        <li style="margin-bottom: 10px;"><img src="{{ asset('images/staff/m.png') }}" alt="Email" style="width: 15px; margin-right:15px;"> <a href="mailto:{{ $staff->email }}" target="_blank"> {{ $staff->email }}</a></li>
                        <li style="margin-bottom: 10px;"><img src="{{ asset('images/staff/w.png') }}" alt="Whatsapp" style="width: 15px; margin-right:15px;"> Cel. <a href="https://api.whatsapp.com/send?phone=52{{  str_replace(' ', '', $staff->mobile)  }}" target="_blank"> {{ $staff->mobile }}</a></li>
                    </ul>
                </div>
                <!-- Title End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Services -->
    <div class="section" style="padding-bottom: 45px;">
        <div class="row" style="margin-top: 80px;">
            <img src="{{ asset('images/staff/logo-adhara.png') }}" alt="Adhara Cancun" style="display: block;margin:auto;width:150px;margin-bottom:30px;">
            <p style="text-align: center;"><a href="https://adharacancun.com" target="_blank" style="padding:15px;border-radius:10px;background-color:white;">WWW.ADHARACANCUN.COM</a></p>       
        </div>
        <div class="row" style="margin-top: 50px;">
            <img src="{{ asset('images/staff/logo-ex.png') }}" alt="Adhara Express" style="display: block;margin:auto;width:150px;margin-bottom:30px;">
            <p style="text-align: center;"><a href="https://adharaexpress.com.mx" target="_blank" style="padding:15px;border-radius:10px;background-color:white;">WWW.ADHARAEXPRESS.COM.MX</a></p>   
        </div>

    </div>
    <!-- Section Services End -->
</div>

@endsection
