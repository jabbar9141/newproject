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
      <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">

        <div class="container">

            @include('partials.modals.salir')

            <form action="{{route('postSubeTuPlaza2')}}" method="post">
                @csrf
                @method('post')
          <div class="row class_content_page2_upload_parking">
                @if ($errors->any())
                <div class="class_error_texts_upload_parking class_error_texts_upoader_page2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>
            <div class="col-lg-5 class_text_title_upload_parking_step2">
                <div class="text-block">
                    <a class="class_text_page1_upload_parking">¿Qué medidas tiene tu plaza?</a>
                </div>
            </div>
            <div class="col-lg-6 ps-xl-5">
                <div class="row">
                    <div class="col-md-6 class_size_filters_step2">
{{-- <<<<<<< HEAD --}}
                        {{-- {{$parkingSpace}} --}}

                        {{-- <p>{{ $parkingSpace }}<p> --}}
                        {{-- <input type="hidden" name="id" value="{{$parkingSpace->id ?? ''}}"> --}}
{{-- ======= --}}

                        {{-- <p>{{ $parkingSpace }}<p> --}}
                        {{-- <input type="hidden" name="id" value="{{$parkingSpace->id ?? ''}}"> --}}
{{-- >>>>>>> cd2672639cf2d1acd6ded330b09103d8e4ea3bee --}}
                        <input id="id_input_largo_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Largo" name="largo"  value="{{$parkingSpace->largo ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)"><br><a class="class_meters_first_upload_parking_step2" required>m</a>
                        <input id="id_input_ancho_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Ancho" name="ancho" value="{{$parkingSpace->ancho ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)"><br><a class="class_meters_second_upload_parking_step2" required>m</a>
                        <input id="id_input_alto_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Altura min" name="altura_min" value="{{$parkingSpace->altura_min ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)"><a class="class_meters_third_upload_parking_step2" required>m</a>

                    </div>
                    <div class="col-md-6">
                        <img class="class_image_car_sizes_step2" src="{{ asset('img/Group-4-2.png') }}" alt="relode page">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="class_div_footer_upload_parking_space">
            <hr class="class_hr_upload_parking_step1">
            <div class="class_button_next_upload_parking class_container_button_upload_parking_step1">
              <a href="/sube-tu-plaza1" class="class_buttons_steps_upload_parking_goback"><i class="fa-chevron-left fa ms-2"></i>&nbsp;&nbsp;Atrás</a>
              {{-- <a href="{{ url('/sube-tu-plaza3')  }}" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></a> --}}
              <button type="submit" style="margin-right:30pc;" class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
            </div>
        </div>


            </div>
        </div>
    </form>
  </section>



    <!--DEFINO LAS DEPENDENCIAS-->
    <script src="{{asset('js/config_size_parking_spaces.js')}}"></script>
    <!--FIN DE DEFINO LAS DEPENDENCIAS-->



    <!-- JavaScript files-->
      @include('partials.new-scripts')
  </body>
</html>
