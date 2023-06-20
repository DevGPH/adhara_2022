@extends('layouts.app')

@section('content')

<div class="site-main">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/fish_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/menunuevo_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/cocodrillos_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @else
        <img src="{{ asset('images/menus/fish_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/menunuevo_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/cocodrillos_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @endif
</div>

@endsection
