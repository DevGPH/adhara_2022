@extends('layouts.app')

@section('content')

<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="{{ asset('images/backgrounds/coitzacion_background.png') }}"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>@lang('main.check.title')</h5>
                <h1>@lang('main.check.subtitle')</h1>
                <p>@lang('main.check.text')</p>
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="{{ route('inicio', App::getLocale()) }}">@lang('main.breadcrumb.home')</a></li>
                        <li>@lang('main.check.season')</li>
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
            <div style="display: flex;justify-content: flex-end;margin-bottom: 40px;">
                <h4 style="margin-right: auto;">@lang('main.tax.done')</h4>
                <h4>@lang('main.tax.missing')</h4>
            </div>
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
                                <a href="#" data-background="{{ asset('images/rooms/ejecutiva_2.png') }}"></a>
                            @endif

                        </div>
                        <div class="item-desc">
                            <h2><a href="#">{{(App::getLocale() == 'es') ? 'Habitación ' . $room['habitacion'] : $room['habitacion'] . ' Room'}}</a></h2>
                            <p>{{ (App::getLocale() == 'es') ? $room['desc_es'] : $room['desc_en'] }}</p>
                            <div class="desc-features">
                                <ul>
                                    @foreach ($room['amenidades'] as $amenidad)
                                        <li><i class="fa fa-check"></i> {{$amenidad}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item-price">
                            <div class="price-inner">
                                <h5>@lang('main.check.regular')</h5>
                                <h4>$ {{ (App::getLocale() == 'es') ? number_format(round($room['total'] * $cambio_moneda)) .' '. 'MXN' : $room['total'] .' '. $room['currency']}}</h4>
                                <hr style="border-bottom: 1px solid #6e5e78">
                                <div style="margin-bottom: 15px;"></div>
                                <i class="fa fa-star"></i>
                                <h5>@lang('main.check.club')</h5>
                                <h3>$ {{ (App::getLocale() == 'es') ? number_format(round($room['clubestrella'] * $cambio_moneda)) .' '. 'MXN' : $room['clubestrella'] .' '. $room['currency']}}</h3>

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
                                    <button type="submit" id="" class="btn">@lang('main.breadcrumb.book')</button>
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
