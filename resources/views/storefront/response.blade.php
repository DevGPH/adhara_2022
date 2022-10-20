@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/web/response.css') }}">

    <div id="existoso" class="container " style="margin-top:100px">
        <div class="row" style="margin-top:0px">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img src="{{ asset('images/icons/reserve.png') }}" alt="" id="response">
                <p style="text-align: center;">@lang('main.succesfully-item001')</p>
                <p style="text-align: center;">@lang('main.succesfully-item002')</p>
                <p style="text-align: center;">@lang('main.succesfully-item003')</p>
                <h4 style="text-align: center;">{{ $folio }}</h4>
                <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item004')</small></p>
                <p style="text-align: center;" class="title-res"> <small>@lang('main.succesfully-item005')</small></p>
            </div>
        </div> 
    </div>

@endsection
