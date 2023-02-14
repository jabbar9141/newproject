<!DOCTYPE html>
<html lang="en">

    {{-- <script src="{{asset("js/select_vehicle.js")}}"></script> --}}
  @include('partials.head')
  <body>
    <div>
        @if (Auth::check())
           @include('partials.login-navbar')
        @else
            @include('partials.header')
        @endif
    </div>

    <div class="progress rounded-0 sticky-top class_progress_bar_upload_parking_page1">
        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    {{-- {{$error_message}} --}}



        <div class="container">
           <form action="{{route('postSubeTuPlaza1')}}" method="post">
                @csrf
                @method('post')
            <div class="class_content_page1_upload_parking row">
                @if(session()->get('msg'))
                    <div class="class_error_texts_upload_parking">
                        <span>
                            <b> {{ session()->get('msg') }}</b>
                        </span>
                    </div>
                @endif
                @if ($errors->any())
                <div class="class_error_texts_upload_parking class_error_texts_upoader_page2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="class_text_container_upload_page1 col-lg-6">
                    <div class="text-block">
                        <a class="class_text_page1_upload_parking">Selecciona que tipo de vehículo se puede aparcar en tu plaza</a>
                    </div>
                    <a href="#" class="class_x_close_upload_parking_spaces btn-close" data-bs-toggle="modal" data-bs-target="#salir"></a>
            </div>
            <div class="col-lg-6 ps-xl-5">

               {{-- @if ($parkingSpace->vahical_type ?? '') --}}
                {{-- <p>yes</p>
                @else
                  <p>no</p>
               @endif --}}





                 {{-- <p>{{$googleApiKey}}</p> --}}
                 {{-- {{$parkingSpace}} --}}
                {{-- <input type="hidden" name="id" id="" value="{{$parkingSpace->id ?? '' }}"> --}}
                <input type="hidden" name="vahical_type" id="vahical_type" value="{{$parkingSpace->vahical_type ?? ''}}">

                    <div class="class_icons_modal_filters">
                        <a style="cursor:pointer;">
                            <img class="class_icon_car_upload_parking_step1 class_icon_car_filter_modal" id="icon_car_filters" src="img/car_off.png" name="change_car" onclick="highlightcar()">
                            {{-- <input type="hidden" name="vahical1" id="car" value="{{$parkingSpace->vahical_type ?? ''}}"> --}}
                        </a>
                        <a style="cursor:pointer;">
                            <img class="class_icon_motorbike_upload_parking_step1 class_icon_motorbike_filter_modal" id="icon_motorbike_filters" src="img/motorbike_off.png" name="change_motorbike" onclick="highlightbike()">
                            {{-- <input type="hidden" name="vahical2" id="bike" value="{{$parkingSpace->vahical_type ?? ''}}"> --}}
                        </a>
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
                <button type="submit" class="class_buttons_steps_upload_parking_next" style="margin-right:30pc;">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
            </div>
          </form>
        </div>





    </form>
     @include('partials.new-scripts')

     <script>
        var vahical_type = document.getElementById('vahical_type').value;
        // console.log(carVariable);
        if(vahical_type == "car"){
            document.getElementById('icon_car_filters').src = "img/car_on.png";
        }

        // var bikeVariable = document.getElementById('vahical_type').value;
        // console.log(bikeVariable);
        if(vahical_type == 'bike'){
            document.getElementById('icon_motorbike_filters').src = 'img/motorbike_on.png'
        }


      function highlightcar(){
        document.getElementById("icon_car_filters").src = "{{asset('img/car_on.png')}}";
        document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_off.png')}}"
        document.getElementById('vahical_type').value = 'car';
        // document.getElementById('bike').value = '';
       }

    function highlightbike(){
        document.getElementById("icon_car_filters").src = "{{asset('img/car_off.png')}}";
        document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_on.png')}}";
        // document.getElementById('car').value = '';
        document.getElementById('vahical_type').value = 'bike';
    }
     </script>
  </body>
</html>
