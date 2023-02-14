@extends('main-template')
<link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
@section('section')
<div class="container mt-4">
    <h4 class="mt-4" style="color:#2A6092">Información de la plaza </h4>
    <form action="{{route('edit.anuncios2.post',$parkingSpace->id)}}" method="POST">
        @csrf
        @method('POST')
        {{-- {{$parkingSpace}} --}}
    <div style="margin: 30px">
        <h5>Duración de la plaza en alquiler</h5>
           <div class="ps-xl-5"
                style="
                padding: 20px;
                margin-top: 20px;">

                <ul class="list-unstyled text-muted">
                    <li class="mb-2">
                        <div class="filter-btn function_buttons_selector_duration_filters_modal">
                        <a class="text-muted class_text_options_duration_filters_step5">Corta</a>
                        <button id="cortabtn"  onclick="setCortaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_corta_upload_parking_step5">1 - 6 meses</button>
                        <input id="cortaInput" type="hidden" name ="duration1"  value="{{$parkingSpace->duration ?? ''}}">
                        </div>
                    </li>

                    <li class="mb-2">
                       <div class="filter-btn function_buttons_selector_duration_filters_modal">
                           <a class="text-muted class_text_options_duration_filters_step5">Media</a>
                           <button id="mediabtn"  onclick="setMediaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_media_upload_parking_step5">6 - 12 meses</button>
                           <input id="mediaInput" type="hidden" name ="duration2"  value="{{$parkingSpace->duration ?? ''}}">
                        </div>
                    </li>

                    <li class="mb-2">
                    <div class="filter-btn function_buttons_selector_duration_filters_modal">
                        <a class="text-muted class_text_options_duration_filters_step5">Larga</a>
                        <button id="largabtn" onclick="setLargaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_larga_upload_parking_step5">+ 12 meses</button>
                        <input id="largaInput" type="hidden" name ="duration3"  value="{{$parkingSpace->duration ?? ''}}">
                    </div>
                    </li>
                  </ul>
            </div>
        <h5>Servicios extras de la plaza</h5>
        <div class="row" style="margin: 25px;">
            <div class="col-md-6">

                <div class="class_group1_services_step3 class_form_check_services_filters">
                <input name="disabled_access" value="{{$parkingSpace->disabled_access ?? ''}}" class="form-check-input" id="custom-check-1" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-1">Acceso minusválido</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/discapacidad-1.svg') }}">
                </div>

                <div class="class_group1_services_step3 class_form_check_services_filters">
                <input name="security_personnel" value="{{$parkingSpace->security_personnel ?? ''}}"  class="form-check-input" id="custom-check-2" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-2">Personal de seguridad</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/policia.svg') }}">
                </div>

                <div class="class_group1_services_step3 class_form_check_services_filters">
                <input name="gate_electric_charger" value="{{$parkingSpace->gate_electric_charger ?? ''}}" class="form-check-input" id="custom-check-3" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-3">Cargador eléctrico</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/cargando-1.svg') }}">
                </div>

            </div>
            <div class="col-md-6">

             <div class="class_group2_services_step3 class_form_check_services_filters">
                <input name="housekeeping" value="{{$parkingSpace->housekeeping ?? ''}}" class="form-check-input" id="custom-check-4" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-4">Servicio limpieza</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/carro-de-limpieza -1.svg') }}">
                </div>

                <div class="class_group2_services_step3 class_form_check_services_filters">
                <input name="automatic_door" value="{{$parkingSpace->automatic_door ?? ''}}" class="form-check-input" id="custom-check-5" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-5">Puerta automática</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/garaje 1.svg') }}">
                </div>

                <div class="class_group2_services_step3 class_form_check_services_filters">
                <input name="security_cameras" value="{{$parkingSpace->security_cameras ?? ''}}" class="form-check-input" id="custom-check-6" type="checkbox">
                <label class="class_text_options_services_step3 form-check-label" for="custom-check-6">Cámaras de seguridad</label>
                <img class="class_img_services_step3_img1" src="{{ URL::asset('icons/proteger-1.svg') }}">
                </div>
            </div>
        </div>
        <h5>Imagenes</h5>
        <div class="row img-div"
            style="margin: 25px;
            border: 1px solid;
            padding: 15px;
            text-align: center;
            border-radius: 20px;
            border-color: #9E9FA4;">
            <div class="col">
               <img src="{{asset('img/photo/parking_1/photo_1.jpg')}}" alt="" height="200px" width="200px">
            </div>
            <div class="col">
                <img src="{{asset('img/photo/parking_1/photo_2.jpg')}}" alt="" height="200px" width="200px">
            </div>
            <div class="col">
                <img src="{{asset('img/photo/parking_1/photo_3.jpg')}}" alt="" height="200px" width="200px">
            </div>
            <div class="col">
                <img src="{{asset('img/photo/parking_1/photo_4.jpg')}}" alt="" height="200px" width="200px">
            </div>
        </div>
        <button type="submit" class="mt-6 class_login_button_modal class_input_box form-control">
            guardar
        </button>
    </div>
   </form>
</div>

<script>
    function setLargaInput() {
        document.getElementById("largaInput").value = 'Larga';
        document.getElementById("mediaInput").value = '';
        document.getElementById("cortaInput").value = '';
    }
</script>
<script>
 function setMediaInput() {
        document.getElementById("mediaInput").value = 'Media';
        document.getElementById("cortaInput").value = '';
         document.getElementById("largaInput").value = '';
    }
</script>
<script>
    function setCortaInput() {
        document.getElementById("cortaInput").value = 'Corta';
        document.getElementById("largaInput").value = '';
        document.getElementById("mediaInput").value = '';
    }
</script>

<script>

    var corta =  document.getElementById("cortaInput").value;
    var larga =  document.getElementById("largaInput").value;
    var media =  document.getElementById("mediaInput").value;
    if(corta == "Corta"){
        document.getElementById("cortabtn").classList.add('class_buttons_duration_modal_filters_active');
    }else if(larga == "Larga"){
        document.getElementById("largabtn").classList.add('class_buttons_duration_modal_filters_active');
    }else if(media == "Media"){
        document.getElementById('mediabtn').classList.add('class_buttons_duration_modal_filters_active');
    }
</script>

<script>
    var customCheck1 = document.getElementById("custom-check-1").value;
    if(customCheck1 == true){
        document.getElementById("custom-check-1").checked = true;
    }

    var customCheck2 = document.getElementById("custom-check-2").value;
    if(customCheck2 == true){
        document.getElementById("custom-check-2").checked = true;
    }

    var customCheck3 = document.getElementById("custom-check-3").value;
    if(customCheck3 == true){
        document.getElementById("custom-check-3").checked = true;
    }

    var customCheck4 = document.getElementById("custom-check-4").value;
    if(customCheck4 == true){
        document.getElementById("custom-check-4").checked = true;
    }

    var customCheck5 = document.getElementById("custom-check-5").value;
    if(customCheck5 == true){
        document.getElementById("custom-check-5").checked = true;
    }

    var customCheck6 = document.getElementById("custom-check-6").value;
    if(customCheck6 == true){
        document.getElementById("custom-check-6").checked = true;
    }
 </script>



@endsection
