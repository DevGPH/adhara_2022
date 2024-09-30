@extends('layouts.app')

@section('content')

<div class="site-main">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/specialty_2024_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/entry_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/coqui_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidos_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @else
        <img src="{{ asset('images/menus/specialty_2024_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/entry_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/coqui_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidos_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @endif
</div>

@endsection
