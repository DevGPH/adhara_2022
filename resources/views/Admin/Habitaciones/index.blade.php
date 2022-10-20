@extends('layouts.dashboard')

@section('content')

<script src="https://kit.fontawesome.com/8d420a663d.js" crossorigin="anonymous"></script>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="{{ route('home', ['locale' => 'es']) }}">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Temporadas</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Habitaciones Generales</h1>
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
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-express-tab" data-bs-toggle="pill" data-bs-target="#pills-express" type="button" role="tab" aria-controls="pills-express" aria-selected="true">Hotel Adhara Express</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-adhara-tab" data-bs-toggle="pill" data-bs-target="#pills-adhara" type="button" role="tab" aria-controls="pills-adhara" aria-selected="false">Hotel Adhara Cancun</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-express" role="tabpanel" aria-labelledby="pills-express-tab">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">Categoria</th>
                                <th class="border-0">Plan</th>
                                <th class="border-0">Hotel</th>
                                <th class="border-0">Stock</th>
                                <th class="border-0 rounded-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            <tr>
                                @foreach ($habitaciones_express as $habitacion)
                                    <tr>
                                        <td><a href="#" class="text-primary fw-bold">{{ $habitacion['id']}}</a> </td>
                                        <td> {{ $habitacion->categoria['nombre_es'] }} </td>
                                        <td> {{ $habitacion->plan['nombre_es'] }} </td>
                                        <td> {{ $habitacion->hotel['nombre_es'] }} </td>
                                        <td> {{ $habitacion->stock }} </td>
                                        <td>
                                            <a href="{{ route('room.edit.admin',['locale' => 'es', 'id' => $habitacion['id']]) }}" style="margin-right: 15px;"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('habitacion.delete.admin',['locale' => 'es', 'id' => $habitacion['id']]) }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-adhara" role="tabpanel" aria-labelledby="pills-adhara-tab">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">Categoria</th>
                                <th class="border-0">Plan</th>
                                <th class="border-0">Hotel</th>
                                <th class="border-0">Stock</th>
                                <th class="border-0 rounded-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            <tr>
                                @foreach ($habitaciones_adhara as $habitacion)
                                    <tr>
                                        <td><a href="#" class="text-primary fw-bold">{{ $habitacion['id']}}</a> </td>
                                        <td> {{ $habitacion->categoria['nombre_es'] }} </td>
                                        <td> {{ $habitacion->plan['nombre_es'] }} </td>
                                        <td> {{ $habitacion->hotel['nombre_es'] }} </td>
                                        <td> {{ $habitacion->stock }} </td>
                                        <td>
                                            <a href="{{ route('room.edit.admin',['locale' => 'es', 'id' => $habitacion['id']]) }}" style="margin-right: 15px;"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('habitacion.delete.admin',['locale' => 'es', 'id' => $habitacion['id']]) }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection