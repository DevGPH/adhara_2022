<style>
    .slider-booking {
        position: absolute;
        bottom: 100px;
        left: 0;
        z-index: 2;
        width: 100%;
        color: #fff;
    }
    .slider-booking ul {
        width: 830px;
        padding: 20px;
        margin: 0 auto;
        background-color: rgb(213 217 225 / 81%);
        -webkit-box-shadow: 0px 0px 30px 0px rgba(34, 30, 24, 0.5);
        -moz-box-shadow: 0px 0px 30px 0px rgba(34, 30, 24, 0.5);
        box-shadow: 0px 0px 30px 0px rgba(34, 30, 24, 0.5);
    }

    .slider-booking ul::before {
        content: "";
        display: table;
    }

    .slider-booking ul li {
        position: relative;
        float: left;
        width: 20%;
        padding-right: 10px;
        text-align: left;
    }

    .slider-booking ul li .fa {
        position: absolute;
        top: 10px;
        left: calc(100% - 40px);
        z-index: 1;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        color: #6e5e78;
    }

    .slider-booking ul li input[type="text"] {
        width: 100%;
        height: 40px;
        line-height: 40px;
        padding: 0 15px;
        text-transform: uppercase;
        background-color: #e8ebf2;
        color: #6e5e78 !important;
    }

    .slider-booking ul::after {
        clear: both;
        content: "";
        display: table;
    }
</style>
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
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">1</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
                                        </div>
                                    </div>
                                    <div class="room_feature" id="room_1_kid">
                                        @lang('main.booking.kids')
                                        <div class="controls-box room_kid">
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">0</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
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
                                    <div class="minus-room"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;" alt=""></div>
                                </div>
                                <div class="body room" id ="body_room_2">
                                    <div class="room_feature" id="room_2_adult">
                                    @lang('main.booking.adults')
                                        <div class="controls-box room_adult">
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">1</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
                                        </div>
                                    </div>
                                    <div class="room_feature" id="room_2_kid">
                                    @lang('main.booking.kids')
                                        <div class="controls-box room_kid">
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">0</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
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
                                    <div class="minus-room"> <img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;" alt=""> </div>
                                </div>
                                <div class="body room" id="body_room_3">
                                    <div class="room_feature" id="room_3_adult">
                                    @lang('main.booking.adults')
                                        <div class="controls-box room_adult">
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">1</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
                                        </div>
                                    </div>
                                    <div class="room_feature" id="room_3_kid">
                                    @lang('main.booking.kids')
                                        <div class="controls-box room_kid">
                                            <button class="btn-controls down"><img src="{{ asset('images/icons/buscador/minus.png') }}" style="width: 15px;"/></button>
                                            <span class="total-pax">0</span>
                                            <button class="btn-controls up"><img src="{{ asset('images/icons/buscador/plus.png') }}" style="width: 15px;"/></button>
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
                        <input type="hidden" class="form-control" name="room.1.kids.age[]" id="kid_1_age" readonly>
                        <input type="hidden" class="form-control" name="room.1.kids.no.bf" id="kid_br_1" value="0" readonly>
                        <input type="hidden" class="form-control" name="room.2.adults" id="room_2" value="1" readonly>
                        <input type="hidden" class="form-control" name="room.2.kids" id="kid_2" value="0" readonly>
                        <input type="hidden" class="form-control" name="room.2.kids.age[]" id="kid_2_age" readonly>
                        <input type="hidden" class="form-control" name="room.2.kids.no.bf" id="kid_br_2" value="0" readonly>
                        <input type="hidden" class="form-control" name="room.3.adults" id="room_3" value="1" readonly>
                        <input type="hidden" class="form-control" name="room.3.kids" id="kid_3" value="0" readonly>
                        <input type="hidden" class="form-control" name="room.3.kids.age[]" id="kid_3_age" readonly>
                        <input type="hidden" class="form-control" name="room.3.kids.no.bf" id="kid_br_3" value="0" readonly>
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

