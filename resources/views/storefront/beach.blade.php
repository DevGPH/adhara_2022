@extends('layouts.app')

@section('content')
<style>
    /* Fondo modal: negro con opacidad al 50% */
.modal-custom {
  display: none; /* Por defecto, estará oculto */
  position: fixed; /* Posición fija */
  z-index: 1; /* Se situará por encima de otros elementos de la página*/
  padding-top: 100px; /* El contenido estará situado a 200px de la parte superior */
  left: 0;
  top: 0;
  width: 100%; /* Ancho completo */
  height: 100%; /* Algura completa */
  overflow: auto; /* Se activará el scroll si es necesario */
  background-color: rgba(0,0,0,0.5); /* Color negro con opacidad del 50% */
}

/* Ventana o caja modal */
.contenido-modal {
  position: relative; /* Relativo con respecto al contenedor -modal- */
  background-color: white;
  margin: auto; /* Centrada */
  padding: 20px;
  width: 60%;
  -webkit-animation-name: animarsuperior;
  -webkit-animation-duration: 0.5s;
  animation-name: animarsuperior;
  animation-duration: 0.5s;
  width: fit-content !important;
  display: block !important;
  margin: 0 auto !important;
}

/* Animación */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animarsuperior {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* Botón cerrar */
.close {
  color: black;
  float: right;
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
@if (session('error'))
    <div class="alert alert-danger alert-dismissible" role="alert" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('error') }}
    </div>
@endif
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/rooms/background_estandar.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.mayan.title')</h5>
                <h1>@lang('main.mayan.subtitle')</h1>
                <p> @lang('main.mayan.text')</p>
                <p> @lang('main.mayan.text3')</p>
                <p> @lang('main.mayan.text2')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.beach.title')</a></li>
                        <li>Club de playa Mandala beach</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms Detail -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="widget-rooms-detail">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Room Slider -->
                            <div class="room-slider">
                                <!--div class="room-price">$ 160.00 <small>PER NIGHT</small></div-->
                                <div class="owl-carousel owl-theme owl-type1">
                                    <a href="{{ asset('images/mayan/beach1.png') }}" data-background="{{ asset('images/mayan/beach1.png') }}" title="Mayan Beach Club" class="popup-gallery"></a>
                                    <a href="{{ asset('images/mayan/beach2.png') }}" data-background="{{ asset('images/mayan/beach2.png') }}" title="Mayan Beach Club" class="popup-gallery"></a>
                                    <a href="{{ asset('images/mayan/beach3.png') }}" data-background="{{ asset('images/mayan/beach3.png') }}" title="Mayan Beach Club" class="popup-gallery"></a>
                                    <a href="{{ asset('images/mayan/beach4.png') }}" data-background="{{ asset('images/mayan/beach4.png') }}" title="Mayan Beach Club" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/mayan/beach1.png') }}" title="Mayan Beach Club"></a>
                                        <a href="#" data-background="{{ asset('images/mayan/beach2.png') }}" title="Mayan Beach Club"></a>
                                        <a href="#" data-background="{{ asset('images/mayan/beach3.png') }}" title="Mayan Beach Club"></a>
                                        <a href="#" data-background="{{ asset('images/mayan/beach4.png') }}" title="Mayan Beach Club"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.mayan.p3')</h5>
                                <p> @lang('main.mayan.p4') </p>
                                <p> @lang('main.mayan.p5') </p>
                                <btn id="abrirModal" class="btn btn-booking"> @lang('main.mayan.btn1')</btn>
                                <btn id="abrirBebidas" class="btn btn-booking"> @lang('main.mayan.btn3')</btn>
                                <btn id="abrirVideo" class="btn btn-booking"> @lang('main.mayan.btn2')</btn>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.mayan.p')</h5>
                                <h2>@lang('main.mayan.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.mayan.live')</a>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Booking End -->
                            <div class="room-features">
                                <h5>@lang('main.mayan.feafures.title')</h5>
                                <h2>@lang('main.mayan.feafures.subtitle')</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> @lang('main.mayan.list.1')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.mayan.list.2')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.mayan.list.3')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.mayan.list.4')</li>
                                    <li><i class="fa fa-check"></i> @lang('main.mayan.list.5')</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
</div>
<!-- Ventana modal, por defecto no visiblel -->
<div id="ventanaModal" class="modal-custom">
    <div class="contenido-modal">
        <span class="cerrar">&times;</span>
        @if ($lang == 'en')
            <img src="{{ asset('images/mayan/des_pt1_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt2_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt3_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt4_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt1_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt2_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt3_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt4_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt1_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt2_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt3_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt4_es.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        @else
            <img src="{{ asset('images/mayan/des_pt1_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt2_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt3_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/des_pt4_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt1_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt2_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt3_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/menu_pt4_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt1_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt2_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt3_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
            <img src="{{ asset('images/mayan/cena_pt4_en.jpg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        @endif
    </div>
</div>
<div id="videoModal" class="modal-custom">
    <div class="contenido-modal">
        <video controls="controls" width="800" height="600" name="Video Name">
            <source src="{{ asset('images/mayan/promo.mov') }}" type="video/mp4">
        </video>
    </div>
</div>

<div id="bebidasModal" class="modal-custom">
    <div class="contenido-modal">
        <img src="{{ asset('images/mayan/bebidas_pt1_es.jpeg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        <img src="{{ asset('images/mayan/bebidas_pt2_es.jpeg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        <img src="{{ asset('images/mayan/bebidas_pt3_es.jpeg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        <img src="{{ asset('images/mayan/bebidas_pt4_es.jpeg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
        <img src="{{ asset('images/mayan/bebidas_pt5_es.jpeg') }}" alt="Menu Mayan Beach Club" style="display:block;margin:0px auto;width:700px;">
    </div>


<script type="text/javascript">
    // Ventana modal
    var modal = document.getElementById("ventanaModal");
    var video = document.getElementById("videoModal");
    var bebidas = document.getElementById("bebidasModal");

    // Botón que abre el modal
    var boton = document.getElementById("abrirModal");
    var botonVid = document.getElementById("abrirVideo");
    var botonBeb = document.getElementById("abrirBebidas");

    // Hace referencia al elemento <span> que tiene la X que cierra la ventana
    var span = document.getElementsByClassName("cerrar")[0];

    // Cuando el usuario hace click en el botón, se abre la ventana
    boton.addEventListener("click",function() {
        modal.style.display = "block";
    });

    botonVid.addEventListener("click",function() {
        video.style.display = "block";
    });

    botonBeb.addEventListener("click",function() {
        bebidas.style.display = "block";
    });

    // Si el usuario hace click en la x, la ventana se cierra
    span.addEventListener("click",function() {
        modal.style.display = "none";
    });

    span.addEventListener("click",function() {
        video.style.display = "none";
    });

    span.addEventListener("click",function() {
        bebidas.style.display = "none";
    });

    // Si el usuario hace click fuera de la ventana, se cierra.
    window.addEventListener("click",function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == video) {
            video.style.display = "none";
        }

        if (event.target == bebidas) {
            bebidas.style.display = "none";
        }
    });
    
</script>

@endsection
