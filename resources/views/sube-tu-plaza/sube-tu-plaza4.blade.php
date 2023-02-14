<!DOCTYPE html>
<html lang="en">
 @include('partials.head')
  <body>
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif

<style>
.class_text_page4_upload_parking{
  color: #2A6092 !important;
  font-size: 28px;
  margin-bottom: 2em;
}
.class_container_text_step4_upload_parking{
  text-align: center;
  margin-top: -2em;
}
</style>





    <div class="progress rounded-0 sticky-top class_progress_bar_upload_parking_page1">
      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
      <section class="py-5">

        @include('partials.modals.salir')

          <div class="container class_container_content_step3">
          <div class="row class_content_page3_upload_parking">
            <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>
            <div class="col-lg-6">
              <div class="text-block class_container_text_step4_upload_parking">

<a class="class_text_page4_upload_parking">¿Dónde se encuentra tu plaza de parking?</a>

                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18340.920581183786!2d2.142551791447738!3d41.39073425273921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelona!5e0!3m2!1ses!2ses!4v1658679716543!5m2!1ses!2ses"
                        width="350"
                        height="350"
                        frameborder="0"
                        style="border:0" allowfullscreen></iframe>
              </div>
            </div>

            <div class="col-lg-6 ps-xl-5">
                <form action="{{route('postSubeTuPlaza4')}}"
                   style="padding: 30px;
                          margin-top: 50px;" method="post">
                    @csrf
                    @method('post')
                          {{-- {{$parkingSpace}} --}}
                    @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- <form action="{{route('postSubeTuPlaza4')}}" method="post">
                        @csrf
                        @method('post') --}}

                    {{-- {{$parkingSpace}} --}}

                    {{-- <input type="hidden" name="id" value="{{$parkingSpace['id']}}"> --}}

                    {{-- <input type="text"  class="class_input_content_modal_login form-control class_input_box" placeholder="Ciudad" name="ciudad" value="{{$parkingSpace->ciudad ?? ""}}"> --}}
                    <input name="ciudad" id="id_input_location" class="class_input_content_modal_login form-control class_input_box" type="text" placeholder="es street" autocomplete="off"  autofocus value="{{$parkingSpace->ciudad ?? ""}}">
                    <input name="es_zone" id="id_input_location" class="class_input_content_modal_login form-control class_input_box" type="text" placeholder="es zone" autocomplete="off"  autofocus value="{{$parkingSpace->es_zone ?? ""}}">
                    {{-- <span class="nav_search_icon class_icon_location"><i class="fa fa-map-marker-alt"></i></span> --}}
                    {{-- <input type="text" class="class_input_content_modal_login form-control class_input_box" placeholder="Dirección" name="direccion" value="{{$parkingSpace->direccion ?? ""}}"> --}}

                      <div class="class_row_responsive row">
                          <div class="col-md-6">
                              <input type="text" class="class_input_content_modal_login form-control class_input_box" placeholder="Planta" name="planta" value="{{$parkingSpace->planta ?? '' }}">
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="class_input_content_modal_login_lastname form-control class_input_box" placeholder="Nº plaza" name="n_plaza" value = "{{$parkingSpace->n_plaza ?? ""}}">
                          </div>
                      </div>
                    <input type="text"  class="class_input_content_modal_login form-control class_input_box" placeholder="Código postal" name="codigo_postel" value="{{$parkingSpace->codigo_postel ?? ""}}">
                    <textarea name="direccion" class="class_input_content_modal_login form-control class_input_box" rows="3" placeholder="Description">{{$parkingSpace->direccion ?? ''}}</textarea>

                {{-- </form> --}}




                        <div class="mt-2" style="margin-left: 30px;
                        margin-right: 30px;
                        background-color: cornflowerblue;
                        padding: 15px;
                        border: 1px solid;
                        border-radius: 12px;">
                            <strong>
                                garer ¿Dónde se encuentra tu plaza de parking? Ciudad Dirección Planta Nº plaza Código postal Te recordamos que la dirección de la plaza será visible en tu anuncio hasta que un inquilino haga una solicitud y sea aceptada por tu parte.Atrás Siguiente
                            </strong>
                        </div>

                        </div>
                        </div>
            </div>
            <div class="class_div_footer_upload_parking_space">
            <hr class="class_hr_upload_parking_step1">
            <div class="class_button_next_upload_parking class_container_button_upload_parking_step1">
               <a href="{{ url('/sube-tu-plaza3')  }}" class="class_buttons_steps_upload_parking_goback"><i class="fa-chevron-left fa ms-2"></i>&nbsp;&nbsp;Atrás</a>
               <button type="submit" style="margin-right:30pc;" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>

            </div>
        </form>
         </div>
    </div>
</div>


    </section>
    <!-- JavaScript files-->
    @include('partials.new-scripts')
  </body>
</html>
