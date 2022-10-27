@extends('layouts.app')

@section('content')

@include('layouts.web.slide')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

    <div class="main-body">

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <img src="{{ asset('images/habitaciones/estandar.png') }}" class="img-fluid">
                <h4>@lang('main.grupos-h')</h4>
                <p>@lang('main.grupos-p')</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <img src="@lang('main.grupos-home')" class="img-fluid">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <img class="img-fluid" src="{{ asset('images/grupos/fachada.png') }}" alt="">
            </div>
        </div>
    </div>

@endsection
