@extends('layouts.app')

@section('content')

<div class="site-main">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/specialty_2024_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/fck_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/liquido_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @else
        <img src="{{ asset('images/menus/specialty_2024_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/fck_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/liquido_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @endif
</div>

@endsection