<script type="text/javascript">
    var test = [];
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

        var rooms = 1;
        var years = 'años';

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

        $(".room_feature .label-plus").on('click',addRoom);
        $(".minus-room").on('click',deleteRoom);

        function deleteRoom(){
            var element = $(this).parents()[1];
            var id_element = $(this).parents()[1].id;
            var body_room = $('#' + id_element).children('div')[1].id;
            var age_kids = $('#' + body_room).children('div')[2].id;
            $("#" + age_kids).empty();
          
            var spanAdults = $(element).find('span')[1];
            var spanKids = $(element).find('span')[2];

            //Para obtener valores de un W.fn.init JQUERY
            var pax_ = parseInt($(spanAdults).text()) + parseInt($(spanKids).text());
            $(element).find('span')[1].innerHTML = '1';
            $(element).find('span')[2].innerHTML = '0';
            
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


        $(".room_kid .up").on('click',function(e) {
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

                console.log('total paxs' + pax_);
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
                        buildKidSelect($("#room_1_age"), pax, 1);
                        //$("#room_1_age").append(age_template);

                        kids_no_bf = $("input[name='room.1.kids.no.bf']").val();
                        kids_no_bf ++;
                        $("input[name='room.1.kids.no.bf']").val(kids_no_bf);

                        break;
                    case 'room_2_kid':
                        $("input[name='room.2.kids']").val(pax);
                        buildKidSelect($("#room_2_age"), pax, 2);
                        //$("#room_2_age").append(age_template);

                        kids_no_bf = $("input[name='room.2.kids.no.bf']").val();
                        kids_no_bf ++;
                        $("input[name='room.2.kids.no.bf']").val(kids_no_bf);

                        break;
                    case 'room_3_kid':
                        $("input[name='room.3.kids']").val(pax);
                        buildKidSelect($("#room_3_age"), pax, 3);
                        //$("#room_3_age").append(age_template);

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

        $(".room_kid .down").on('click',function(e) {
            e.preventDefault();
            var element = $(this).siblings('.total-pax');
            var divParent = $(this).parents()[1];
            var pax = parseInt(element[0].innerHTML);
            var divRoomAge = '';
            if (pax >= 1) {
                pax--;
                element.html(pax);
                var pax_ = parseInt($("input[name='total-paxs']").val());
                if (pax_)
                    pax_ --;

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
                        // We need to eliminate the kids age array 
                        var value_input = JSON.parse($("#kid_1_age").val());
                        var new_array = [];
                        if (value_input != null && value_input != '') {
                            for (i = 0; i < pax; i++) {
                                new_array[i] = value_input[i];
                            }
                            console.log(new_array);
                            $("#kid_1_age").val(JSON.stringify(new_array))
                        }
                        break;
                    case 'room_2_kid':
                        $("input[name='room.2.kids']").val(pax);
                        $("#room_2_age select:last-child").remove();
                        divRoomAge = 'room_2_age';
                        // We need to eliminate the kids age array 
                        var value_input = JSON.parse($("#kid_2_age").val());
                        var new_array = [];
                        if (value_input != null && value_input != '') {
                            for (i = 0; i < pax; i++) {
                                new_array[i] = value_input[i];
                            }
                            console.log(new_array);
                            $("#kid_2_age").val(JSON.stringify(new_array))
                        }
                        break;
                    case 'room_3_kid':
                        $("input[name='room.3.kids']").val(pax);
                        $("#room_3_age select:last-child").remove();
                        divRoomAge = 'room_3_age';
                        // We need to eliminate the kids age array 
                        var value_input = JSON.parse($("#kid_2_age").val());
                        var new_array = [];
                        if (value_input != null && value_input != '') {
                            for (i = 0; i < pax; i++) {
                                new_array[i] = value_input[i];
                            }
                            console.log(new_array);
                            $("#kid_3_age").val(JSON.stringify(new_array))
                        }
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

        $(document).on('change',".ageKids",function(e) {
            //Meter aqui las edades
            var element = $(this).parent().attr("id");
            var value_input = $("#" + element ).val();
            //var value_input = JSON.parse($("#kid_1_age").val());
            var id = $(this).attr("id");

            if (id == 'ageKids-room-1-1') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_1_age").val());
                }
                test[0] = $(this).find(":selected").val();
                $("#kid_1_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-1-2') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_1_age").val());
                }
                test[1] = $(this).find(":selected").val();
                $("#kid_1_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-1-3') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_1_age").val());
                }
                test[2] = $(this).find(":selected").val();
                $("#kid_1_age").val(JSON.stringify(test));
            }
            // ROOM 2
            if (id == 'ageKids-room-2-1') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_2_age").val());
                }
                test[0] = $(this).find(":selected").val();
                $("#kid_2_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-2-2') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_2_age").val());
                }
                test[1] = $(this).find(":selected").val();
                $("#kid_2_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-2-3') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_2_age").val());
                }
                test[2] = $(this).find(":selected").val();
                $("#kid_2_age").val(JSON.stringify(test));
            }
            // ROOM 3
            if (id == 'ageKids-room-3-1') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_3_age").val());
                }
                test[0] = $(this).find(":selected").val();
                $("#kid_3_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-3-2') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_3_age").val());
                }
                test[1] = $(this).find(":selected").val();
                $("#kid_3_age").val(JSON.stringify(test));
            }
            if (id == 'ageKids-room-3-3') {
                if (value_input != null && value_input != '') {
                    test = JSON.parse($("#kid_3_age").val());
                }
                test[2] = $(this).find(":selected").val();
                $("#kid_3_age").val(JSON.stringify(test));
            }
            console.log(test);
            KidsNoBF($(this).parent());
        });

        function buildKidSelect (container, value, room) {
            var value_input = null;
            var room_1_kids_age = null;
            var warning_kids = '<p style="font-size: 11px;text-align: center;">Edad de los menores (0 a 11 años)</p>';
            container.empty();
            var age = 'AÑOS';
            var index = 0;
            var find_value = null;
            for (y = 1; y <= value; y++) {
                value_input = $("#kid_" + room + "_age");
                var find_select = false;
                if (value_input.val() != null && value_input.val() != '') {
                    room_1_kids_age = JSON.parse(value_input.val());
                    if (index in room_1_kids_age) {
                        find_select = true;
                    }
                } 
                
                //var div = document.createElement("div");
                var selectList = document.createElement("select");
                selectList.id = "ageKids-room-" + room + "-" + y;
                selectList.name = "subtype";
                selectList.className = 'ageKids';
                container.append(selectList);

                for (i = 0; i < 12; i++) {
                    if (find_select) {
                        if (i == room_1_kids_age[index]) {
                            find_value = i;
                        }
                    }

                    if (i == 1) {
                        age = 'AÑO';
                    } else {
                        age = 'AÑOS';
                    }
                    var opt = $("<option>").val(i).text(i + ' ' + age);
                    //append option to the select element
                    $("#ageKids-room-" + room + "-" + y).append(opt);

                }
                if (find_select) {
                    $("#ageKids-room-" + room + "-" + y + " option[value=" + find_value + "]").attr('selected','selected');
                }
                
                index++;
            }
        }

    });
</script>