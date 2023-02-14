

<!--LLAMO A LAS DEPENDECIAS-->
<script src="{{asset("js/select_vehicle.js")}}"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->



  <section class="d-flex align-items-center dark-overlay bg-cover" style="background-image: url(img/photo/barcelona_plan_cerda.jpg);">
      <div class="container py-6 py-lg-7 text-white overlay-content text-center">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <!--<h1 class="display-3 fw-bold text-shadow">Encuentra tu parking más cercano.</h1>-->
            <p class="class_text_title_garer text-lg principal_title text-shadow"><?php
                $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='main_title'");
                foreach ($query1 as $result_query1){
                echo $result_query1->lang_es;
                };
                ?>
            </p>
            <br>
          </div>
        </div>
      </div>
    </section>

<div class="search-bar mt-5 p-3 p-lg-1 ps-lg-4">
              <form action="{{ route('apply.filter') }}" method="post">
                @csrf
                @method('post')
              <div class="row row_search_form">
                    <div class="col-lg-4 d-flex align-items-center form-group input-label-absolute input-label-absolute-right location_bar">
                        <input name="location" id="id_input_location" class="form-control border-0 shadow-0" type="text" placeholder="<?php
                        $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='button_selector_ubi'");
                        foreach ($query5 as $result_query5){
                        echo $result_query5->lang_es;
                        };
                        ?>" autocomplete="off"  autofocus required
                        >
          {{-- <span class="class_icon_search_ubi_filter class_input_box label-absolute nav_search_icon class_icon_location class_icon_location_filter_results"><i class="fa fa-map-marker-alt"></i></span> --}}
                     <span class="nav_search_icon class_icon_location"><i class="fa fa-map-marker-alt"></i></span>
                    </div>

                  <div class="duration_bar col-lg-3 d-flex align-items-center form-group">

            <select class="selectpicker" data-style="btn-form-control button_duration_selector" name="duration">
                <option value="Larga">
                <?php
                $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='duration_selector_option3'");
                foreach ($query2 as $result_query2){
                echo $result_query2->lang_es;
                };
                ?>
                </option>
                <option value="Media">
                    <?php
                    $query3 = DB::select("SELECT * FROM gr_texts WHERE variable='duration_selector_option2'");
                    foreach ($query3 as $result_query3){
                    echo $result_query3->lang_es;
                    };
                    ?>
                    </option>
                    <option value="Corta">
                    <?php
                    $query4 = DB::select("SELECT * FROM gr_texts WHERE variable='duration_selector_option1'");
                    foreach ($query4 as $result_query4){
                    echo $result_query4->lang_es;
                    };
                    ?>
                </option>

            </select>

        </div>
        <div class="select_vehicle_bar col-lg-3 d-flex align-items-center form-group">

              <select class="selectpicker" data-style="btn-form-control button_duration_selector" name="vahical_type">
              <option value="">
              <?php
                $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='option1_selector_vehicle'");
                foreach ($query6 as $result_query6){
                echo $result_query6->lang_es;
                };
                ?>

            </option>
              <option value="">
              <?php
                $query7 = DB::select("SELECT * FROM gr_texts WHERE variable='option2_selector_vehicle'");
                foreach ($query7 as $result_query7){
                echo $result_query7->lang_es;
                };
                ?>
              </option>
             </select>
              </div>
               <div class="col-lg-2 d-grid">
                 <a style="cursor:pointer;">

                 <img class="class_img_car_main_head" id="icon_car" src="img/car_on.png" name="change_car" onMousedown="cambia_imagen_coche()">
                 <input type="hidden" name="vahical_type1" id="car" value="">
                </a>
                <a style="cursor:pointer;">
                 <img class="class_img_motorbike_main_head" id="icon_motorbike" src="img/motorbike_off.png" name="change_motorbike" onMousedown="cambia_imagen_moto()">
                 <input type="hidden" name="vahical_type2" id="bike" value="">
                </a>
                  </div>
                <!--BOTÓN SUBMIT PARA DESKTOP-->
                  <div class="div_search_icon_button d-grid">
                    <button class="style_button_search class_input_box search_icon_button btn rounded-pill h-100" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                 </div>
   <!--FIN DEL BOTÓN SUBMIT PARA DESKTOP-->

   <!--BOTÓN SUBMIT PARA RESPONSIVE-->

   <div class="d-grid">
        <button class="btn rounded-pill h-100 class_input_box class_search_responsive" type="submit">
        <?php
        $query8 = DB::select("SELECT * FROM gr_texts WHERE variable='button_search_responsive'");
        foreach ($query8 as $result_query8){
        echo $result_query8->lang_es;
        };
        ?>
                    </button>
                  </div>


   <!--FIN DEL BOTÓN SUBMIT PARA RESPONSIVE-->



                </div>
              </form>
            </div>

