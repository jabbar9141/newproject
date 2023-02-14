<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
  @include('partials.head')



<style>


@media (max-width: 991px) {
  .class_container_content_upload_step6{
    text-align: center;
}
}
@media (min-width: 991px) {
  .class_container_content_upload_step6{
  margin-top: -2.5em;
  padding-left: 14em !important;
}
}

.class_texts_options_upload_parking_step6{
  font-size: 18px;
}


@media (max-width: 991px) {
  .class_button_insert_price_upload_step6{
  border-radius: 3em;
  padding-left: 1em;
  margin-top: 0.8em;
}
}
@media (min-width: 991px) {
.class_button_insert_price_upload_step6{
  border-radius: 3em;
  width: 10em !important;
  padding-left: 1em;
  margin-top: 0.8em;
}
}
.class_text_placeholder_input_price_step6{
  font-size: 14px;
  color: #747c83 !important;
  margin-top: -2.1em !important;
  margin-left: 5.6em;
  position: absolute;
}












.class_container_content_upload_parking_step_6{
  margin-top: 0.5em;
}




</style>

  <body>
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
            <div class="progress rounded-0 sticky-top class_progress_bar_upload_parking_page1">
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

        <div class="container">

            @include('partials.modals.salir')

        <div class="class_content_page1_upload_parking row">

            <div class="class_text_container_upload_page1 col-lg-6">
                    <div class="class_container_left_title_text_upload_step5">
                        <a class="class_text_page1_upload_parking">¿Cuál es el precio mensual de la plaza de parking?</a>
                    </div>
                    <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>
            </div>
            <div class="col-lg-6 ps-xl-5 class_container_content_upload_step6">
                {{-- {{$data}} --}}
              <form action="{{route('postSubeTuPlaza6')}}" method="post">
                 @csrf
                 @method('post')
                 {{-- {{$parkingSpace->duration}} --}}
                   @if ($errors->any())
                      <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <a class="class_texts_options_upload_parking_step6">Precio</a><br>
                <input name = "precio" value="{{$parkingSpace->precio ?? ''}}" class="class_button_insert_price_upload_step6 form-control" type="text" required>
                <a class="class_text_placeholder_input_price_step6">EUR/mes</a>


                <br>
                <a class="class_texts_options_upload_parking_step6">Fianza</a>
                <div class="class_container_content_upload_parking_step_6">
                <input name="vehic" value="{{$parkingSpace->vehic ?? '0'}}" class="form-check-input" id="vehic1" type="checkbox">
                <label for="vehicle1">&nbsp;&nbsp;1 mes</label>
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
               <a href="{{route('getSubeTuPlaza5')}}" class="class_buttons_steps_upload_parking_goback"><i class="fa-chevron-left fa ms-2"></i>&nbsp;&nbsp;Atrás</a>
                <button type="submit" style="margin-right:30pc;" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
            </div>
          </form>
          </div>
        </div>

    <!-- JavaScript files-->
      @include('partials.new-scripts')
      <script>
        var vehic = document.getElementById("vehic1").value;
        if(vehic == true){
            document.getElementById("vehic1").checked = true;
        }
      </script>
  </body>
</html>
