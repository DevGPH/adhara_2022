<nav class="navbar navbar-dark d-block d-md-none" id="baner-whats">
        <p>@lang('main.rates-special-mob'):  $ {{ $rate }} @lang('main.taxes-rate')</p>
        <p><strong>@lang('main.hover-whats-p') WhatsApp:</strong><a href="https://api.whatsapp.com/send?phone=529981221816" target='_blank'> 998 122 1816 <img src="{{ asset('images/icons/social_media/whatsapp.png') }}" id='logo-whats-baner' alt=""></a></p>
        {{-- <h4>WhatsApp</h4> --}}
 </nav>

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