
<section class="py-6 class_main_counters">
    <div class="container">
    <hr class="class_hr_counter">
      <div class="row">

        <div class="col-lg-4 position-relative">
            <p id='counter1' class="class_numbers_counter">0</p>
            <p class="mb-5 mb-lg-0 class_text_counter">
              <?php $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='text1_counter'");
              foreach ($query1 as $result_query1) { echo $result_query1->lang_es; }?></p>
        </div>


        <div class="col-lg-4 position-relative">
        <p id='counter2' class="class_numbers_counter">0</p>

            <p class="mb-5 mb-lg-0 class_text_counter"><?php $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_counter'"); foreach ($query2 as $result_query2) { echo $result_query2->lang_es; }?></p>
        </div>
        <div class="col-lg-4 position-relative">
        <p id='counter3' class="class_numbers_counter">0</p>
            <p class="mb-5 mb-lg-0 class_text_counter"><?php $query3 = DB::select("SELECT * FROM gr_texts WHERE variable='text3_counter'"); foreach ($query3 as $result_query3) { echo $result_query3->lang_es; }?></p>
        </div>

      </div>
      <hr class="class_hr_counter">

    </div>
            <!--DEFINO LA IMAGEN DEL IPHONE EN RESPONSIVE-->
<img class="class_iphone_image_mobile" src="img/iphone_image.png">
<!--FIN DE DEFINO LA IMAGEN DEL IPHONE EN RESPONSIVE-->
  </section>

<!--LLAMO A LAS DEPENDECIAS-->
<script src="{{asset('js/main_counters.js')}}"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->

<!--TEXTOS Y IPHONE-->
      <div class="py-4">
        <div class="row">
          <div class="col-md-7 class_div_izq_main_content">
          <h2 class="class_title_text_main_counter"><?php $query4 = DB::select("SELECT * FROM gr_texts WHERE variable='title_main_page'"); foreach ($query4 as $result_query4) { echo $result_query4->lang_es; }?></h2>
          <br>
          <p class="class_text_main_page"><?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_main_page'"); foreach ($query5 as $result_query5) { echo $result_query5->lang_es; }?></p>
<!--DEFINO LOS ICONOS Y TEXTOS-->
          <div class="row div_main_icons">
        <div class="col-lg-4 mb-3 mb-lg-0 text-center">
          <div class="px-0 px-lg-3">
<img width="70px" src="img/icon_busca.png">
<h3 class="h5 title_icons_main_content"><?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_title1'"); foreach ($query6 as $result_query6) { echo $result_query6->lang_es; }?></h3>
            <p class="class_text2_main_page"><?php $query9 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_text1'"); foreach ($query9 as $result_query9) { echo $result_query9->lang_es; }?></p>
          </div>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-0 text-center">
          <div class="px-0 px-lg-3">
          <img width="70px" src="img/icon_encuentra.png">
            <h3 class="h5 title_icons_main_content"><?php $query7 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_title2'"); foreach ($query7 as $result_query7) { echo $result_query7->lang_es; }?></h3>
            <p class="class_text2_main_page"><?php $query10 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_text2'"); foreach ($query10 as $result_query10) { echo $result_query10->lang_es; }?></p>
          </div>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-0 text-center">
          <div class="px-0 px-lg-3">
          <img width="70px" src="img/icon_adquiere.png">
            <h3 class="h5 title_icons_main_content"><?php $query8 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_title3'"); foreach ($query8 as $result_query8) { echo $result_query8->lang_es; }?></h3>
            <p class="class_text2_main_page"><?php $query11 = DB::select("SELECT * FROM gr_texts WHERE variable='main_icons_text3'"); foreach ($query11 as $result_query11) { echo $result_query11->lang_es; }?></p>
          </div>
        </div>
      </div>
<!--FIN DE DEFINO LOS ICONOS Y TEXTOS-->
            </div>
          <div class="col-md-4 class_div_iphone_image">
           <img class="class_iphone_image_desktop" src="img/iphone_image.png">
          </div>
        </div>
      </div>
<!--FIN DE LOS TEXTOS Y DEL IPHONE-->

