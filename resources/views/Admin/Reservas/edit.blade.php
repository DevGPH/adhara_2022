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
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Información de la Reserva</h2>
            <form action="{{ route('reserva.update.admin',['locale' => 'es','id' => $reserva->id])}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="checkIn">CheckIn</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" name="checkIn" type="text" placeholder="{{$reserva->checkIn}}">                                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="checkOut">CheckOut</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" name="checkOut" type="text" placeholder="{{$reserva->checkOut}}">                                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3 mb-3">
                        <label for="status">Estatus</label>
                        <div class="input-group">
                            <select class="form-select country-select" name="estatus" aria-label="Default select example">
                                @foreach ($status_reserva as $status)
                                    @if ($reserva->estatus == $status)
                                        <option value="{{ $status }}" selected> {{ $status }}</option>
                                    @else
                                        <option value="{{ $status }}"> {{ $status }}</option>
                                    @endif
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="noches">Noches</label>
                        <input class="form-control" name="noches" type="number"
                            value='{{ $reserva->noches }}'>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="folio">Folio</label>
                        <input class="form-control" name="folio" type="text"
                            value='{{ $reserva->folio }}'>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="payment">Metodo de Pago</label>
                        <select class="form-select country-select" name="payment" aria-label="Default select example">
                            @foreach ($metodos_pago as $metodo)
                                @if ($reserva->metodo_pago == $metodo)
                                    <option value="{{ $metodo }}" selected> {{ $metodo }}</option>
                                @else
                                    <option value="{{ $metodo }}"> {{ $metodo }}</option>
                                @endif
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="adultos">Adultos</label>
                            <input  class="form-control" name="adultos" type="text"
                                value='{{ $reserva->adultos }}'>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="infantes">Niños</label>
                            <input class="form-control" name="infantes" type="number"
                                value='{{ $reserva->infantes }}'>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="folio_arpon">Folio Arpón</label>
                            <input class="form-control" name="folio_arpon" type="text"
                                value='{{ $reserva->arpon_folio ?? 'No generado' }}'>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="plataforma">Plataforma</label>
                            <input class="form-control" name="plataforma" type="text"
                                value='{{ $reserva->plataforma }}'>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="precio">$ Precio</label>
                            <input class="form-control" name="precio" type="text"
                                value='{{ $reserva->precio }}'>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="currency">Moneda</label>
                            <select class="form-select country-select" name="currency" aria-label="Default select example">
                                @foreach ($currencies as $currency)
                                    @if ($reserva->currency == $currency)
                                        <option value="{{ $currency }}" selected> {{ $currency }}</option>
                                    @else
                                        <option value="{{ $currency }}"> {{ $currency }}</option>
                                    @endif
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="habitaciones">Nº Habitaciones</label>
                            <input class="form-control" name="habitaciones" type="text"
                                value='{{ $reserva->habitaciones }}'>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <div class="form-group">
                            <label for="comentarios_hotel">Comentarios de parte del Hotel</label>
                            <textarea class="form-control" name="comentarios_hotel" rows="4" style="resize: none;">
                                {{ $reserva->comentarios_hotel ?? 'Sin Comentarios' }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Información Huesped</h2>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="nombre">Nombre(s)</label>
                            <input  class="form-control" name="nombre" type="text"
                                value='{{ $reserva->huesped->nombre }}'>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input  class="form-control" name="apellidos" type="text"
                                value='{{ $reserva->huesped->apellidos}}'>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" name="email" type="text"
                                value='{{ $reserva->huesped->email }}'>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input class="form-control" name="telefono" type="text"
                                value="{{ $reserva->huesped->telefono }}">
                            @if ($reserva->huesped->isWhatsApp)
                                <input class="form-check-input" type="checkbox" name="isWhatsApp" checked>
                                <a href="https://api.whatsapp.com/send?phone={{ $whatsapp }}" target="_blank"><span>Puede recibir whatsapp</span></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input class="form-control" name="ciudad" value="{{ $reserva->huesped->ciudad }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="pais_id">Pais</label>
                            <select class="form-select country-select" name="pais_id" aria-label="Default select example">
                                @foreach ($paises as $pais)
                                    @if ($reserva->huesped->pais_id == $pais->id)
                                        <option value="{{ $pais->id }}" selected> {{ $pais->nombre }}</option>
                                    @else
                                        <option value="{{ $pais->id }}"> {{ $pais->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <div class="form-group">
                            <label for="comentarios">Comentarios del Huesped</label>
                            <textarea class="form-control" name="comentarios" rows="4" style="resize: none;">
                                {{ $reserva->comentarios ?? 'Sin Comentarios' }}
                            </textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Editar</button>
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