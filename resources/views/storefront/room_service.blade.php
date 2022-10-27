@extends('layouts.app')

@section('content')

<div style="margin-top: 90px;">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/room_service_menu_en.png') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/room_service_coco_en.jpg') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @else
        <img src="{{ asset('images/menus/room_service_menu_es.png') }}" alt="Room Service" class="img-fluid img-c">
        <img src="{{ asset('images/menus/room_service_coco_es.jpg') }}" alt="Room Service" class="img-fluid img-c">
    @endif
</div>

@endsection