
<?php
 use Illuminate\Support\Facades\DB;
?>
<link href="{{asset("css/slider_prices_filters.css")}}" rel="stylesheet">

<style>
.test {
  background-color: yellow;
}

</style>

<div class="modal fade" id="modal_filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document" style="margin-top: 150px;">
    <div class="modal-content class_modal_filters">
      <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
      <div class="modal-body class_filters_modal_body">
       <div class="container filter-section">
            <div class="col-md-4 class_column_options_modal_filters">
                    <div>
                    <a class="class_title_filter_modal_filters">Filtros</a>
                    </div>
                    <div>
                    <a id="id_select_filters_option1" href="#vehicletype" class="class_options_modal_filters_box_o1 class_options_modal_filters_box_selected">
                        <span class="class_options_modal_filters_text">
                        <img class="class_type_vehicle_filters" src="img/car.png" />Tipo de vehículo
                        </span>
                    </a>
                    </div>
                    <div>
                    <a id="id_select_filters_option2" href="#monthlyprice" class="class_options_modal_filters_box_o2">
                        <span class="class_options_modal_filters_text">
                        <img class="class_type_vehicle_filters" src="img/money.png" />Precio mensual
                        </span>
                    </a>
                    </div>
                    <div>
                    <a id="id_select_filters_option3" href="#duration" class="class_options_modal_filters_box_o3">
                        <span class="class_options_modal_filters_text">
                        <img class="class_type_vehicle_filters" src="img/calendar.png" />Duración
                        </span>
                    </a>
                    </div>
                    <div>
                    <a id="id_select_filters_option4" href="#services" class="class_options_modal_filters_box_o4">
                        <span class="class_options_modal_filters_text">
                        <img class="class_type_vehicle_filters" src="img/plus.png" />Servicios
                        </span>
                    </a>
                    </div>



                    <div class="class_clean_filters_modal_filters" onclick="clearFilter()">
                        <a  class="class_options_modal_filters_text class_clean_filters_text_modal" href="#">Limpiar filtros</a>
                    </div>
            </div>
            <form action="{{route('apply.filter')}}" method="post">
              @csrf
              @method('post')
            <div class="col-md-8 class_results_modal_filters">

                  {{-- @method("") --}}
                <div>
                    <a id="vehicletype" class="class_texts_options_filter_modal">Tipo de vehículo</a>
                    <div class="class_icons_modal_filters">

                        <a style="cursor:pointer;">
                            <img class="class_icon_car_filter_modal" id="icon_car_filters" src="img/car_off.png" name="change_car" onMousedown="cambia_imagen_coche()">
                            <input type="hidden" name="vahical1" id="car" value="">
                        </a>
                        <a style="cursor:pointer;">
                            <img class="class_icon_motorbike_filter_modal" id="icon_motorbike_filters" src="img/motorbike_off.png" name="change_motorbike" onMousedown="cambia_imagen_moto()">
                            <input type="hidden" name="vahical2" id="bike" value="">
                        </a>

                    </div>
                </div>
                <div class="class_section_price_filter_modal" style="align-items: center">
                <a id="monthlyprice" class="class_texts_options_filter_modal">Precio mensual</a>
                    <div class="slider-control-section">
                        <div class="range_container">
                            <div class="sliders_control">
                                <div class="class_circle1_range_slider_price"></div>
                                <a href="#" class="class_button_price1_filter_modal_design1">
                                    <input name='startValue' type="number" id="fromInput" value="0" min="0" max="150"/>€
                                </a>
                                <input id="fromSlider" type="range" value="0" min="0" max="150"/>
                                <input id="toSlider" type="range" value="150" min="0" max="150"/>
                                <a href="#" class="class_button_price2_filter_modal_design2">
                                    <input name="endValue" type="number" id="toInput" value="150" min="0" max="150"/>€
                                </a>
                                <div class="class_circle2_range_slider_price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class_section_duration_filters_modal">
                    <a id="duration" class="class_texts_options_filter_modal">Duración</a>
                    <div class="row-button-section class_section_content_duration_filters_modal">
                    <div class="filter-btn function_buttons_selector_duration_filters_modal">
                        <button onclick="setCortaInput()" type="button" class="class_buttons_duration_modal_filters">Corta <br> 1 - 6 meses </button>
                        <input id="cortaInput" type="hidden" name ="duration1"  value=>
                    </div>
                    <div class="filter-btn function_buttons_selector_duration_filters_modal">
                        <button onclick="setMediaInput()" type="button" class="class_buttons_duration_modal_filters">Media <br> 6-12 meses</button>
                        <input id="mediaInput" type="hidden" name ="duration2"  value=>
                    </div>
                    <div class="filter-btn function_buttons_selector_duration_filters_modal">
                        <button onclick="setLargaInput()" type="button" class="class_buttons_duration_modal_filters">Larga <br> + 12 meses</button>
                        <input id="largaInput" type="hidden" name ="duration3"  value=>
                    </div>
                    </div>
                </div>

                <div class="class_section_services_filters_modal">
                    <a id="services" class="class_texts_options_filter_modal">Servicios</a>
                    <div class="class_form_check_services_filter_modal">
                        <div class="text-block">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="class_form_check_services_filters">
                                    <input name="disabled_access" class="form-check-input" id="custom-check-1" type="checkbox">
                                    <label class="form-check-label" for="custom-check-1">Acceso minusválido</label>
                                    </div>
                                    <div class="class_form_check_services_filters">
                                    <input name="security_personnel" class="form-check-input" id="custom-check-2" type="checkbox">
                                    <label class="form-check-label" for="custom-check-2">Personal de seguridad</label>
                                    </div>
                                    <div class="class_form_check_services_filters">
                                    <input name="gate_electric_charger" class="form-check-input" id="custom-check-3" type="checkbox">
                                    <label class="form-check-label" for="custom-check-3">Cargador eléctrico</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                <div class="class_form_check_services_filters">
                                    <input name="housekeeping" class="form-check-input" id="custom-check-4" type="checkbox">
                                    <label class="form-check-label" for="custom-check-4">Servicio de limpieza</label>
                                    </div>
                                    <div class="class_form_check_services_filters">
                                    <input name="automatic_door" class="form-check-input" id="custom-check-5" type="checkbox">
                                    <label class="form-check-label" for="custom-check-5">Puerta automática</label>
                                    </div>
                                    <div class="class_form_check_services_filters">
                                    <input name ="security_cameras" class="form-check-input" id="custom-check-6" type="checkbox">
                                    <label class="form-check-label" for="custom-check-6">Cámaras de seguridad</label>
                                    </div>
                                </div>
                        </div>
                        </div>
                </div>

                </div>

            </div>
