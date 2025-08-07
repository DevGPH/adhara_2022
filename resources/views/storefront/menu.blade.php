@extends('layouts.app')

@section('content')

<div class="site-main">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/special2025_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/comida2025_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/cocos2025_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas2025_en.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @else
        <img src="{{ asset('images/menus/special2025_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/comida2025_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/cocos2025_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
        <img src="{{ asset('images/menus/bebidas2025_es.png') }}" alt="Menu del Restaurante" style="display:block;margin:0px auto;">
    @endif
</div>

@endsection
