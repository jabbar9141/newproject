<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
  @include('partials.head')

  <body>
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
    <div class="progress rounded-0 sticky-top class_progress_bar_upload_parking_page1">
        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

        <div class="container">

            @include('partials.modals.salir')

        <div class="class_content_page1_upload_parking row">

            <div class="class_text_container_upload_page1 col-lg-6">
                    <div class="class_container_left_title_text_upload_step5">
                        <a class="class_text_page1_upload_parking">Elige la duración del alquiler de tu plaza de parking</a>
                    </div>
                    <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>


                    <div class="class_container_title_text_upload_step5">

                                        Recuerda establecer la franja en la que tu plaza puede estar alquilada, después el inquilino elegirá entre esos meses.

</div>
            </div>
             <div class="col-lg-6 ps-xl-5 class_content_upload_parking_step6">
    <div class="class_icons_modal_filters">

    <form action="{{route('postSubeTuPlaza5')}}" method="post">
                        @csrf
                        @method('post')
                        @if ($errors->any())
                            <div class="class_error_texts_upload_parking class_error_texts_upoader_page2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->get('msg'))
                            <div class="class_error_texts_upload_parking">
                                <span>
                                    <b> {{ session()->get('msg') }}</b>
                                </span>
                            </div>
                        @endif
                            {{-- <p>{{$parkingSpace->planta}}<p> --}}
                            {{-- <input type="hidden" name="id" value="{{$parkingSpace['id']}}"> --}}
                            <input id="durationInput" type="hidden" name ="duration"  value="{{$parkingSpace->duration ?? ''}}">

                                <ul class="list-unstyled text-muted">
                                  <li class="mb-2">

                                  <div class="filter-btn function_buttons_selector_duration_filters_modal">
                                    <a class="text-muted class_text_options_duration_filters_step5">Corta</a>
                                    <button id="cortabtn"  onclick="setCortaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_corta_upload_parking_step5">3 - 6 meses</button>
                                    {{-- <input id="cortaInput" type="hidden" name ="duration1"  value="{{$parkingSpace->duration ?? ''}}"> --}}
                                  </div>
                                  </li>

                                  <li class="mb-2">
                                     <div class="filter-btn function_buttons_selector_duration_filters_modal">
                                     <a class="text-muted class_text_options_duration_filters_step5">Media</a>
                                     <button id="mediabtn"  onclick="setMediaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_media_upload_parking_step5">6 - 12 meses</button>
                                     {{-- <input id="mediaInput" type="hidden" name ="duration2"  value="{{$pakingSpace->duration ?? ''}}"> --}}
                                  </div>
                                  </li>

                                  <li class="mb-2">
                                  <div class="filter-btn function_buttons_selector_duration_filters_modal">
                                      <a class="text-muted class_text_options_duration_filters_step5">Larga</a>
                                      <button id="largabtn" onclick="setLargaInput()" type="button" class="class_buttons_duration_modal_filters class_filter_larga_upload_parking_step5">+ 12 meses</button>
                                      {{-- <input id="largaInput" type="hidden" name ="duration3"  value="{{$parkingSpace->duration ?? ''}}"> --}}
                                  </div>
                                  </li>
                                </ul>

                </div>
                </div>
                </div>
             </div>
             </div>
            </div>
            </div>
            <div class="class_div_footer_upload_parking_space">
            <hr class="class_hr_upload_parking_step1">
            <div class="class_button_next_upload_parking class_container_button_upload_parking_step1">
                {{-- <button type="submit" class="btn">
                <a  class="class_buttons_steps_upload_parking_next">
                    Siguiente<i class="fa-chevron-right fa ms-2"></i>
                </a>
               </button> --}}
               <a href="{{route('getSubeTuPlaza4')}}" class="class_buttons_steps_upload_parking_goback"><i class="fa-chevron-left fa ms-2"></i>&nbsp;&nbsp;Atrás</a>
                <button type="submit" style="margin-right:30pc;" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
            </div>
          </form>


    <!-- JavaScript files-->
      @include('partials.new-scripts')

    {{-- Script --}}
    <!--LLAMO A LAS DEPENDECIAS-->
<script src="{{asset("js/selector_duration_filters.js")}}"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->
    <script>
        function setLargaInput() {
            document.getElementById("durationInput").value = 'Larga';
            // document.getElementById("mediaInput").value = '';
            // document.getElementById("cortaInput").value = '';
        }
    </script>
    <script>
     function setMediaInput() {
            document.getElementById("durationInput").value = 'Media';
            // document.getElementById("cortaInput").value = '';
            //  document.getElementById("largaInput").value = '';
        }
    </script>
    <script>
        function setCortaInput() {
            document.getElementById("durationInput").value = 'Corta';
            // document.getElementById("largaInput").value = '';
            // document.getElementById("mediaInput").value = '';
        }
    </script>

   <script>

    var duration =  document.getElementById("durationInput").value;
    // var larga =  document.getElementById("largaInput").value;
    // var media =  document.getElementById("mediaInput").value;
    if(duration == "Corta"){
        document.getElementById("cortabtn").classList.add('class_buttons_duration_modal_filters_active');
    }else if(duration == "Larga"){
        document.getElementById("largabtn").classList.add('class_buttons_duration_modal_filters_active');
    }else if(duration == "Media"){
        document.getElementById('mediabtn').classList.add('class_buttons_duration_modal_filters_active');
    }
   </script>
  </body>
</html>