<!--SEARCH BUTTON FOR DESKTOP-->
             {{-- <input class="class_button_buscar_filtros_modal class_input_box form-control" type="button" value="Buscar"> --}}
             <button class="class_button_buscar_filtros_modal class_input_box form-control" type="submit">Buscar</button>

<!--END OF SEARCH BUTTON FOR DESKTOP-->
        </div>
       <!--SEARCH BUTTON FOR RESPONSIVE-->
        <div class="d-grid">
            <button class="btn rounded-pill h-100 class_input_box class_search_responsive class_search_button_filters_responsive" type="submit">
            Buscar </button>
        </div>
    </form>
<!--END OF THE SEARCH BUTTON FOR RESPONSIVE-->
    </div>
   </div>
  </div>
</div>

<!--LLAMO A LAS DEPENDECIAS-->
<script src="{{asset("js/slider_prices_filters.js")}}"></script>
<script src="{{asset("js/selector_duration_filters.js")}}"></script>
<script src="{{asset("js/select_vehicle.js")}}"></script>
<script src="{{asset("js/select_filters_active_tab.js")}}"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->
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
    function clearFilter()
    {
       document.getElementById("car").value = '';
       document.getElementById("bike").value = '';
       document.getElementById("cortaInput").value = '';
       document.getElementById("largaInput").value = '';
       document.getElementById("mediaInput").value = '';
       document.getElementById("custom-check-1").checked = false;
       document.getElementById("custom-check-2").checked = false;
       document.getElementById("custom-check-3").checked = false;
       document.getElementById("custom-check-4").checked = false;
       document.getElementById("custom-check-5").checked = false;
       document.getElementById("custom-check-6").checked = false;
    }
</script>

