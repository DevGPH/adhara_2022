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
                <h5>@lang('main.avis.title')</h5>
                <h1>@lang('main.avis.subtitle')</h1>
                <p> @lang('main.avis.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li><a href="#">@lang('main.beach.title')</a></li>
                        <li>@if (App::getLocale() == 'en') Avis rental car @else Renta de autos Avis @endif</li>
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
                                    <a href="{{ asset('images/avis/av1.png') }}" data-background="{{ asset('images/avis/av1.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av2.png') }}" data-background="{{ asset('images/avis/av2.png') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av3.jpg') }}" data-background="{{ asset('images/avis/av3.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av4.jpg') }}" data-background="{{ asset('images/avis/av4.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av5.jpg') }}" data-background="{{ asset('images/avis/av5.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av6.jpg') }}" data-background="{{ asset('images/avis/av6.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av7.jpg') }}" data-background="{{ asset('images/avis/av7.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                    <a href="{{ asset('images/avis/av8.jpg') }}" data-background="{{ asset('images/avis/av8.jpg') }}" title="Standar Room" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                        <a href="#" data-background="{{ asset('images/avis/av1.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av2.png') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av3.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av4.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av5.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av6.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av7.jpg') }}" title="Standar Room"></a>
                                        <a href="#" data-background="{{ asset('images/avis/av8.jpg') }}" title="Standar Room"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>@lang('main.avis.p3')</h5>
                                <p> @lang('main.avis.p4') </p>
                                <p> @lang('main.avis.p5') </p>
                                <p> @lang('main.avis.p6') </p>
                                <p> @lang('main.avis.p7') </p>
                                <btn id="abrirModal" class="btn btn-booking"> @lang('main.mayan.btn2')</btn>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>@lang('main.avis.p')</h5>
                                <h2>@lang('main.avis.p2')</h2>
                                <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-booking"> @lang('main.avis.live')</a>
                            </div>
                            <!-- Room Booking End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
    <div id="ventanaModal" class="modal-custom">
        <div class="contenido-modal">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <video controls="controls" autoplay width="800" height="600" name="Video Name">
                            <source src="{{ asset('images/avis/avis1.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="item">
                        <video controls="controls" autoplay width="800" height="600" name="Video Name">
                            <source src="{{ asset('images/avis/avis2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                
                <!-- Controls -->
                <a class="left carousel-control" style="background-image: none;" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" style="background-image: none;" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Ventana modal
    var modal = document.getElementById("ventanaModal");
    //var video = document.getElementById("videoModal");
    //var bebidas = document.getElementById("bebidasModal");

    // Botón que abre el modal
    var boton = document.getElementById("abrirModal");
    //var botonVid = document.getElementById("abrirVideo");
    //var botonBeb = document.getElementById("abrirBebidas");

    // Hace referencia al elemento <span> que tiene la X que cierra la ventana
    //var span = document.getElementsByClassName("cerrar")[0];

    // Cuando el usuario hace click en el botón, se abre la ventana
    boton.addEventListener("click",function() {
        modal.style.display = "block";
    });

    // Si el usuario hace click en la x, la ventana se cierra
    /*span.addEventListener("click",function() {
        modal.style.display = "none";
    });*/

    // Si el usuario hace click fuera de la ventana, se cierra.
    window.addEventListener("click",function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
    
</script>

@endsection
