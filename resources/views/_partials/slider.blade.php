<style>
/* Extra small devices (phones, less than 768px) */
/* No media query since this is the default in Bootstrap */

/* Small devices (tablets, 768px and up) */
.slide-mob{
    display: block;
}

.slide-desktop{
    display: none;
}

.slide_es {
    background-image: url('/images/sliders/mob24_es.png');
    min-height: 60vh !important;
}

.slide_en {
    background-image: url('/images/sliders/mob24_en.png');
    min-height: 60vh !important;
}
@media (min-min-height: 768px) {
    .slide_es {
        background-image: url('/images/sliders/fire_es.png');
        min-height: 100vh !important;
    }

    .slide_en {
        background-image: url('/images/sliders/fire_en.png');
        min-height: 100vh !important;
    }
}

</style>
<div class="section">
    <div class="widget-slider">
        <div class="wrapper-full">
            <!-- Slider Carousel -->

                <div class="widget-carousel owl-carousel owl-theme">
                    <@if (App::getLocale() == 'es')
                        <div class="slider-item slide_es"></div>
                    @else
                        <div class="slider-item slide_en"></div>
                    @endif
                    <div class="slider-item" data-background="{{ asset('images/sliders/slider1.png') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <!--img src="{{ asset('images/sliders/data.png') }}" alt="" class="slider-special"-->
                                <h5 style="color:white;">@lang('main.slider.01')</h5>
                                <h1>${{ $rate }}</h1>
                                <h2 style="font-family: 'Playfair Display', sans-serif;">@lang('main.slider.02')</h2>
                                <h5 style="color:white;margin-top:10px;">@lang('main.slider.011')</h5>
                                <h5 style="color:white;margin-top:10px;">@lang('main.nav.taxes')</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item" data-background="{{ asset('images/sliders/slide2.png') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <!--img src="{{ asset('images/sliders/hotel_1.png') }}" alt="" class="breakpoint-slider"-->
                                <h5 style="color:white;">@lang('main.slider.03')</h5>
                                <h1>ONE BED ROOM</h1>
                                <h2 style="font-family: 'Playfair Display', sans-serif;">@lang('main.slider.04')</h2>
                                <h5 style="color:white;margin-top:10px;">@lang('main.nav.taxes')</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item" data-background="{{ asset('images/sliders/slide3.png') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <!--img src="{{ asset('images/sliders/club_1.png') }}" alt="" class="breakpoint-slider"-->
                                <h5 style="color:white;">@lang('main.slider.05')</h5>
                                <h1>CLUB ESTRELLA</h1>
                                <h2 style="font-family: 'Playfair Display', sans-serif;">www.clubestrella.mx</h2>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Slider Carousel End -->
            <!-- Slider Booking -->
            @include('_partials.booking')
            <!-- Slider Booking End -->
        </div>
    </div>
</div>
