<div class="row blutter" id="buscador-box">
    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 offset-md-1 offset-lg-2 offset-xl-2">
        <form action="{{ route('booking',['locale'=>App::getLocale()]) }} " method="POST" id="sendData">
            @csrf
            <div class="row" id="box-search">
                <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 d-flex">
                    <div class="input-group-prepend">
                        <img src="{{ asset('images/icons/buscador/calendar.png')}}" class="calendar-b" id="calendar" alt="">
                    </div>
                    <input type="text" class="form-control date-input" placeholder="@lang('main.mini-banner2-09')" id="start" autocomplete="off" aria-label="Fechas a reservar" name="empieza" required="" {{--oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="this.setCustomValidity('')--}}>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 d-flex mob-space">
                    <div class="input-group-prepend">
                        <img src="{{ asset('images/icons/buscador/guests.png') }}" class="icon-search" alt="">
                    </div>
                    <input type="text" class="form-control input-style" name="paxs_rooms" id="pax_rooms" readonly placeholder="1pax, 1hab" required="">
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <button type="submit" class="btn btn-primary" id="search-btn"><i class="fas fa-search"></i><div class="d-inline d-md-none d-xxl-inline">@lang('main.mini-banner2-01')</div></button>
                    <input type="hidden" class="form-control" name="startDate" id="startDate" readonly>
                    <input type="hidden" class="form-control" name="endDate" id="endDate" readonly>
                    <input type="hidden" class="form-control" name="total-paxs" value="1" readonly>
                    <input type="hidden" class="form-control" name="room.1.adults" id="room_1" value="1" readonly>
                    <input type="hidden" class="form-control" name="room.1.kids" id="kid_1" value="0" readonly>
                    <input type="hidden" class="form-control" name="room.1.kids.no.bf" id="kid_br_1" value="0" readonly>
                    <input type="hidden" class="form-control" name="adults" value="1" readonly>
                    <input type="hidden" class="form-control" name="kids" value="0" readonly>
                    <input type="hidden" class="form-control" name="rooms" value="1" readonly>
                    <input type="hidden" value="csrf_token" readonly name="csrf_token">
                    <div id="extras"></div>
                </div>
            </div>
        </form>
    </div>
    <div class="layout-room">
        <div class="rooms_all">
            <div id="room_1" class="pax-room">
                <div class="header.room" style="padding-left:5px;">
                    <span><img src="{{ asset('images/icons/buscador/bed.png') }}" alt="Room.1" class="bed-room" style="width: 25px;">@lang('main.mini-banner2-03') 1</span>
                </div>
                <div class="body room">
                    <div class="room_feature" id="room_1_adult">
                        @lang('main.mini-banner2-04')
                        <div class="controls-box room_adult">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">1</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature" id="room_1_kid">
                        @lang('main.mini-banner2-05')
                        <div class="controls-box room_kid">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">0</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature pax_Age" id="room_1_age">
                        <p style="font-size: 11px;text-align: center;">@lang('main.mini-banner2-08')</p>

                    </div>
                    <div class="room_feature" id="room_apply">
                        <span class="label-plus">+ @lang('main.mini-banner2-03')</span>
                        <button class="plus-room" style="float:right;">@lang('main.mini-banner2-02')</button>
                    </div>
                </div>
            </div>
            <div id="room_2" class="pax-room">
                <div class="header.room" style="padding-left:5px;">
                    <span><img src="{{ asset('images/icons/bed.png') }}" alt="Room.1" class="bed-room" style="width: 25px;">@lang('main.mini-banner2-03') 2</span>
                    <div class="minus-room">@lang('main.mini-banner2-06')</div>
                </div>
                <div class="body room">
                    <div class="room_feature" id="room_2_adult">
                    @lang('main.mini-banner2-04')
                        <div class="controls-box room_adult">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">1</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature" id="room_2_kid">
                    @lang('main.mini-banner2-05')
                        <div class="controls-box room_kid">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">0</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature pax_Age" id="room_2_age">
                        <p style="font-size: 11px;text-align: center;">@lang('main.mini-banner2-08')</p>
                    </div>
                    <div class="room_feature" id="room_apply">
                        <span class="label-plus">+ @lang('main.mini-banner2-03')</span>
                        <button class="plus-room" style="float:right;">@lang('main.mini-banner2-02')</button>
                    </div>
                </div>
            </div>
            <div id="room_3" class="pax-room">
                <div class="header.room" style="padding-left:5px;">
                    <span><img src="{{ asset('images/icons/buscador/bed.png') }}" alt="Room.1" class="bed-room" style="width: 25px;">@lang('main.mini-banner2-03') 3</span>
                    <div class="minus-room"> @lang('main.mini-banner2-06') </div>
                </div>
                <div class="body room">
                    <div class="room_feature" id="room_3_adult">
                    @lang('main.mini-banner2-04')
                        <div class="controls-box room_adult">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">1</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature" id="room_3_kid">
                    @lang('main.mini-banner2-05')
                        <div class="controls-box room_kid">
                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" alt=""></button>
                            <span class="total-pax">0</span>
                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="room_feature pax_Age" id="room_3_age">
                        <p style="font-size: 11px;text-align: center;">@lang('main.mini-banner2-08')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="{{ asset('js/moment.min.js')}}"></script>
<script type="text/javascript">

    $(document).ready(function(){

        var picker = new Litepicker({
            element: document.getElementById('start'),
            singleMode: false,
            format: 'DD-MM-YYYY',
            resetButton: true,
            minDate:moment(),

            onSelect: function(date1, date2) {
                console.log(picker.getStartDate().format('YYYY-MM-DD'));
                $("input[name='startDate']").val(picker.getStartDate().format('YYYY-MM-DD'));
                $("input[name='endDate']").val(picker.getEndDate().format('YYYY-MM-DD'));
            }
        });

        var iconPick = new Litepicker({
            element: document.getElementById('calendar'),
            singleMode: false,
            format: 'DD-MM-YYYY',
            resetButton: true,
            minDate:moment(),
            onSelect: function(date1, date2) {
                console.log(iconPick.getStartDate().format('YYYY-MM-DD'));
                $("input[name='startDate']").val(iconPick.getStartDate().format('YYYY-MM-DD'));
                $("input[name='endDate']").val(iconPick.getEndDate().format('YYYY-MM-DD'));
                var str = "";
                str = iconPick.getStartDate().format('YYYY-MM-DD')+' - '+iconPick.getEndDate().format('YYYY-MM-DD');
                $('#start').val(str);
            }
        });

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
                            '<option value="1">1 @lang("main.mini-banner2-07")</option>'+
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
                            '<option value="12">12 @lang("main.mini-banner2-07")</option>'+
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
