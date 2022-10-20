@extends('layouts.app')

@section('content')

<div style="margin-top: 90px;">
    @if ($lang == 'es')
        <img src="{{ asset('images/menus/room_service_en.jpg') }}" alt="Menu del Restaurante" class="img-fluid img-c">
        <img src="{{ asset('images/menus/room_service2_en.jpg') }}" alt="Menu del Restaurante" class="img-fluid img-c">
    @else
        <img src="{{ asset('images/menus/room_service_esp.jpg') }}" alt="Room Service" class="img-fluid img-c">
        <img src="{{ asset('images/menus/room_service2_esp.jpg') }}" alt="Room Service" class="img-fluid img-c">
    @endif
</div>

@endsection