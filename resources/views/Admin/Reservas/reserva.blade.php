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
            <li class="breadcrumb-item"><a href="{{ route('reservas.admin', ['locale' => 'es']) }}">Reservas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alta Reserva</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Reserva Manual</h1>
            <p class="mb-0">Bajar todos los requerimientos con el cliente para hacer una buena reservación.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">     
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Nombre(s)</label>
                            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <label class="my-1 me-2" for="pais_id">Pais</label>
                            <select class="form-select country-select" name="pais_id" aria-label="Default select example">
                                <option>Selecciona un pais...</option>
                                @foreach ($paises as $pais)
                                    <option value="{{$pais->id}}">{{ $pais->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="checkIn">CheckIn</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" name="checkIn" type="text" placeholder="dd-mm-yyyy" required>                                               
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="my-1 me-2" for="pais_id">Habitacion</label>
                            <select class="form-select country-select" name="pais_id" aria-label="Default select example">
                                <option>Selecciona un habitacion...</option>
                                @foreach ($habitaciones as $habitacion)
                                    <option value="{{$habitacion['id']}}">{{ $habitacion->categoria['nombre_es'] }} - {{ $habitacion->plan['nombre_es'] }} @if($habitacion['isTarifaMagica'])Tarifa Magica @else Tarifa Regular @endif</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="adultos">Adultos</label>
                            <input type="text" class="form-control" name="adultos" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="noches">Nº Noches</label>
                            <input type="text" class="form-control" name="noches" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" name="precio" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="apellidos">Apellido(s)</label>
                            <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp">
                        </div>
                        <!-- Form -->
                        <div class="my-4">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="checkOut">CheckOut</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" name="checkOut" type="text" placeholder="dd-mm-yyyy" required>                                               
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="my-1 me-2" for="metodo_pago">Metodo de Pago</label>
                            <select class="form-select" name="metodo_pago" aria-label="Default select example">
                                <option>Selecciona un metodo de pago...</option>
                                <option value="pago_destino">Pago en Destino</option>
                                <option value="pago_seguro">Pago Seguro</option>
                                <option value="paypal">Paypal</option>
                                <option value="whatsapp-webPayPlus">WhatsApp WebPayPlus</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="infantes">Niños</label>
                            <input type="text" class="form-control" name="infantes" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="status">Estatus de la Reserva</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option>Selecciona un tipo de moneda...</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="aprobada">Aprobada</option>
                                <option value="denegada">Denegada</option>
                                <option value="cancelada">Cancelada</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="currency">Tipo de Moneda</label>
                            <select class="form-select" name="currency" aria-label="Default select example">
                                <option>Selecciona un tipo de moneda...</option>
                                <option value="MXN">MXN</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-4">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="isClub" checked>
                                <label class="form-check-label" for="isClub">El correo pertenece a Club Estrella?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput">Celular</label>
                            <input type="text" name="telefono" class="form-control">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="isWhatsApp">
                                <label class="form-check-label" for="isWhatsApp">Tiene whatsApp?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="habitaciones">Nº habitaciones</label>
                            <input type="text" id="habitaciones" class="form-control">
                        </div>
                        <div class="my-4">
                            <label for="comentarios">Comentarios</label>
                            <textarea class="form-control" placeholder="Enter your message..." id="comentarios" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.country-select').select2();
    });
</script>

@endsection
