@extends('layouts.app')

@section('content')

<div style="margin-top:90px">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/menu_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_coco_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_drinks_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @else
        <img src="{{ asset('images/menus/menu_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_coco_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/menu_drinks_es.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @endif
</div>

@endsection