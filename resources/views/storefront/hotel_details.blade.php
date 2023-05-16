@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/hotel_detalles/fondo_hotel.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>Servicios</h5>
                <h1>Especiales para ti</h1>
                <p>Crear una buena experiencia para tus vacaciones no ocurre por coincidencia. Ocurre por que nos esforzamos de hacerlo realidad con magia en cada detalle.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>@lang('main.breadcrumb.services')</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Services -->
    <div class="section">
        <div class="wrapper-inner">
            <!-- Services List -->
            <div class="widget-services-list">
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/whats1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/whats2.png') }}"></div>
                        <a href="https://api.whatsapp.com/send?phone=529981221861" target="_blank" class="btn btn-default">IR A WHATSAPP</a>
                    </div>
                    <div class="item-desc">
                        <h5>Asistencia vía WhatsApp</h5>
                        <h2>Una respuesta inmediata para ti</h2>
                        <p>Ahora todo es más cómodo, fácil y sencillo por WhatsApp, hemos puesto a tu disposición asistencia inmediata vía WhatsApp, ahora todo es más cómodo, fácil y sencillo, sólo envíanos un mensaje al número: 998 122 1861. Después de enviarnos un mensaje deberá elegir en nuestro menú de opciones el servicio u opción que requiera tales como:  Servicio al huésped, reservaciones, eventos, grupos u/o tours.</p>
                        <p>Le recordamos que toda la información usada por este medio, está protegida por nuestro aviso de privacidad.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/transpor1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/transpor2.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>Transportación incluida </h5>
                        <h2>Nosotros te llevamos gratis</h2>
                        <p>Todos los huéspedes de nuestro hotel tienen incluido el servicio de transportación de: <br> Hotel - Playa - Hotel <br> Hotel - Aeropuerto Internacional de Cancún.</p>
                        <p>Este servicio solo aplica reservando tu estancia en nuestro sitio web: www.adharacancun.com o vía WhatsApp* Este servicio está sujeto a disponibilidad y horario* Reserva con nosotros y agenda tu transporte con anticipación* Aplican restricciones*</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/park_intern.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/estacionamiento2.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>Estacionamiento</h5>
                        <h2>Amplio y gratuito</h2>
                        <p>Contamos con un seguro y amplio estacionamiento privado para recibir todo tipo de vehículos. Si eres nuestro huésped pregunta por nuestro área de estacionamiento exclusiva, donde contamos con vigilancia las 24 Hrs. En la parte posterior del hotel. </p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/services/especial1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/services/especial2.png') }}"></div>
                        <!--a href="#" class="btn btn-default">LEARN MORE</a-->
                    </div>
                    <div class="item-desc">
                        <h5>Habitaciones adaptadas</h5>
                        <h2>Para personas con movilidad reducida</h2>
                        <p>En Hotel Adhara Cancún contamos con habitaciones que cuentan co las condiciones necesarias para personas con movilidad reducida dentro del sanitario y regadera</p>
                    </div>
                </div>
                <!--div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="assets/img/photo-services-5-1.jpg"></div>
                        <div class="photo-small" data-background="assets/img/photo-services-5-2.jpg"></div>
                        <a href="#" class="btn btn-default">LEARN MORE</a>
                    </div>
                    <div class="item-desc">
                        <h5>OUR FACILITIES</h5>
                        <h2>Spa &amp; Beauty Center</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="assets/img/photo-services-6-1.jpg"></div>
                        <div class="photo-small" data-background="assets/img/photo-services-6-2.jpg"></div>
                        <a href="#" class="btn btn-default">LEARN MORE</a>
                    </div>
                    <div class="item-desc">
                        <h5>OUR FACILITIES</h5>
                        <h2>Swimming Pool</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                        <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                    </div>
                </div-->
            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>

@endsection
