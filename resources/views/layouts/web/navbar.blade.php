<nav class="navbar navbar-expand-lg fixed-top navbar-light adhara-color" style="color: white;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio',['locale' => App::getLocale()]) }}"><img src="{{ asset('images/logos/adhara_logo.png') }}" alt="Hotel Adhara Express" id="logo-main"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $home_active ?? 'no-active'}}" aria-current="page" href="{{ route('inicio',['locale' => App::getLocale()]) }}">@lang('main.nav-home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $room_active ?? 'no-active'}}" href="{{ route('rooms',['locale' => App::getLocale()]) }}">@lang('main.nav-rooms')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $contact_active ?? 'no-active'}}" href="{{ route('contact',['locale' => App::getLocale()]) }}">@lang('main.nav-contact')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(Route::currentRouteName(),$lang)}}"><img src="{{asset('images/flags/')}}/@lang('main.nav-flag')" width="25px"><span class="d-lg-none d-xl-inline" style="color: white;"> @lang('main.nav-lang')</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!--li class="nav-item">
                    <a class="nav-link {{ $covid_active ?? 'no-active'}}" href="{{ route('covid',['locale' => App::getLocale()]) }}" ><img src="{{ asset('images/covid_shield.png') }}" id='covid_shield' alt="Free covid"><span class="d-lg-none d-xl-inline">@lang('main.nav-covid-label')</span><span class="d-none d-lg-inline d-xl-none">COVID</span></a>
                </li-->
                <li class="nav-item">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=529981221861" target='_blank' style="color: white;"><img src="{{ asset('images/icons/social_media/whatsapp.png') }}" id='whats_nav' style="margin-right:10px;">+52 9981221861 </a>
                </li>
                <li class="nav-item">
                    @if (Cookie::get('user'))
                    <div class="dropdown">
                            <a class="nav-link" href="#" class="dropdown-toggle" id="logout" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">{{ json_decode(Cookie::get('user'))->name }}</a>
                            
                            <ul class="dropdown-menu" aria-labelledby="logout">
                                <li><a class="dropdown-item" href="/es/logout-clubestrella">@lang('main.nav-logout')</a></li>
                            </ul>
                        </div>
                    @else
                        @if (App::getLocale() == 'es')
                            <a class="nav-link" href="#modal-login" data-bs-toggle="modal"><img src="{{ asset('images/icons/estrella_es.png') }}" class="club-main"> </a>  
                        @else
                            <a class="nav-link" href="#modal-login" data-bs-toggle="modal"><img src="{{ asset('images/icons/estrella_en.png') }}" class="club-main"></a>
                        @endif
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('https://www.facebook.com/HotelAdharaCancun')}}" target="_blank"><img src="{{ asset('images/icons/social_media/face.png') }}" id='face_nav' alt="facebook" > </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('https://www.instagram.com/adharacancun')}}" target="_blank"><img src="{{ asset('images/icons/social_media/instagram.png') }}" id='face_nav' alt="facebook" > </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Modal inicio sesion club estrella --}}
<div class="modal fade " id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true" ng-controller="LoginController">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-login-content">
            <div class="modal-body py-0 px-0">
                <!-- start login and recovery pass -->
                <div class="row mx-0" >
                    <div class="col-12 col-lg-6 logo-panel-login">
                        <div id="pseudo-element"></div>
                        <img src="{{ asset('/images/ClubEstrellaAdhara1.png') }}"/>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="modal-header border-0 pb-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- <img class="m-auto login-logo-small" src="/img/club.png" /> --}}
                            <!-- start login -->
                            <form id="login-modal" class="login-start" method="" enctype="multipart/form-data" ng-show="showLogin" action="">
                                <h5 class="mb-3">@lang('main.login-item001')</h5>
                                @csrf
                                <div id="login-error"></div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="@lang('main.login-item002')" name="email" required  data-val-required="The Username field is required.">
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control" id="login-password" placeholder="@lang('main.login-item003')" name="password" required  data-val-required="The Password field is required.">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-dark w-100" id="login">@lang('main.login-item001')</button>
                                </div>
                                <div class="mb-4">
                                    <a type="button" id="evt-recovery" class="font-12 text-end d-block text-dark mb-3" target="_blank" href="https://clubestrella.mx/es/password/reset">@lang('main.login-item004')</a>
                                    <a id="evt-create-account" class="font-12 text-end d-block text-dark mb-3" target="_blank" href="https://clubestrella.mx/es/register">@lang('main.login-item005')</a>
                                </div>

                                <a target="_blank" href="https://clubestrella.mx/es">
                                    <button class="btn btn-dark w-100" type="button">@lang('main.login-item006')</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- start login and recovery pass -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	
    $(document).ready(function(){

        $("#login-modal").on('submit', function(e){
            console.log('here');
            e.preventDefault();
            $.ajax({
                url: "/es/get-user-clubestrella",
                type: "POST",
                data: $( this ).serialize()
            }).done(function() {
                location.reload();
            }).fail(function(jqXHR, textStatus, errorThrown) {
                var errorTxt;
                if(jqXHR.responseJSON.error == 403){
                    errorTxt = 'Error al iniciar sesi&#xF3;n, compruebe sus credenciales';
                } else {
                    errorTxt = 'Error al iniciar sesi&#xF3;n';
                }

                var alert = '<div class="alert alert-danger alert-dismissible" id="#login-error" role="alert">'+errorTxt+'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                $('#login-error').html(alert);
            });
        });

    
    });
</script>



  