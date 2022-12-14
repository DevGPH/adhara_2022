@extends('layouts.app')

@section('content')

@include('layouts.web.slide')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

    <div class="main-body">

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <img src="{{ asset('images/grupos/suitcase.png') }}" class="img-fluid" style="display: block;margin:0 auto; margin-bottom:20px;">
                <h4 style="text-align: center;margin-bottom:20px;">@lang('main.grupos-h')</h4>
                <p style="text-align: center;margin-bottom:50px;">@lang('main.grupos-p')</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6" style="padding: 0px;">
                <img src="@lang('main.grupos-home')" class="img-fluid">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="padding: 0px;">
                <img class="img-fluid" src="{{ asset('images/grupos/fachada.png') }}" alt="">
            </div>
        </div>
    </div>

@endsection
