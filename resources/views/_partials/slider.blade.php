<div class="section">
    <div class="widget-slider">
        <div class="wrapper-full">
            <!-- Slider Carousel -->
            <div class="widget-carousel owl-carousel owl-theme">

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
            <form action="{{ route('booking',['locale'=>App::getLocale()]) }} " method="POST">
                @csrf
                <div class="slider-booking booking-mob">
                    <div class="wrapper wp-100">
                        <!--h5>BOOK NOW YOUR HOTEL</h5-->
                        <ul>
                            <li class="customW">
                                <i class="fa fa-calendar-plus-o" id="calendar"></i>
                                <input type="text" class="date-input" name="dates_booking" placeholder="@lang('main.booking.dates')" id="start" autocomplete="off" required>
                                <input type="hidden" name="checkIn">
                                <input type="hidden" name="checkOut">
                            </li>
                            <!--li>
                                <i class="fa fa-calendar-plus-o"></i>
                                <input type="text" name="checkout" placeholder="CHECK OUT" class="datepicker" required>
                            </li-->
                            <li class="customW">
                                <input type="text" name="pax_rooms" placeholder="1 pax, 1 hab" id="pax_rooms">
                                <div class="layout-room">
                                    <div class="rooms_all">
                                        <div id="room_1" class="pax-room">
                                            <div class="header.room" style="padding-left:5px;">
                                                <span><!--i class="fa-solid fa-bed" style="margin-right: 10px;"></i-->@lang('main.booking.room') 1</span>
                                            </div>
                                            <div class="body room">
                                                <div class="room_feature" id="room_1_adult">
                                                    @lang('main.booking.adults')
                                                    <div class="controls-box room_adult">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">1</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature" id="room_1_kid">
                                                    @lang('main.booking.kids')
                                                    <div class="controls-box room_kid">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">0</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature pax_Age" id="room_1_age">
                                                    <p style="font-size: 11px;text-align: center;">@lang('main.booking.years.label')</p>

                                                </div>
                                                <div class="room_feature" id="room_apply">
                                                    <span class="label-plus">+ @lang('main.booking.room')</span>
                                                    <span class="plus-room" style="float:right;">@lang('main.booking.apply')</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="room_2" class="pax-room">
                                            <div class="header.room" style="padding-left:5px;">
                                                <span><!--i class="fa-solid fa-bed" style="margin-right: 10px;"></i-->@lang('main.booking.room') 2</span>
                                                <div class="minus-room"><i class="fa-solid fa-trash-can"></i></div>
                                            </div>
                                            <div class="body room">
                                                <div class="room_feature" id="room_2_adult">
                                                @lang('main.booking.adults')
                                                    <div class="controls-box room_adult">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">1</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature" id="room_2_kid">
                                                @lang('main.booking.kids')
                                                    <div class="controls-box room_kid">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">0</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature pax_Age" id="room_2_age">
                                                    <p style="font-size: 11px;text-align: center;">@lang('main.booking.years.label')</p>
                                                </div>
                                                <div class="room_feature" id="room_apply">
                                                    <span class="label-plus">+ @lang('main.booking.room')</span>
                                                    <span class="plus-room" style="float:right;">@lang('main.booking.apply')</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="room_3" class="pax-room">
                                            <div class="header.room" style="padding-left:5px;">
                                                <span><!--i class="fa-solid fa-bed" style="margin-right: 10px;"></i-->@lang('main.booking.room') 3</span>
                                                <div class="minus-room"> <i class="fa-solid fa-trash-can"></i> </div>
                                            </div>
                                            <div class="body room">
                                                <div class="room_feature" id="room_3_adult">
                                                @lang('main.booking.adults')
                                                    <div class="controls-box room_adult">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">1</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature" id="room_3_kid">
                                                @lang('main.booking.kids')
                                                    <div class="controls-box room_kid">
                                                        <button class="btn-controls down"><i class="fa-solid fa-circle-minus"></i></button>
                                                        <span class="total-pax">0</span>
                                                        <button class="btn-controls up"><i class="fa-solid fa-circle-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="room_feature pax_Age" id="room_3_age">
                                                    <p style="font-size: 11px;text-align: center;" class="plus-room">@lang('main.booking.apply')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--li>
                                <i class="fa fa-caret-down"></i>
                                <select name="childrens" required>
                                    <option value="">CHILDRENS</option>
                                    <option value="1">1 CHILDREN</option>
                                    <option value="2">2 CHILDREN</option>
                                    <option value="3">3 CHILDREN</option>
                                </select>
                            </li-->
                            <li class="customW-20">
                                <div class="hold-data" style="display: none;">
                                    <input type="hidden" class="form-control" name="total-paxs" value="1" readonly>
                                    <input type="hidden" class="form-control" name="room.1.adults" id="room_1" value="1" readonly>
                                    <input type="hidden" class="form-control" name="room.1.kids" id="kid_1" value="0" readonly>
                                    <input type="hidden" class="form-control" name="room.1.kids.no.bf" id="kid_br_1" value="0" readonly>
                                    <input type="hidden" class="form-control" name="adults" value="1" readonly>
                                    <input type="hidden" class="form-control" name="kids" value="0" readonly>
                                    <input type="hidden" class="form-control" name="rooms" value="1" readonly>
                                    <div id="extras"></div>
                                </div>
                                <button type="submit" class="btn btn-booking">@lang('main.booking.search')</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
            <!-- Slider Booking End -->
        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){

        var picker = new Litepicker({
            element: document.getElementById('start'),
            singleMode: false,
            format: 'DD-MM-YYYY',
            resetButton: true,
            minDate:moment(),
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    $("input[name='checkIn']").val(picker.getStartDate().format('YYYY-MM-DD'));
                    $("input[name='checkOut']").val(picker.getEndDate().format('YYYY-MM-DD'));
                });
            }
        });

        /*var iconPick = new Litepicker({
            element: document.getElementById('calendar'),
            singleMode: false,
            format: 'DD-MM-YYYY',
            resetButton: true,
            minDate:moment(),
            onSelect: function(date1, date2) {
                console.log(iconPick.getStartDate().format('YYYY-MM-DD'));
                $("input[name='checkIn']").val(iconPick.getStartDate().format('YYYY-MM-DD'));
                $("input[name='checkOut']").val(iconPick.getEndDate().format('YYYY-MM-DD'));
                var str = "";
                str = iconPick.getStartDate().format('YYYY-MM-DD')+' - '+iconPick.getEndDate().format('YYYY-MM-DD');
                console.log(str, 'hola');
                $('#start').val(str);
            }
        });*/

        var rooms = 1;
        var years = 'años';
       /* if(Cookies.get("lang") == "en"){
            years = "years";
        } years = "years";*/
        $("#pax_rooms").on('click',function(){
            $(".rooms_all").css('display','block');
        });

        $('.date-input').on('click',function(){
            if($(".rooms_all").css('display') == 'block'){
                $(".rooms_all").css('display','none');
            }
        });

        $("#search-btn").on('click',function(){
            if($(".rooms_all").css('display') == 'block'){
                $(".rooms_all").css('display','none');
            }
        });

        $(".plus-room").on('click',function(e){

            e.preventDefault();
            if($(".rooms_all").css('display') == 'block'){
                $(".rooms_all").css('display','none');
            }
        });

        var warning_kids = '<p style="font-size: 11px;text-align: center;">Edad de los menores (0 a 11 años)</p>';

        var age_template = '<select name="" id="" class="form-control ageKids">'+
                            '<option value="0">0 @lang("main.mini-banner2-07") </option>'+
                            '<option value="1">1 @lang("main.mini-banner2-077")</option>'+
                            '<option value="2">2 @lang("main.mini-banner2-07")</option>'+
                            '<option value="3">3 @lang("main.mini-banner2-07")</option>'+
                            '<option value="4">4 @lang("main.mini-banner2-07")</option>'+
                            '<option value="5">5 @lang("main.mini-banner2-07")</option>'+
                            '<option value="6">6 @lang("main.mini-banner2-07")</option>'+
                            '<option value="7">7 @lang("main.mini-banner2-07")</option>'+
                            '<option value="8">8 @lang("main.mini-banner2-07")</option>'+
                            '<option value="9">9 @lang("main.mini-banner2-07")</option>'+
                            '<option value="10">10 @lang("main.mini-banner2-07")</option>'+
                            '<option value="11">11 @lang("main.mini-banner2-07")</option>'+
                            '</select>';

        $(".room_feature .label-plus").on('click',addRoom);

        $(".minus-room").on('click',deleteRoom);

        function deleteRoom(){
            var element = $(this).parents()[1];
            var spanAdults = $(element).find('span')[1];
            var spanKids = $(element).find('span')[2];
            //Para obtener valores de un W.fn.init JQUERY
            var pax_ = parseInt($(spanAdults).text()) + parseInt($(spanKids).text());
            var paxs = $("input[name='total-paxs']").val();
            var total = paxs - pax_;


            if(rooms == 3){
                var parent = $(element).siblings()[1];
                $("input[name='room.3.adults']").remove();
                $("input[name='room.3.kids']").remove();
                $("input[name='room.3.kids.no.bf']").remove();
            }
            else{
                var parent = $(element).siblings()[0];
                $("input[name='room.2.adults']").remove();
                $("input[name='room.2.kids']").remove();
                $("input[name='room.2.kids.no.bf']").remove();
            }

            var children = $(parent).find('span')[3];
            $(children).parent().css('display','block');
            $(element).css('display','none');
            rooms--;

            var newPlaceholder = total+"pax, "+rooms+"hab";
            $("#pax_rooms").attr('placeholder',newPlaceholder);
            $("input[name='total-paxs']").val(total);
            $("input[name='adults']").val(total);
            $("input[name='rooms']").val(rooms);
        }

        function addRoom(){
            console.log($(this).parent());
            var element = $(this).parent().css('display','none');
            var paxs = 0;
            if(rooms < 3){

                rooms++;
                $("input[name='rooms']").val(rooms);
                if(rooms == 2){
                    paxs = $("input[name='total-paxs']").val();
                    paxs++;
                    var newPlaceholder = paxs+"pax, "+rooms+"hab";

                    $("#pax_rooms").attr('placeholder',newPlaceholder);
                    $("input[name='total-paxs']").val(paxs);
                    var adult = $("input[name='adults']").val();
                    adult++
                    $("input[name='adults']").val(adult);
                    $("#room_2").css('display','block');
                    var inputs_room = '<input type="hidden" class="form-control" name="room.'+rooms+'.adults" value="1" readonly><input type="hidden" class="form-control" name="room.'+rooms+'.kids" value="0" readonly><input type="hidden" class="form-control" name="room.'+rooms+'.kids.no.bf" value="0" readonly>';
                    $("#extras").append(inputs_room);


                }

                if(rooms == 3){
                    paxs = $("input[name='total-paxs']").val();
                    paxs++;
                    var newPlaceholder = paxs+"pax, "+rooms+"hab";

                    $("#pax_rooms").attr('placeholder',newPlaceholder);
                    $("input[name='total-paxs']").val(paxs);
                    var adult = $("input[name='adults']").val();
                    adult++
                    $("input[name='adults']").val(adult);
                    $("#room_3").css('display','block');
                    var inputs_room = '<input type="hidden" class="form-control" name="room.'+rooms+'.adults" value="1" readonly><input type="hidden" class="form-control" name="room.'+rooms+'.kids" value="0" readonly><input type="hidden" class="form-control" name="room.'+rooms+'.kids.no.bf" value="0" readonly>';
                    $("#extras").append(inputs_room);

                }
            }

        }

        function KidsNoBF(divParent){
            var noBf = 0;
            var KidsNoBFRoom = "";

            switch(divParent.attr('id')){

                    case 'room_1_age':
                        var KidsNoBFRoom = "room.1.kids.no.bf";
                        break;
                    case 'room_2_age':
                        var KidsNoBFRoom = "room.2.kids.no.bf";
                        break;
                    case 'room_3_age':
                        var KidsNoBFRoom = "room.3.kids.no.bf";
                        break;
            }

            divParent.children('.ageKids').each(function(){
                if ($(this).val() < 4) {
                    noBf ++;
                }
            });

            $("input[name='"+KidsNoBFRoom+"']").val(noBf);
        }

        $(".room_adult .up").on('click',function(e){
            e.preventDefault();
            var element = $(this).siblings('.total-pax');
            var divParent = $(this).parents()[1];
            var pax = parseInt(element[0].innerHTML);
            if(pax < 4){
                pax++;
                element.html(pax);
                var pax_ = parseInt($("input[name='total-paxs']").val());
                if(pax_)
                    pax_++;

                var newPlaceholder = pax_+"pax, "+rooms+"hab";
                $("#pax_rooms").attr('placeholder',newPlaceholder);
                $("input[name='total-paxs']").val(pax_);
                var actualAdults = $("input[name='adults']").val();
                actualAdults++;
                $("input[name='adults']").val(actualAdults);

                switch($(divParent).attr('id')){

                    case 'room_1_adult':
                        $("input[name='room.1.adults']").val(pax);
                        break;
                    case 'room_2_adult':
                        $("input[name='room.2.adults']").val(pax);
                        break;
                    case 'room_3_adult':
                        $("input[name='room.3.adults']").val(pax);
                        break;
                }

            }


            if(pax == 2){
                var element = $(this).siblings('.disabled');
                $(element).removeClass('disabled').addClass('down');
                $(element).css('cursor','pointer');
            }

            if(pax == 4){
                $(this).removeClass('up').addClass('disabled');
                $(this).css('cursor','not-allowed');
            }

        });

        $(".room_adult .down").on('click',function(e){
            e.preventDefault();
            var element = $(this).siblings('.total-pax');
            var divParent = $(this).parents()[1];
            var pax = parseInt(element[0].innerHTML);
            if(pax > 1){
                pax--;
                element.html(pax);
                var pax_ = parseInt($("input[name='total-paxs']").val());
                if(pax_)
                    pax_--;

                var newPlaceholder = pax_+"pax, "+rooms+"hab";
                $("#pax_rooms").attr('placeholder',newPlaceholder);
                $("input[name='total-paxs']").val(pax_);
                var actualAdults = $("input[name='adults']").val();
                actualAdults--;
                $("input[name='adults']").val(actualAdults);

                switch($(divParent).attr('id')){

                    case 'room_1_adult':
                        console.log("room 1 adult");
                        $("input[name='room.1.adults']").val(pax);
                        break;
                    case 'room_2_adult':
                        $("input[name='room.2.adults']").val(pax);
                        break;
                    case 'room_3_adult':
                        $("input[name='room.3.adults']").val(pax);
                        break;
                }

            }


            if(pax == 1){
                $(this).removeClass('down').addClass('disabled');
                $(this).css('cursor','not-allowed');
            }

            if(pax ==3){
                var element = $(this).siblings('.disabled');
                $(element).removeClass('disabled').addClass('up');
                $(element).css('cursor','pointer');
            }

        });


        $(".room_kid .up").on('click',function(e){
            e.preventDefault();
            var element = $(this).siblings('.total-pax');
            var divParent = $(this).parents()[1];
            var pax = parseInt(element[0].innerHTML);
            var kids_no_bf = 0;
            if(pax < 3){
                pax++;
                element.html(pax);
                var pax_ = parseInt($("input[name='total-paxs']").val());
                if(pax_)
                    pax_++;

                var newPlaceholder = pax_+"pax, "+rooms+"hab";
                $("#pax_rooms").attr('placeholder',newPlaceholder);
                $("input[name='total-paxs']").val(pax_);
                var actualKids = $("input[name='kids']").val();
                actualKids++;
                $("input[name='kids']").val(actualKids);

                //pax_Age es la clase donde deben de ir los selects para la edad
                switch($(divParent).attr('id')){

                    case 'room_1_kid':
                        $("input[name='room.1.kids']").val(pax);
                        $("#room_1_age").append(age_template);

                        kids_no_bf = $("input[name='room.1.kids.no.bf']").val();
                        kids_no_bf ++;
                        $("input[name='room.1.kids.no.bf']").val(kids_no_bf);

                        break;
                    case 'room_2_kid':
                        $("input[name='room.2.kids']").val(pax);
                        $("#room_2_age").append(age_template);

                        kids_no_bf = $("input[name='room.2.kids.no.bf']").val();
                        kids_no_bf ++;
                        $("input[name='room.2.kids.no.bf']").val(kids_no_bf);

                        break;
                    case 'room_3_kid':
                        $("input[name='room.3.kids']").val(pax);
                        $("#room_3_age").append(age_template);

                        kids_no_bf = $("input[name='room.3.kids.no.bf']").val();
                        kids_no_bf ++;
                        $("input[name='room.3.kids.no.bf']").val(kids_no_bf);

                        break;
                }

            }


            if(pax == 1){
                var element = $(this).siblings('.disabled');
                $(element).removeClass('disabled').addClass('down');
                $(element).css('cursor','pointer');
            }

            if(pax == 3){
                $(this).removeClass('up').addClass('disabled');
                $(this).css('cursor','not-allowed');
            }

        });

        $(".room_kid .down").on('click',function(e){
            e.preventDefault();
            var element = $(this).siblings('.total-pax');
            var divParent = $(this).parents()[1];
            var pax = parseInt(element[0].innerHTML);
            var divRoomAge = '';
            if(pax >= 1){
                pax--;
                element.html(pax);
                var pax_ = parseInt($("input[name='total-paxs']").val());
                if(pax_)
                    pax_--;

                var newPlaceholder = pax_+"pax, "+rooms+"hab";
                $("#pax_rooms").attr('placeholder',newPlaceholder);
                $("input[name='total-paxs']").val(pax_);
                var actualKids = $("input[name='kids']").val();
                actualKids--;
                $("input[name='kids']").val(actualKids);

                switch($(divParent).attr('id')){

                    case 'room_1_kid':
                        $("input[name='room.1.kids']").val(pax);
                        $("#room_1_age select:last-child").remove();
                        divRoomAge = 'room_1_age';
                        break;
                    case 'room_2_kid':
                        $("input[name='room.2.kids']").val(pax);
                        $("#room_2_age select:last-child").remove();
                        divRoomAge = 'room_2_age';
                        break;
                    case 'room_3_kid':
                        $("input[name='room.3.kids']").val(pax);
                        $("#room_3_age select:last-child").remove();
                        divRoomAge = 'room_3_age';
                        break;
                }

                KidsNoBF($('#'+divRoomAge));
            }


            if(pax == 0){
                $(this).removeClass('down').addClass('disabled');
                $(this).css('cursor','not-allowed');
            }

            if(pax ==2){
                var element = $(this).siblings('.disabled');
                $(element).removeClass('disabled').addClass('up');
                $(element).css('cursor','pointer');
            }

        });

        $(document).on('change',".ageKids",function(e){
            KidsNoBF($(this).parent());
        });

    });
</script>
