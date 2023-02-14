<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
  <body>
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
    <div class="progress rounded-0 sticky-top class_progress_bar_upload_parking_page1">
      <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
      <section class="py-5">

        @include('partials.modals.salir')

          <div class="container class_container_content_step3">
          <div class="row class_content_page3_upload_parking">
            <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>

              <div class="col-lg-4 class_text_title_upload_parking_step3">

            <div class="text-block">
                <a class="class_text_page1_upload_parking">¿Qué servicios adicionales tiene tu parking?</a>
            </div>
            </div>
            <div class="col-lg-8 ps-xl-5 class_content_upload_parking_step3">
                <div class="text-block mt-4">
                 <form action="{{route('postSubeTuPlaza3')}}" method="post">
                   @csrf
                   @method('post')
                   {{-- {{$parkingSpace}} --}}
                 {{-- <input type="hidden" name="id" value="{{$parkingSpace->id}}"> --}}
                <a class="class_subtitle_upload_parking_step3">Selecciona si tu plaza de parking tiene algún extra</a>
                    <div class="row">
                    <div class="col-sm">
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
                      <div class="col-sm">
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
                  </div>
            </div>
            </div>
            </div>
            <div class="class_div_footer_upload_parking_space">
            <hr class="class_hr_upload_parking_step1">
            <div class="class_button_next_upload_parking class_container_button_upload_parking_step1">
            <a href="{{ url('/sube-tu-plaza2')  }}" class="class_buttons_steps_upload_parking_goback"><i class="fa-chevron-left fa ms-2"></i>&nbsp;&nbsp;Atrás</a>
            <button type="submit" style="margin-right:30pc;" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
            </div>
        </form>
    </div>


          </div>
        </div>
    </section>




    <!-- JavaScript files-->
     @include('partials.new-scripts')
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
  </body>
</html>
