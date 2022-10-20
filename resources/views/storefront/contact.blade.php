@extends('layouts.app')

@section('content')

@include('layouts.web.slide')
<!-- INICIO DEL BUSCADOR -->
@include('layouts.web.buscador')
<!-- FIN DEL BUSCADOR -->

    <div id="contact-desc" class="container" style="margin-top:30px">

        <h4>@lang('main.contact-item001') </h4>
        <p class="main-room-desc custom-w">@lang('main.contact-item002') </p>
        <p class="main-room-desc custom-w"> @lang('main.contact-item003') </p>
 
        <div class="row" style="margin-top:20px">
            <div class="col-sm-12">
                <img src="{{ asset('images/Contacto/1.png') }}" class="img-fluid" id="downtown">
                
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-sm-12">
                <p class="main-room-desc custom-w"> @lang('main.contact-item004') </p>
                <p class="main-room-desc custom-w"> @lang('main.contact-item005') </p>
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <img src="{{ asset('images/Contacto/3.png') }}" class="img-fluid">
            </div>
        </div>

        <div class="row" style="margin-top:20px">
            
            <div class="col-sm-6">
                <form action=" {{ route('contact_mail',['locale'=>App::getLocale()]) }} " method="POST" id="contactt" >
                    @csrf 
                    <div class="mb-3">
                        <label for="nombre" class="form-label">@lang('main.contact-item008')</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>  
                    <div class="mb-3">
                        <label for="email" class="form-label">@lang('main.contact-item009')</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>  
                    <div class="mb-3">
                        <label for="asunto" class="form-label">@lang('main.contact-item010')</label>
                        <input type="text" class="form-control" name="asunto">
                    </div>  
                    <div class="mb-3">
                        <label for="comentarios" class="form-label">@lang('main.contact-item011')</label>
                        <textarea name="comentarios" class="form-control" cols="30" rows="10" style="resize: none;"></textarea>
                    </div>            
                   <button type="submit" class="btn btn-danger">@lang('main.contact-item012')</button>
                </form>
            </div>
            <div class="col-sm-6">
                <p class="center"><img src="{{ asset('images/Contacto/minifle.png') }}" id="marker-c"> &nbsp; @lang('main.contact-item006') </p>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=adhara%20express%20cancun&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row" style="margin-top:20px">
            <div class="col-sm-12">
                <p class="center"> </p>
            </div>
        </div>
    </div>

@endsection
