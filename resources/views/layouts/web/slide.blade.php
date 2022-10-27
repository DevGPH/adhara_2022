<nav class="navbar navbar-dark d-block d-md-none" id="baner-whats">
        <p>@lang('main.rates-special-mob'):  $ {{ $rate }} @lang('main.taxes-rate')</p>
        <p><strong>@lang('main.hover-whats-p') WhatsApp:</strong><a href="https://api.whatsapp.com/send?phone=529981221816" target='_blank'> 998 122 1816 <img src="{{ asset('images/icons/social_media/whatsapp.png') }}" id='logo-whats-baner' alt=""></a></p>
        {{-- <h4>WhatsApp</h4> --}}
 </nav>
 <div class="owl-carousel owl-theme" id='carousel'>
    <div class="item">
        <img src="@lang('main.slider-home-2-mob')" class="d-block d-sm-none" alt=""> 
        <img src="@lang('main.slider-home-2')" class="d-none d-sm-block" alt=""> 
    </div>
    <div class="item">
        <img src="@lang('main.slider-home-mob')" class="d-block d-sm-none" alt=""> 
        <img src="@lang('main.slider-home')" class="d-none d-sm-block" alt=""> 
    </div>
</div>

<div id='hover-whats'>
    <div class="cotiza-text" style="margin-top: 0px;">
        <p>@lang('main.special-rate')</p>
        <p>$ {{ $rate }}</p>
        <p style="margin-bottom: 0px;">@lang('main.taxes-rate')</p>
    </div>
    <div class="cotiza-text">
        <p class="small-t" style="margin-bottom: 0px;"><strong>@lang('main.hover-whats-p')</strong></p>
    </div>
    <div class="cotiza-text">
        <img src="{{ asset('images/icons/social_media/whatsapp.png') }}" id='logo-whats-hover' alt="">
        <h4>WhatsApp</h4>
        <p class="big-t" style="margin-bottom: 0px;"><a href="https://api.whatsapp.com/send?phone=529981221816" target='_blank'>998 122 1861</a></p>
    </div>  
</div>

<script type='text/javascript'>

$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsiveClass:true,
    rewind: true,
    dots: false,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:false
        }
    }
})
</script>