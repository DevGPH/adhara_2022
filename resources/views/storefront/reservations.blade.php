@extends('layouts.app')
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<style>
    #app{
        margin-top: -20px;
    }
</style>

<div class="main-body" id="pays" style="padding-top:100px">
    <form action=" {{ route('book.reserve',['locale'=>App::getLocale()]) }}    " method="POST" id="reservations_ultimate" >
        @csrf   
    
        <div class="row">
            <div class="col-12 col-sm-4">
                <img src="{{ asset('images/habitaciones/estandar.png') }}" alt="Habitacion Estandar" class="img-fluid">
            </div>
            <div class="col-6 col-sm-8">
                <p><strong>@lang('main.reservations-item030') {{ $habitacion->categoria->nombre_es }}</strong> </p>
                <p><strong>@lang('main.reservations-item031') {{ $habitacion->plan->nombre_es }}</strong> </p>
                <p><strong>@lang('main.reservations-item023')</strong> {{ $habitaciones }} &nbsp; <strong>@lang('main.reservations-item024')</strong> {{ $_tot_adultos }} &nbsp; <strong>@lang('main.reservations-item025')</strong> {{ $_tot_infantes  }}</p>
                <p><strong>@lang('main.reservations-item026')</strong> {{ $noches }}</p>
                <p><strong>@lang('main.reservations-item029')</strong> $ {{ $total.' '.$currency  }}
                    <p><strong>@lang('main.reservations-item027')</strong>  {{ $fullDate }}</p>
                <p><strong>@lang('main.reservations-item028')</strong> {{ $fullDate2 }}</p> 
            </div>
        </div>        

            <div class="row">
                <div class="col-sm-12">
                    <hr>
                    <h4 style="margin-bottom: 30px;">
                        @lang('main.reservations-item008')
                    </h4>
                </div>
            </div>

        <div class="Space">
            <div class="row " >
                <div class="col-sm-6">
                    <p>@lang('main.reservations-item010') <input type="text" name="nombre" class="form-control" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->name}}" @endif> </p>
                </div>
                <div class="col-sm-6">
                    <p>@lang('main.reservations-item011') <input type="text" name="apellidos" class="form-control" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->lastname}}" @endif> </p>
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-6">
                    <p>@lang('main.reservations-item013') <input type="text" name="email" class="form-control" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->email}}" @endif> </p>
                </div>
                <div class="col-sm-6">
                    <p>@lang('main.reservations-item013')  <input type="text" name="eeemail" class="form-control form-control-sm" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->email}}" @endif> </p>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2" name="isClub" value="1" @if(Cookie::get('user')) checked="true" @endif )>
                    <label class="custom-control-label" for="customSwitch2">@lang('main.reservations-item007')</label>
                </div>
            </div>
        </div>
        
            <div class="row">
                <div class="col-sm-6">
                
                    <p>@lang('main.reservations-item014')<input type="text" name="ciudad" class="form-control" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->city}}" @endif> </p>
                </div>
                <div class="col-sm-6">
                    
                    <p>@lang('main.reservations-item015') <input type="text" name="estado_region" class="form-control" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->state}}" @endif></p>
                    
                </div>
            </div>
        
        <div class="row">
            <div class="col-sm-6">
                <p>@lang('main.reservations-item016')  
                <select name="pais_id" class="form-control">
                        <option value="145" @if(!Cookie::get('user')) selected @endif> México </option>
                        <option value="240"> USA </option>
                @foreach ($paises as $pais )
                    @if(Cookie::get('user'))                        
                        <option value="{{ $pais->id }}" @if($pais->id == json_decode(Cookie::get('user'))->country_id) selected @endif>{{ $pais->nombre }} </option>
                    @else 
                        <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                    @endif
                @endforeach
                </select>
                </p>
            </div>

            <div class="col-sm-6">
                <p >@lang('main.reservations-item017')<input type="text" name="telefono" class="form-control form-control-sm" @if(Cookie::get('user')) value="{{json_decode(Cookie::get('user'))->number}}" @endif>   </p>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="isWhatsApp" value="1">
                    <label class="custom-control-label" for="customSwitch1">@lang('main.reservations-item009')</label>
                </div>
            </div>

        </div>
        
            <div class="row">
                <div class="col-sm-12">
                    <p>@lang('main.reservations-item018') <textarea name="comentarios" id="" cols="30" rows="5" style="resize: none;" class="form-control"></textarea>
                    
                    </p>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-12">
                    
                <p class="manota"> 
                    <input type="checkbox" class="form-check-input" name="condiciones">
                    @lang('main.reservations-item019a') <a class="opt-ft-ok " data-toggle="modal" data-target="#myModal">@lang('main.body-item35')</a>  @lang('main.reservations-item019b')
                </p>
                <p>@lang('main.reservations-item020')</p>
            </div>
        </div>
        <div style="margin-top:30px">
            <div class="row">
                <!--div class="form-check col-4">
                    <input class="form-check-input" type="radio" name="metodo_pago" value="2">
                    <img src="{{ asset('images/cotizacion/paypal.png') }}" width="150" height="40" title="Magica">
                </div-->
                <div class="form-check col-4">
                    <input class="form-check-input" type="radio" name="metodo_pago" value="1" checked>
                    <p class="center">@lang('main.reservations-item021') </p>
                </div>
                <div class="form-check col-4">
                    <input class="form-check-input" type="radio" name="metodo_pago" value="pago_seguro">
                    <img src="{{ asset('images/cotizacion/tarjeta.png') }}" width="200" height="70" title="Magica">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <hr>
                    <button type="submit" id="activate" class="btn btn-adhara"> @lang('main.reservations-item022')</button>
                    <input type="hidden" name="habitaciones"    value="{{ $habitaciones }}">  
                    <input type="hidden" name="checkIn"         value="{{ $checkIn }}">  
                    <input type="hidden" name="checkOut"        value="{{ $checkOut }}">  
                    <input type="hidden" name="precio"          value="{{ $total }}">
                    <input type="hidden" name="currency"        value="{{ $currency }}">
                    <input type="hidden" name="noches"          value="{{ $noches }}">
                    @foreach ($adultos as $adulto)
                                    
                        <input type="hidden" name="adultoss[]" value="{{ $adulto }}">
                    @endforeach
                    @foreach ($infantes as $infante)
                        <input type="hidden" name="infantess[]" value="{{ $infante }}">
                    @endforeach
                    @foreach ($infantes_no_bf as $infante_no_bf)
                        <input type="hidden" name="infantess_no_bf[]" value="{{ $infante_no_bf }}">
                    @endforeach
                    <input type="hidden" name="plataforma"      value="WEB">
                    <input type="hidden" name="habitacion_id"   value="{{ $habitacion_id }}">
                </div>
            </div>
        </div>   
    </form>
</div>

@endsection
