@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <img src="{{ asset('images/covid/desktop1.png') }}" alt="" class="img-fluid"> 
    </div>
</div>


<div id="covid" class="container" style="margin-top:30px">
    <div class="row" style="margin-top:0px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>@lang('main.covid-item003')</h4>
            <img src="{{ asset('images/covid/logo_cristal.png') }}" alt="cristal" class="title-img">
            <img src="{{ asset('images/covid/iconos_cristal.png') }}" alt="cristal" class="title-img">
            <p>@lang('main.covid-item004') </p>
            <img src="{{ asset('images/covid/ShieldCovidText.JPG') }}" alt="Free covid" class="title-img" id="shield-covid">
            <h4><img src="{{ asset('images/covid/1.png') }} " class="icon-img"   alt="Bienvenida">&nbsp; @lang('main.covid-item006')</h4>
            <p> @lang('main.covid-item007') </p>
            <p> @lang('main.covid-item008') </p>
            <p> @lang('main.covid-item009') </p>
            <p> @lang('main.covid-item010') </p>
            <p> @lang('main.covid-item011') </p>
            <p> @lang('main.covid-item012') </p>
            <h4><img src="{{ asset('images/covid/2.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item013')</h4>
            <p> @lang('main.covid-item014') </p>
            <p> @lang('main.covid-item015') </p>
            <p> @lang('main.covid-item016') </p>
            <p> @lang('main.covid-item017') </p>
            <h4><img src="{{ asset('images/covid/3.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item018')</h4>
            <p> @lang('main.covid-item019') </p>
            <p> @lang('main.covid-item020') </p>
            <p> @lang('main.covid-item021') </p>
            <p> @lang('main.covid-item022') </p>
            <p> @lang('main.covid-item023') </p>
            <h4><img src="{{ asset('images/covid/4.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item024')</h4>
            <p> @lang('main.covid-item025') </p>
            <p> @lang('main.covid-item026') </p>
            <p> @lang('main.covid-item027') </p>
            <p> @lang('main.covid-item028') </p>
            <p> @lang('main.covid-item029') </p>
            <p> @lang('main.covid-item030') </p>
            <h4><img src="{{ asset('images/covid/5.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item031')</h4>
            <p> @lang('main.covid-item032') </p>
            <p> @lang('main.covid-item033') </p>
            <p> @lang('main.covid-item034') </p>
            <h4><img src="{{ asset('images/covid/6.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item035')</h4>
            <p> @lang('main.covid-item036') </p>
            <p> @lang('main.covid-item037') </p>
            <p> @lang('main.covid-item038') </p>
            <p> @lang('main.covid-item039') </p>
            <p> @lang('main.covid-item040') </p>
            <h4><img src="{{ asset('images/covid/7.png') }} " class="icon-img"   alt="Wellcome">&nbsp; @lang('main.covid-item041')</h4>
            <p> @lang('main.covid-item042') </p>
            <p> @lang('main.covid-item043') </p>
            <p class="center"> <a href="{{ route('inicio',['locale' => App::getLocale()]) }}" class="btn btn-outline-danger" role="button"> @lang('main.covid-item044') </a>   </p>
        </div>
    </div>

</div>

@endsection
