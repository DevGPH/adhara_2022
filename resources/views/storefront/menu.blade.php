@extends('layouts.app')

@section('content')

<div class="site-main">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/ceviche_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/tabemono_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/wano_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @else
        <img src="{{ asset('images/menus/ceviche_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/tabemono_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/wano_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @endif
</div>

@endsection
