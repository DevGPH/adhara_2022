@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/backgrounds/coitzacion_background.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>LISTADO DE HABITACIONES</h5>
                <h1>Rooms Page</h1>
                <p>Descubre un refugio de elegancia y tranquilidad en Hotel Adhara Cancún. Habitaciones cuidadosamente diseñadas, atención personalizada, espacios relajantes y una ubicación ideal para explorar la ciudad.</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>TEMPORADA - HABITACIÓN</li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms -->
    <div class="section">
        <div class="wrapper-inner">
            <!-- Rooms List -->
            <div class="widget-rooms-list">
                @foreach ($data as $room)
                    <div class="rooms-item">
                        <div class="item-photo">
                            @if ($room['tag'] == 'estandar')
                                <a href="#" data-background="{{ asset('images/rooms/estandar_1.png') }}"></a>
                            @elseif ($room['tag'] == 'one-bedroom-suite')
                                <a href="#" data-background="{{ asset('images/rooms/one1.png') }}"></a>
                            @elseif ($room['tag'] == 'ejecutiva')
                                <a href="#" data-background="{{ asset('images/rooms/ejecutiva1.png') }}"></a>
                            @endif

                        </div>
                        <div class="item-desc">
                            <h2><a href="#">{{(App::getLocale() == 'es') ? 'Habitación ' . $room['habitacion'] : $room['habitacion'] . ' Room'}}</a></h2>
                            <p>Sed fermentum eleifend dui eu faucibus. Donec facilisis, ligula eu interdum luctus nunc massa fermentum</p>
                            <div class="desc-features">
                                <ul>
                                    @foreach ($room['amenidades'] as $amenidad)
                                        <li><i class="fa fa-check"></i> {{$amenidad}}</li>
                                    @endforeach
                                    <!--li><i class="fa fa-check"></i> BREAKFAST</li>
                                    <li><i class="fa fa-check"></i> WI-FI</li>
                                    <li><i class="fa fa-check"></i> HAIR DRYER</li>
                                    <li><i class="fa fa-check"></i> LCD TV</li>
                                    <li><i class="fa fa-check"></i> SHOWER AND TAB</li>
                                    <li><i class="fa fa-check"></i> SECURITY SYSTEM</li>
                                    <li><i class="fa fa-check"></i> AIR CONDITIONING</li>
                                    <li><i class="fa fa-check"></i> MINI BAR</li>
                                    <li><i class="fa fa-check"></i> TEA AND COFFEE SET</li-->
                                </ul>
                            </div>
                        </div>
                        <div class="item-price">
                            <div class="price-inner">
                                <i class="fa fa-star"></i>
                                <h3>$ {{ (App::getLocale() == 'es') ? number_format(round($room['total'] * $cambio_moneda)) .' '. 'MXN' : $room['total'] .' '. $room['currency']}}</h3>
                                <h4>$ 180.00</h4>
                                <h5>TOTAL</h5>
                                <form action="{{ route('reservations',['locale'=>App::getLocale()]) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="habitacion_id" value="{{ $room['id'] }}" readonly>
                                    <input type="hidden" name="checkIn" value="{{ $checkIn }}" readonly>
                                    <input type="hidden" name="checkOut" value="{{ $checkOut }}" readonly>
                                    <input type="hidden" name="cuartos" value="{{ $room['cuartos'] }}" readonly>
                                    <input type="hidden" name="noches" value="{{ $room['noches'] }}" readonly>
                                    <input type="hidden" name="total" value="{{ $room['total'] }}" readonly>
                                    <input type="hidden" name="currency" value="{{ $room['currency'] }}" readonly>
                                    <input type="hidden" name="fullDate" value="{{ $full_date }}" readonly>
                                    <input type="hidden" name="fullDate2" value="{{ $full_date_2 }}" readonly>
                                    <input type="hidden" name="total_adultos" value="{{ $total_adultos }}" readonly>
                                    <input type="hidden" name="total_kids" value="{{ $total_kids }}" readonly>
                                    <input type="hidden" name="total_kids_no_bf" value="{{ $total_kids_no_bf }}" readonly>
                                    @foreach ($adultos as $adulto)
                                        <input type="hidden" name="adultos[]" value="{{ $adulto }}">
                                    @endforeach
                                    @foreach ($infantes as $infante)
                                        <input type="hidden" name="infantes[]" value="{{ $infante }}">
                                    @endforeach
                                    @foreach ($infantes_no_bf as $infante_no_bf)
                                        <input type="hidden" name="infantes_no_bf[]" value="{{ $infante_no_bf }}">
                                    @endforeach
                                    <button type="submit" id="" class="btn">@lang('main.quotation-item016')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Rooms List End -->
        </div>
    </div>
    <!-- Section Rooms End -->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    });
</script>


@endsection
