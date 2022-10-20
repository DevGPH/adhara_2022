@extends('layouts.dashboard')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="{{ route('home', ['locale' => 'es']) }}">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('reservas.admin', ['locale' => 'es']) }}">Reservas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mostrando Reserva</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Reserva - {{ $reserva->folio }}</h1>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Información de la Reserva</h2>
            <form action="#">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="checkIn">CheckIn</label>
                            <input class="form-control" id="checkIn" type="text"
                            value='{{$reserva->checkIn}}' readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="checkOut">CheckOut</label>
                            <input class="form-control" id="checkOut" type="text"
                            value='{{$reserva->checkOut}}' readonly>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3 mb-3">
                        <label for="status">Estatus</label>
                        <div class="input-group">
                            <input class="form-control" id="status" type="text"
                            value='{{ $reserva->estatus }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="noches">Noches</label>
                        <input class="form-control" id="noches" type="text"
                            value='{{ $reserva->noches }}' readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="folio">Folio</label>
                        <input class="form-control" id="folio" type="text"
                            value='{{ $reserva->folio }}' readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="folio">Metodo de Pago</label>
                        <input class="form-control" id="folio" type="text"
                            value='{{ $reserva->metodo_pago }}' readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="adultos">Adultos</label>
                            <input  class="form-control" id="adultos" type="text"
                                value='{{ $reserva->adultos }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Niños</label>
                            <input class="form-control" id="phone" type="number"
                                value='{{ $reserva->infantes }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Folio Arpón</label>
                            <input class="form-control" id="phone" type="text"
                                value='{{ $reserva->arpon_folio ?? 'No generado' }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Plataforma</label>
                            <input class="form-control" id="phone" type="text"
                                value='{{ $reserva->plataforma }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Precio</label>
                            <input class="form-control" id="phone" type="text"
                                value='$ {{ number_format($reserva->precio,2) }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Moneda</label>
                            <input class="form-control" id="phone" type="text"
                                value='{{ $reserva->currency }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="phone">Nº Habitaciones</label>
                            <input class="form-control" id="phone" type="text"
                                value='{{ $reserva->habitaciones }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <div class="form-group">
                            <label for="phone">Comentarios de parte del Hotel</label>
                            <textarea class="form-control" id="textarea" rows="4" style="resize: none;" readonly>
                                {{ $reserva->comentarios_hotel ?? 'Sin Comentarios' }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Información Huesped</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="address">Nombre Completo</label>
                            <input  class="form-control" id="address" type="text"
                                value='{{ $reserva->huesped->nombre }} {{ $reserva->huesped->apellidos}}' readonly>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="number">Email</label>
                            <input class="form-control" id="number" type="text"
                                value='{{ $reserva->huesped->email }}' readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">Telefono</label>
                            <input class="form-control" id="city" type="text"
                                value="{{ $reserva->huesped->telefono }}" readonly>
                            @if ($reserva->huesped->isWhatsApp)
                                <input class="form-check-input" type="checkbox" id="user-notification-2" checked disabled>
                                <a href="https://api.whatsapp.com/send?phone={{ $whatsapp }}" target="_blank"><span>Puede recibir whatsapp</span></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="zip">Ciudad</label>
                            <input class="form-control" id="zip" type="tel" value="{{ $reserva->huesped->ciudad }}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="zip">Pais</label>
                            <input class="form-control" id="zip" type="tel" value="{{ $pais->nombre }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <div class="form-group">
                            <label for="phone">Comentarios del Huesped</label>
                            <textarea class="form-control" id="textarea" rows="4" style="resize: none;" readonly>
                                {{ $reserva->comentarios ?? 'Sin Comentarios' }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div class="profile-cover rounded-top"
                        data-background="{{ asset('images/habitaciones/estandar.png') }}"></div>
                    <div class="card-body pb-5">
                        <img src="{{ asset('images/logo.png') }}"
                            class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3">Habitación</h4>
                        <h5 class="fw-normal">{{ $reserva->habitacion->categoria->nombre_es}}</h5>
                        <p class="text-gray mb-4">{{ $reserva->habitacion->plan->nombre_es}}</p>
                        <form action="{{ route('send.reserva',['locale' => 'es','id' => $reserva->id]) }}" method="POST" id="">
                            @csrf
                            <button class="btn btn-sm btn-secondary" type="submit"><i class="fas fa-paper-plane"></i> Enviar reserva al cliente</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection