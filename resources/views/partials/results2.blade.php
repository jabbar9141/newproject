
@include('partials.sub_header_filters')
@include('partials.modals.3d_video_ad')
<!--DEFINO LA BARRA SUPERIOR EMBEDIDA EN LOS RESULTS-->
<div class="container-fluid">
      <div class="row">
        <div id="id_class_hide_map" class="class_content_results col-lg-7 py-4 p-xl-5">
        <br><br>
          <div class="class_texts_results d-flex justify-content-between align-items-center flex-md-row mb-1">
            <div class="me-3">
              <p class="class_text_searched_results">95 <?php $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='text1_results'"); foreach ($query1 as $result_query1) { echo $result_query1->lang_es; }?></p>
            </div>
            <div class="div_text_title_searcher_order">
             <h6 class="class_text_searched_results mb-3">
                <div class="dropdown bootstrap-select">
                        <select class="class_text_downdrop_filter selectpicker" data-style="btn-form-control button_duration_selector" tabindex="null">
                            <option value="#">
                            <?php $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_results'"); foreach ($query2 as $result_query2) { echo $result_query2->lang_es; }?>
                            </option>
                            <option value="#">
                            <?php $query9 = DB::select("SELECT * FROM gr_texts WHERE variable='text3_results'"); foreach ($query9 as $result_query9) { echo $result_query9->lang_es; }?>
                            </option>
                            <option value="#">
                            <?php $query10 = DB::select("SELECT * FROM gr_texts WHERE variable='text4_results'"); foreach ($query10 as $result_query10) { echo $result_query10->lang_es; }?>
                            </option>
                        </select>
                </div>
             </h6>
            </div>
         </div>
          <div class="row class_container_ads">
  <!--FIN DE DEFINO LA BARRA SUPERIOR EMBEDIDA EN LOS RESULTS-->
  <!--DEFINO EL ANUNCIO-->
            <!-- place item-->
            <div id="id_class_result_hide_map" class="col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
              <div class="card class_card_on_hover h-100 border-0 shadow">
                <div class="card-img-top overflow-hidden gradient-overlay">

            </div>

        @foreach ($allParkingSpaces as $parkingSpace)
                <!--SLIDER-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="class_carousel_indicators carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner card-img-top" role="listbox">
                        <div class="carousel-item active">
                        <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_1.jpg" />
                        </div>
                        <div class="carousel-item">
                        <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_2.jpg" />
                        </div>
                        <div class="carousel-item">
                        <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_3.jpg" />
                        </div>
                        <div class="carousel-item">
                        <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_4.jpg" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--FIN DEL SLIDER-->



            <div class="class_position_price_tab text-end">
                <a class="class_price_post card-fav-icon position-relative z-index-40">
                    <div class="class_text_price_post">
                        {{ $parkingSpace->price }} /
                        <?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_month'");
                                foreach ($query5 as $result_query5)
                                { echo $result_query5->lang_es; }?>
                    </div>
                </a>
            </div>
            <div class="card-img-overlay-bottom z-index-20 class_image_people_photo_garage">
                <div class="d-flex text-white text-sm align-items-center div_class_photo_user_mov">
                          <img class="avatar avatar-border-white flex-shrink-0 me-2"
                            src="<?php $query4 = DB::select("SELECT * FROM gr_configs WHERE variable='path_avatar'");
                            foreach ($query4 as $result_query4)
                            { echo $result_query4->value; }?>photo_nasser.jpeg"/>
                          <img class="class_icon_check" src="icons/check.png">
                </div>
            </div>
            <div class="card-body d-flex align-items-center class_div_info_post">
                <div class="w-100">
                    <div>
                       <img class="class_icon_location_results" src="icons/location.png">
                          <a class="class_text_distancia_ad">1,5km</a>
                       <img class="class_icon_video" src="icons/video.png">
                          <a href="#" data-toggle="modal" data-target="#3d_video_ad" class="class_video_result_ad">
                            <?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='text_2d_video'");
                            foreach ($query6 as $result_query6)
                            { echo $result_query6->lang_es; }?>
                          </a>
                       <br>
                       <a class="class_location_result_ad">{{ $parkingSpace->es_street . ',' . $parkingSpace->es_zone }}</a>
                       <br>
                       <a class="class_text_description_result">{{$parkingSpace->es_description}}</a>
                       <br>
                    </div>
                 </div>
                    <a href="#" class="class_icons_like_link" data-bs-toggle="modal" data-bs-target="#modal_login">
                        <img class="class_icons_like" src="img/like_no.png">
                    </a>
              <!--<img class="class_icons_like" src="img/like_yes.png">-->
                </div>
            </div>
        @endforeach



    </div>
     <!--FIN DE DEFINO EL ANUNCIO-->

<!--DEFINO EL ANUNCIO-->
            <!-- place item-->
            <div id="id_class_result_hide_map" class="col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
              <div class="card class_card_on_hover h-100 border-0 shadow">
                <div class="card-img-top overflow-hidden gradient-overlay">
                <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>plaza124.jpg" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="#"></a>
             <!-- <i class="class_left_angle_post fa fa-angle-left"></i>  -->
              <!-- <i class="class_right_angle_post fa fa-angle-right"></i> -->
              </div>
                  <div class="class_position_price_tab text-end"><a class="class_price_post card-fav-icon position-relative z-index-40">
                  <div class="class_text_price_post">105€ / <?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_month'"); foreach ($query5 as $result_query5) { echo $result_query5->lang_es; }?></div>
                  </a>
                      </div>
                      <div class="card-img-overlay-bottom z-index-20 class_image_people_photo_garage">
                    <div class="d-flex text-white text-sm align-items-center div_class_photo_user_mov"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="<?php $query4 = DB::select("SELECT * FROM gr_configs WHERE variable='path_avatar'"); foreach ($query4 as $result_query4) { echo $result_query4->value; }?>photo_fer.jpeg"/>
                    <img class="class_icon_check" src="icons/check.png">
                  </div>
                </div>
                <div class="card-body d-flex align-items-center class_div_info_post">
                  <div class="w-100">
                   <div>
                   <img class="class_icon_location_results" src="icons/location.png"><a class="class_text_distancia_ad">1,5km</a>
                   <img class="class_icon_video" src="icons/video.png"><a class="class_video_result_ad"><?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='text_2d_video'"); foreach ($query6 as $result_query6) { echo $result_query6->lang_es; }?></a>
                   <br>
                   <a class="class_location_result_ad">Carrer del Camp, Sant Gervasi</a>
                   <br>
                   <a class="class_text_description_result">Plaza de parking ubicada en el barrio de Sant Gervasi...</a>
                   <br>
                </div>
                  </div>
                  <a href="#" class="class_icons_like_link" data-bs-toggle="modal" data-bs-target="#modal_login"> <img class="class_icons_like" src="img/like_no.png"></a>
          <!--<img class="class_icons_like" src="img/like_yes.png">-->
                </div>
              </div>
            </div>
     <!--FIN DE DEFINO EL ANUNCIO-->
<!--DEFINO EL ANUNCIO-->
            <!-- place item-->
        <div id="id_class_result_hide_map" class="col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
         <div class="card class_card_on_hover h-100 border-0 shadow">
                <div class="card-img-top overflow-hidden gradient-overlay">
                <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>plaza125.jpg" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="#"></a>
             <!-- <i class="class_left_angle_post fa fa-angle-left"></i>  -->
              <!-- <i class="class_right_angle_post fa fa-angle-right"></i> -->
              </div>
                  <div class="class_position_price_tab text-end"><a class="class_price_post card-fav-icon position-relative z-index-40">
                  <div class="class_text_price_post">105€ / <?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_month'"); foreach ($query5 as $result_query5) { echo $result_query5->lang_es; }?></div>
                  </a>
                      </div>
                      <div class="card-img-overlay-bottom z-index-20 class_image_people_photo_garage">
                    <div class="d-flex text-white text-sm align-items-center div_class_photo_user_mov"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="<?php $query4 = DB::select("SELECT * FROM gr_configs WHERE variable='path_avatar'"); foreach ($query4 as $result_query4) { echo $result_query4->value; }?>avatar-0.jpg"/>
                    <img class="class_icon_check" src="icons/check.png">
                  </div>
                </div>
                <div class="card-body d-flex align-items-center class_div_info_post">
                  <div class="w-100">
                   <div>
                   <img class="class_icon_location_results" src="icons/location.png"><a class="class_text_distancia_ad">1,5km</a>
                   <img class="class_icon_video" src="icons/video.png"><a class="class_video_result_ad"><?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='text_2d_video'"); foreach ($query6 as $result_query6) { echo $result_query6->lang_es; }?></a>
                   <br>
                   <a class="class_location_result_ad">Carrer del Camp, Sant Gervasi</a>
                   <br>
                   <a class="class_text_description_result">Plaza de parking ubicada en el barrio de Sant Gervasi...</a>
                   <br>
                </div>
                  </div>
                  <a href="#" class="class_icons_like_link" data-bs-toggle="modal" data-bs-target="#modal_login"> <img class="class_icons_like" src="img/like_no.png"></a>
          <!--<img class="class_icons_like" src="img/like_yes.png">-->
                </div>
              </div>
            </div>
     <!--FIN DE DEFINO EL ANUNCIO-->
<!--DEFINO EL ANUNCIO-->
            <!-- place item-->
            <div id="id_class_result_hide_map" class="col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
              <div class="card class_card_on_hover h-100 border-0 shadow">
                <div class="card-img-top overflow-hidden gradient-overlay">
                <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>plaza122.jpg" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="#"></a>
             <!-- <i class="class_left_angle_post fa fa-angle-left"></i>  -->
              <!-- <i class="class_right_angle_post fa fa-angle-right"></i> -->
              </div>
                  <div class="class_position_price_tab text-end"><a class="class_price_post card-fav-icon position-relative z-index-40">
                  <div class="class_text_price_post">105€ / <?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_month'"); foreach ($query5 as $result_query5) { echo $result_query5->lang_es; }?></div>
                  </a>
                      </div>
                      <div class="card-img-overlay-bottom z-index-20 class_image_people_photo_garage">
                    <div class="d-flex text-white text-sm align-items-center div_class_photo_user_mov"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="<?php $query4 = DB::select("SELECT * FROM gr_configs WHERE variable='path_avatar'"); foreach ($query4 as $result_query4) { echo $result_query4->value; }?>avatar-0.jpg"/>
                    <img class="class_icon_check" src="icons/check.png">
                  </div>
                </div>
                <div class="card-body d-flex align-items-center class_div_info_post">
                  <div class="w-100">
                   <div>
                   <img class="class_icon_location_results" src="icons/location.png"><a class="class_text_distancia_ad">1,5km</a>
                   <img class="class_icon_video" src="icons/video.png"><a class="class_video_result_ad"><?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='text_2d_video'"); foreach ($query6 as $result_query6) { echo $result_query6->lang_es; }?></a>
                   <br>
                   <a class="class_location_result_ad">Carrer del Camp, Sant Gervasi</a>
                   <br>
                   <a class="class_text_description_result">Plaza de parking ubicada en el barrio de Sant Gervasi...</a>
                   <br>
                </div>
                  </div>
                  <a href="#" class="class_icons_like_link" data-bs-toggle="modal" data-bs-target="#modal_login"> <img class="class_icons_like" src="img/like_no.png"></a>
          <!--<img class="class_icons_like" src="img/like_yes.png">-->
                </div>
              </div>
            </div>
     <!--FIN DE DEFINO EL ANUNCIO-->



          <!-- Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-template d-flex justify-content-center">
              <!-- <li class="page-item"><a class="page-link" href="#"> <i class="fa fa-angle-left class_color_garer"></i></a></li> -->
              <li class="page-item active"><a class="class_number_pages page-link" href="#">1</a></li>
              <li class="page-item"><a class="class_number_pages page-link" href="#">2</a></li>
              <li class="page-item"><a class="class_number_pages page-link" href="#">3</a></li>
              <li class="page-item"><a class="class_number_pages page-link" href="#"> <i class="fa fa-angle-right class_color_garer"></i></a></li>
            </ul>
          </nav>
        </div>

      </div>

      </div>
         <!-- DEFINO EL BOTÓN DEL MAPA EN RESPONSIVE -->
         <input class="class_button_display_map_responsive form-control" id="myCheckbox2" onclick="toggleCheckResponsive()" type="button" value="<?php $query7 = DB::select("SELECT * FROM gr_texts WHERE variable='text_button_show_map'"); foreach ($query7 as $result_query7) { echo $result_query7->lang_es; }?>">
         <input class="class_button_display_map_responsive class_button_display_map_responsive2 form-control" id="myCheckbox3" onclick="toggleCheckResponsive3()" type="button" value="<?php $query8 = DB::select("SELECT * FROM gr_texts WHERE variable='text_button_hide_map'"); foreach ($query8 as $result_query8) { echo $result_query8->lang_es; }?>">
     <!-- FIN DE DEFINO EL BOTÓN DEL MAPA EN RESPONSIVE -->
     <!--LLAMO A LAS DEPENDECIAS-->
<script src="{{asset('js/display_map.js')}}"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->
