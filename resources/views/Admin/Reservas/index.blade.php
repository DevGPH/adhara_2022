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
            <li class="breadcrumb-item active" aria-current="page">Reservas</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Reservas Generales</h1>
        </div>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Estatus</th>
                        <th class="border-0">CheckIn</th>
                        <th class="border-0">CheckOut</th>
                        <th class="border-0">Plataforma</th>
                        <th class="border-0">Precio</th>
                        <th class="border-0">Moneda</th>
                        <th class="border-0">Metodo Pago</th>
                        <th class="border-0">Huesped</th>
                        <th class="border-0">Email</th>
                        <th class="border-0 rounded-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @if ($reservas->isEmpty())
                        <tr>
                            <h4>No hay Reservaciones registradas</h4>
                        </tr>
                    @else

                        @foreach ($reservas as $reserva)
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">{{ $reserva['folio']}}</a> </td>
                                <td class="text-success">
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bold">{{ $reserva['estatus'] }}</span>
                                    </div>                          
                                </td> 
                                <td> {{ $reserva['checkIn']->format('M d Y') }} </td>
                                <td> {{ $reserva['checkOut']->format('M d Y') }} </td>
                                <td> {{ $reserva['plataforma'] }} </td>
                                <td> {{ $reserva['precio'] }} </td>
                                <td> {{ $reserva['currency'] }} </td>
                                <td> {{ $reserva['metodo_pago'] }} </td>
                                <td> {{ $reserva->huesped['nombre'] }} {{ $reserva->huesped['apellidos'] }} </td>
                                <td> {{ $reserva->huesped['email'] }} </td>
                                <td>
                                    <a href="{{ route('reserva.edit.admin',['locale' => 'es', 'id' => $reserva['id']]) }}" style="margin-right: 15px;"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('reserva.show.admin',['locale' => 'es', 'id' => $reserva['id']]) }}"><i class="far fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        {{ $reservas->links() }}
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection