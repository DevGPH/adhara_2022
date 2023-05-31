<!-- Site Footer -->
<div class="site-footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h5>@lang('main.footer.media')</h5>
                    <h6>@lang('main.footer.follow')</h6>
                    <div class="widget-social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/HotelAdharaCancun" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.tiktok.com/@hoteladharacancun" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/adharacancun" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5>@lang('main.footer.news')</h5>
                    <h6>@lang('main.footer.send')</h6>
                    <div class="widget-newsletter">
                        <form>
                            <input type="text" placeholder="@lang('main.footer.mail')" required>
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="wrapper">
            <div class="footer-logo">
                <img src="{{ asset('images/logos/logo_adhara.png') }}" alt="The Grandium Hotel">
            </div>
            <div class="footer-copyright">
                <p>@lang('main.footer.company')</p>
            </div>
            <div id="gph" style="margin-top:40px;">
                <img src="{{ asset('images/footer/gph.png') }}" alt="Grupo Peninsular de Hoteles" style="width:150px;display:block;margin:0px auto;">
            </div>
            <ul class="client-footers">
                <li><img src="{{ asset('images/footer/express.png') }}" alt=""></li>
                <li><img src="{{ asset('images/footer/clubestrella.png') }}" alt=""></li>
                <li><img src="{{ asset('images/footer/oktrip.png') }}" alt=""></li>
                <li><img src="{{ asset('images/footer/grill.png') }}" alt=""></li>
                <li><img src="{{ asset('images/footer/cocodrillos.png') }}" alt=""></li>
                <li><img src="{{ asset('images/footer/eventos.png') }}" alt=""></li>
            </ul>
            <div class="footer-contact">
                <ul>
                    <li><img src="{{ asset('images/footer/pagoseguro.png') }}" alt="" style="width: 120px;"></li>
                    <li><img src="{{ asset('images/footer/ssl.png') }}" alt="" style="width: 120px;"></li>
                    <li><img src="{{ asset('images/footer/hacker.png') }}" alt="" style="width: 120px;"></li>
                    <li><img src="{{ asset('images/footer/santander.png') }}" alt="" style="width: 120px;"></li>
                    <li><img src="{{ asset('images/footer/mexico.png') }}" alt="" style="width: 120px;"></li>
                </ul>
            </div>
            <div class="footer-nav">
                <ul>
                    <!--li><a href="#">SITEMAP</a></li-->
                    <li><a href="#">@lang('main.footer.privacy')</a></li>
                    <li><a href="#">@lang('main.footer.policy')</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</div>
<!-- Site Footer End -->
