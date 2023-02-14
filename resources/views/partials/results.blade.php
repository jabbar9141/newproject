
@include('partials.sub_header_filters')
@include('partials.modals.3d_video_ad')
<!--DEFINO LA BARRA SUPERIOR EMBEDIDA EN LOS RESULTS-->
<div class="container-fluid">
      <div class="row">
        <div id="id_class_hide_map" class="class_content_results col-lg-7 py-4 p-xl-5">
        <br><br>
          <div class="class_texts_results d-flex justify-content-between align-items-center flex-md-row mb-1">
            <div class="me-3">
              <p class="class_text_searched_results">{{$allParkingSpaces->count()}} {{$allParkingSpaces->count() > 1 ? "Plazas" : "Plaza" }}</p>
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
       {{-- {{$allParkingSpaces}} --}}
       @foreach ($allParkingSpaces as $parkingSpace)
            <!-- place item-->
            <div id="id_class_result_hide_map" class="col-sm-6 mb-5" data-marker-id="59c0c8e33b1527bfe2abaf92">
              <div class="card class_card_on_hover h-100 border-0 shadow parking-lot-container">
                <div class="card-img-top overflow-hidden gradient-overlay"></div>


        <!--SLIDER-->
           <a target="_blank" href="{{ route('parking-lot',$parkingSpace->id) }}" >
                <!-- Slider main container -->
                <div class="swiper parking-lot">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img class="class_img_result_ad img-fluid" src="<?php $query3 = DB::select("SELECT * FROM gr_configs WHERE variable='path_photo'"); foreach ($query3 as $result_query3) { echo $result_query3->value; }?>parking_1/photo_4.jpg" />
                        </div>
                        
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </a>
                <!--FIN DEL SLIDER-->



            <div class="class_position_price_tab text-end">
                <a class="class_price_post card-fav-icon position-relative z-index-40">
                    <div class="class_text_price_post">
                        {{ $parkingSpace->price }}€ /<?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text_month'");
                                foreach ($query5 as $result_query5)
                                { echo $result_query5->lang_es; }?>
                    </div>
                </a>
            </div>
            <div class="card-img-overlay-bottom z-index-20 class_image_people_photo_garage">
                <div class="d-flex text-white text-sm align-items-center div_class_photo_user_mov">

                    <img class="avatar avatar-border-white flex-shrink-0 me-2"
                            src="/img/avatar/{{$parkingSpace->user->avatar}}"/>
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

                       <a target="_blank" href="{{ route('parking-lot',$parkingSpace->id) }}" class="class_location_result_ad">{{ $parkingSpace->es_street . ',' . $parkingSpace->es_zone }}</a>
                       <br>
                       <a class="class_text_description_result">{{(Str::length($parkingSpace->es_description) > 50) ? Str::substr($parkingSpace->es_description, 0,90).'...':$parkingSpace->es_description}}</a>
                       <br>
                    </div>
                 </div>

                @if (Auth::check())
                 {{-- @if (count($parkingSpace->favorite) != 0) --}}
                 @foreach ($parkingSpace->favorite as $fav)
                     @if ($fav->deleted_at == null && $fav->gr_parking_space_id == $parkingSpace->id && $fav->user_id == Auth::user()->id)
                     {{-- <p>first</p> --}}
                     <a href="{{route('favorite',$parkingSpace->id)}}" class="class_icons_like_link" >
                         <img class="class_icons_like" src="{{asset('img/icons8-heart-suit-48.png')}}">
                     </a>
                     @endif
                 @endforeach
                    @if(count($favs) != 0)
                        @foreach ($favs as $fa)
                        @if ($fa->deleted_at != null && $fa->user_id == auth()->user()->id && $fa->gr_parking_space_id == $parkingSpace->id)
                            {{-- <p>four</p> --}}
                            <a href="{{route('favorite',$parkingSpace->id)}}" class="class_icons_like_link" >
                                <img class="class_icons_like"  src="{{asset('img/like_no.png')}}">
                            </a>
                        @endif
                        @endforeach
                    @endif
                 {{-- @else
                     @if (count($parkingSpace->favorite) == 0 )
                         <p>third</p>
                         <a href="{{route('favorite',$parkingSpace->id)}}" class="class_icons_like_link" >
                             <img class="class_icons_like"  src="{{asset('img/like_no.png')}}">
                         </a>
                     @endif --}}
                 {{-- @endif --}}

                 @php
                 $result = DB::table('favorites')
                          ->where('gr_parking_space_id',$parkingSpace->id)
                          ->where('user_id',Auth::user()->id)
                          ->get()
                @endphp
                @if(count($result) == 0)
                <a href="{{route('favorite',$parkingSpace->id)}}" class="class_icons_like_link" >
                    <img class="class_icons_like"  src="{{asset('img/like_no.png')}}">
                </a>
                @endif
            @else
             <a href="{{route('favorite',$parkingSpace->id)}}" class="class_icons_like_link" >
                 <img class="class_icons_like"  src="{{asset('img/like_no.png')}}">
             </a>
            @endif


                </div>
            </div>
    </div>

    @endforeach
    {{-- {{$favs}} --}}
     <!--FIN DE DEFINO EL ANUNCIO-->
           {!!$allParkingSpaces->links('pagination::bootstrap-4')!!}
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
