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
            <li class="breadcrumb-item active" aria-current="page">Colaboradores</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Colaboradores GPH</h1>
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
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Colaborador</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Rol</th>
                        <th class="border-0 rounded-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th class="border-0 rounded-start">{{ $user->id }}</th>
                            <th class="border-0">{{ $user->name }}</th>
                            <th class="border-0">{{ $user->email }}</th>
                            <th class="border-0">
                                @if ($user->hasRole('gerente'))
                                    Gerente
                                @elseif ($user->hasRole('supervisor'))
                                    Supervisor
                                @elseif ($user->hasRole('colaborador'))
                                    Colaborador
                                @endif
                            </th>
                            <th class="border-0 rounded-end">
                                <a href="{{ route('delete.user',['locale' => 'es','id' => $user->id]) }}">Eliminar</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection