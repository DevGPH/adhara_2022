@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/hotel_detalles/fondo_hotel.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>Una estancia mas agradable</h5>
                <h1>Servicios</h1>
                <p>Nuestros servicios aseguran que los huéspedes tengan una experiencia completa y satisfactoria durante su estadía, brindándoles opciones para relajarse, mantenerse en forma, disfrutar de deliciosos desayunos al aire libre y atender sus necesidades laborales.</p>
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
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/1.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/11.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Piscina & Pool Bar</h5>
                        <h2>Oasis de relajación y diversión.</h2>
                        <p>Nuestra piscina es un oasis de relajación y diversión. Ubicada en un hermoso entorno tropical, de un tamaño generoso, con aguas cristalinas y una temperatura perfecta para disfrutar de un refrescante chapuzón.</p>
                        <p>El Pool Bar cuenta con cómodos taburetes y mesas al aire libre, perfectos para socializar y disfrutar de una charla amena con amigos o seres queridos. Además de las bebidas, el bar también ofrece una variedad de aperitivos y refrigerios para satisfacer los antojos de los huéspedes.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/2.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/22.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Restaurante Adhara Grill</h5>
                        <h2>Cocina con magia</h2>
                        <p>Te invitamos a disfrutar en nuestro restaurante con buffet incluido en tu estancia. Es un lugar encantador que ofrece una experiencia culinaria llena de auténticos sabores mexicanos ideal para aquellos que disfrutan de los sabores típicos y platillos tanto clásicos como contemporáneos. </p>
                        <p>También contamos con una variedad de pan recién horneado en casa. Platillos especiales del chef y una variedad de bebidas para todos los gustos.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/3.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/33.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Adhara eventos</h5>
                        <h2>Hacemos magia en cada evento</h2>
                        <p>Contamos con una opción ideal para aquellos que buscan organizar reuniones de negocios, conferencias o eventos corporativos de alto nivel. Nuestros salones se encuentran adaptados específicamente para brindar un entorno profesional y elegante que se adapte a las necesidades de los ejecutivos y empresarios.</p>
                        <p>Los salones pueden adaptarse a diferentes configuraciones según los requisitos del evento. Puede ser acomodado en formato de sala de juntas, según la preferencia y la dinámica de la reunión. Además ofrecemos opciones de menús personalizables que van desde desayunos, coffee breaks o comidas. Los alimentos y bebidas son preparados con calidad y presentación, brindando opciones saludables y deliciosas para los asistentes.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/4.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/44.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Centro de negocios</h5>
                        <h2>Espacio ideal para trabajar</h2>
                        <p>El servicio de centro de negocios es una facilidad indispensable para aquellos que viajan por motivos de trabajo o necesitan llevar a cabo tareas empresariales durante su estadía en nuestro hotel. Este centro proporciona un entorno profesional y funcional, equipado con las herramientas y servicios necesarios para satisfacer las necesidades de los huéspedes de negocios.</p>
                        <p>Nuestro centro de negocios está diseñado para ofrecer un espacio tranquilo y adecuado para llevar a cabo actividades laborales. Cuenta con escritorios, sillas cómodas y áreas de trabajo bien iluminadas, creando un ambiente propicio para la concentración y la productividad.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/5.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/55.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Terraza</h5>
                        <h2>Un espacio único para ti</h2>
                        <p>Nuestra terraza es un espacio encantador y relajante que ofrece una experiencia única para comenzar el día. Ubicada junto a la piscina, esta área está diseñada para que los huéspedes disfruten de su desayuno al aire libre, rodeados de un entorno tranquilo y agradable.</p>
                        <p>El desayuno se sirve en un buffet completo, con una amplia selección de platos y opciones para satisfacer todos los gustos y preferencias. Desde opciones saludables como frutas frescas, yogurt y cereales, hasta platos calientes como huevos revueltos, quesadillas y una variedad de alimentos para energizar el día.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="item-photo">
                        <div class="photo-big" data-background="{{ asset('images/hotel_detalles/6.png') }}"></div>
                        <div class="photo-small" data-background="{{ asset('images/hotel_detalles/66.png') }}"></div>
                        <a href="{{ route('gallery', [App::getLocale()]) }}" target="_blank" class="btn btn-default">@lang('main.button.more')</a>
                    </div>
                    <div class="item-desc">
                        <h5>Gimnasio</h5>
                        <h2>Tu rutina siempre activa</h2>
                        <p>Nuestro gimnasio equipado es una excelente opción para huéspedes que desean mantenerse en forma durante su estadía. Proporcionamos un espacio dedicado al ejercicio y está equipado con una variedad de aparatos modernos y de alta calidad.</p>
                        <p>El ambiente del gimnasio es limpio, bien iluminado y climatizado, lo que proporciona un entorno cómodo y agradable para realizar ejercicios. Se proporcionan toallas y agua potable para mantener a los huéspedes hidratados durante sus entrenamientos.</p>
                    </div>
                </div>
            </div>
            <!-- Services List End -->
        </div>
    </div>
    <!-- Section Services End -->
</div>

@endsection
