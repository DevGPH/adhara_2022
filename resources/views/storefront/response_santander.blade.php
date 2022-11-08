@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/web/response_adhara.css') }}">

    <div id="existoso" class="main-body " style="margin-top:100px">
        <div class="row" style="margin-top:0px">
            <div class="col-xs-12 col-sm-12 col-md-12">
                
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
                    <h4 style="text-align: center;">{{ $referencia }}</h4>
                    <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item004')</small></p>
                    <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item005')</small></p>
                @endif
            </div>
        </div> 
    </div>

@endsection
