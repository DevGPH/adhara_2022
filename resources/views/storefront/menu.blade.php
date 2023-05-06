@extends('layouts.app')

@section('content')

<div style="margin-top:90px">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/grill_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/cocodrillos_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/bebidas_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @else
        <img src="{{ asset('images/menus/grill_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/cocodrillos_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/bebidas_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @endif
</div>

@endsection
