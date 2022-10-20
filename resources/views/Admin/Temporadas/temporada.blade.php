@extends('layouts.dashboard')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="{{ route('home', ['locale' => 'es']) }}">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('temporadas.admin', ['locale' => 'es']) }}">Temporadas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nueva Reserva</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Creando Temporada </h1>
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
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">     
                <form action="{{ route('temporada.store.admin',['locale' => 'es']) }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="startDate">Empieza</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" name="startDate" type="text"  autocomplete="off" required value="{{ old('startDate') }}">                                               
                                </div>
                            </div>
                    
                            <div class="mb-4">
                                <label for="tarifa_x_dolares">$ Tarifa x Dolares</label>
                                <input type="text" class="form-control" name="tarifa_x_dolares" value="{{ old('tarifa_x_dolares') }}">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Editar</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="endDate">Termina</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" name="endDate" type="text"  autocomplete="off" required value="{{ old('endDate') }}">                                               
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="tarifa_x_pax">$ Tarifa x Pax</label>
                                <input type="text" class="form-control" name="tarifa_x_pax" value="{{ old('tarifa_x_pax') }}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-4">
                                <label for="email">Hotel</label>
                                <select class="form-select country-select" name="hotel_id" aria-label="Default select example">
                                    <option>Selecciona un hotel...</option>
                                    @foreach ($hoteles as $hotel)
                                        @if (old('hotel_id'))
                                            @if (old('hotel_id') == $hotel->id)
                                                <option value="{{$hotel->id}}" selected>{{ $hotel->nombre_es }}</option>
                                            @else
                                                <option value="{{$hotel->id}}">{{ $hotel->nombre_es }}</option>
                                            @endif
                                        @else
                                            <option value="{{$hotel->id}}">{{ $hotel->nombre_es }}</option>
                                        @endif    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
