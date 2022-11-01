@extends('layouts.app')

@section('content')

@include('layouts.web.section_habitacion')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

    <div id="rooms-desc" class="main-body" style="margin-top:80px">

        <h4>@lang('main.room-item1')</h4>
        <p class="main-room-desc">@lang('main.room-item2') </p>
        <p class="main-room-desc">@lang('main.room-item3') </p>


        <div class="row list-rooms" style="margin-top:0px">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <img src="{{ asset('images/habitaciones/room_estandar.png') }}" class="img-fluid">
                <h4>@lang('main.room-item04')</h4>
                <p>@lang('main.room-item4')  </p>
                <p>@lang('main.room-item5')  </p>
                <p>@lang('main.room-item6')  </p>
                <p>@lang('main.room-item7')  </p>
                <p>@lang('main.room-item8')  </p>
                <p>@lang('main.room-item9')  </p>
                <p>@lang('main.room-item10') </p>
                <p>@lang('main.room-item11') </p>
                <p>@lang('main.room-item12') </p>
                <p>@lang('main.room-item13') </p>
                <p>@lang('main.room-item14') </p>
                <p>@lang('main.room-item15') </p>
                
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <img class="img-fluid" src="{{ asset('images/habitaciones/room_superior.png') }}" alt="">
                <h4>@lang('main.room-item016')</h4>
                <p>@lang('main.room-item16') </p>
                <p>@lang('main.room-item17') </p>
                <p>@lang('main.room-item18') </p>
                <p>@lang('main.room-item19') </p>
                <p>@lang('main.room-item20') </p>
                <p>@lang('main.room-item21') </p>
                <p>@lang('main.room-item22') </p>
                <p>@lang('main.room-item23') </p>
                <p>@lang('main.room-item24') </p>
                <p>@lang('main.room-item25') </p>
                <p>@lang('main.room-item26') </p>
                <p>@lang('main.room-item27') </p>
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <img class="img-fluid" src="{{ asset('images/habitaciones/room_ejecutive.png') }}" alt="">
                <h4>@lang('main.room-item028')</h4>
                <p>@lang('main.room-item28') </p>
                <p>@lang('main.room-item29') </p>
                <p>@lang('main.room-item30') </p>
                <p>@lang('main.room-item31') </p>
                <p>@lang('main.room-item32') </p>
                <p>@lang('main.room-item33') </p>
                <p>@lang('main.room-item34') </p>
                <p>@lang('main.room-item35') </p>
                <p>@lang('main.room-item36') </p>
                <p>@lang('main.room-item37') </p>
                <p>@lang('main.room-item38') </p>
                <p>@lang('main.room-item39') </p>
                <p>@lang('main.room-item40') </p>
                <p>@lang('main.room-item41') </p>
                <p>@lang('main.room-item42') </p>
                <p>@lang('main.room-item43') </p>
                <p>@lang('main.room-item44') </p>
                <p>@lang('main.room-item45') </p>
                <p>@lang('main.room-item46') </p>
            </div>
        </div>
    </div>

@endsection
