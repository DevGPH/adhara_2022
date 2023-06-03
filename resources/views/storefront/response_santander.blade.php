@extends('layouts.app')

@section('content')
    <!-- Site Main -->
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section" style="padding-top:80px;padding-bottom:80px; width:800px;display:block;margin:0px auto;">
        @if ($status == 'error')
            <img src="{{ asset('images/santander/caution-error.svg') }}" class="img-responsive" alt="" style="width: 200px; display:block;margin:0px auto;">
            <img src="{{ asset('images/santander/line-error.svg') }}" class="img-responsive" alt="">
            <p style="text-align: center;"> {{ $response }} </p>
            <p style="text-align: center;"> {{ $msg }} </p>
        @else
            <img src="{{ asset('images/mail/reserva.png') }}" alt="Hotel Adhara Cancun" style="display: block;margin:0px auto;margin-bottom:40px;">
            <p style="text-align: center;margin-bottom:0px;">@lang('main.succesfully-item001')</p>
            <p style="text-align: center;margin-bottom:0px;">@lang('main.succesfully-item002')</p>
            <p style="text-align: center;">@lang('main.succesfully-item003')</p>
            <h3 style="text-align: center; margin-top:20px;margin-bottom:20px;">{{ $referencia ?? "0000" }}</h3>
            <p style="text-align: center;margin-bottom:0px;"> <small>@lang('main.succesfully-item004')</small></p>
            <p style="text-align: center;margin-top:0px;"> <small>@lang('main.succesfully-item005')</small></p>
        @endif
    </div>
    <!-- Section Page Title End -->
</div>
<!-- Site Main End -->

@endsection
