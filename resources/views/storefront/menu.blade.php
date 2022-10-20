@extends('layouts.app')

@section('content')

<div style="margin-top:90px">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/menu_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu2_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu3_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @else
        <img src="{{ asset('images/menus/menu_esp.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu2_esp.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu3_esp.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @endif
</div>

@endsection