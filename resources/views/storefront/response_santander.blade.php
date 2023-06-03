@extends('layouts.app')

@section('content')
    <!-- Site Main -->
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        @if ($status == 'error')
            <img src="{{ asset('images/santander/caution-error.svg') }}" class="img-responsive" alt="" style="width: 200px; display:block;margin:0px auto;">
            <img src="{{ asset('images/santander/line-error.svg') }}" class="img-responsive" alt="">
            <p style="text-align: center;"> {{ $response }} </p>
            <p style="text-align: center;"> {{ $msg }} </p>
        @else
            <img src="{{ asset('images/icons/reserve.png') }}" alt="" id="response">
            <p style="text-align: center;">@lang('main.succesfully-item001')</p>
            <p style="text-align: center;">@lang('main.succesfully-item002')</p>
            <p style="text-align: center;">@lang('main.succesfully-item003')</p>
            <h4 style="text-align: center;">{{ $referencia ?? "0000" }}</h4>
            <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item004')</small></p>
            <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item005')</small></p>
        @endif
    </div>
    <!-- Section Page Title End -->
</div>
<!-- Site Main End -->

@endsection
