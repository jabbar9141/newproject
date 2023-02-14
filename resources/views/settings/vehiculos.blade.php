@extends('main-template')

<style>
    .tab:hover {
      background-color: #96a0a9af;

    }
    a.tablinks {
        color: #9E9FA4 !important;
        margin-left: 12px;

    }
    /* Create an active/current "tab button" class */
    .tab a.active {
       color:#2A6092!important;
       font-size: 18px;
       font-weight: bold;
    }
    .tab {
    width: 240px;
    height: 28px;
    background-color: #ffffff;
    /* border: 1px solid; */
    border-radius: 7px;
    /* text-align: center; */
}



/* Accordian CSS */
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 12px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-bottom: 15px;
  border: 1px solid;
  border-radius: 30px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
  border: 1px solid;
    padding: 20px;
    margin-left: 15px;
    margin-right: 15px;
    border-radius: 12px;
    margin-bottom: 15px;
}


</style>
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="Perfil" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Vehiculos</h3>

                <button class="accordion">Seat Ibiza 300</button>
                <div class="panel">
                    <form class="mt-2" action="{{route('change-password')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-2" placeholder="Matrícula" value="">
                        <input type="text"  name='' style="width: 75%" class=" form-control  mt-4"  placeholder="Marca" value="">
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-4" placeholder="Ano" value="">
                        <input type="text" name="" style="width: 75%" class=" form-control  mt-4" placeholder="Modelo del vehiculo" value="">

                        <button type="submit" class="class_login_button_modal class_input_box form-control">
                            Aceptar
                        </button>
                    </form>
                </div>

                <button class="accordion">Audi 3</button>
                <div class="panel">
                    <form class="mt-2" action="{{route('change-password')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-2" placeholder="Matrícula" value="">
                        <input type="text"  name='' style="width: 75%" class=" form-control  mt-4"  placeholder="Marca" value="">
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-4" placeholder="Ano" value="">
                        <input type="text" name="" style="width: 75%" class=" form-control  mt-4" placeholder="Modelo del vehiculo" value="">

                        <button type="submit" class="class_login_button_modal class_input_box form-control">
                            Aceptar
                        </button>
                    </form>
                </div>

                <button class="accordion">Mini Cooper</button>
                <div class="panel">
                    <form class="mt-2" action="{{route('change-password')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-2" placeholder="Matrícula" value="">
                        <input type="text"  name='' style="width: 75%" class=" form-control  mt-4"  placeholder="Marca" value="">
                        <input type="text" name="" style="width: 45%" class=" form-control  mt-4" placeholder="Ano" value="">
                        <input type="text" name="" style="width: 75%" class=" form-control  mt-4" placeholder="Modelo del vehiculo" value="">

                        <button type="submit" class="class_login_button_modal class_input_box form-control">
                            Aceptar
                        </button>
                    </form>
                </div>
                <h5 class="mt-4" style="color:#2A6092">Añadir nuevo vehiculo</h5>
                <div class="class_icons_modal" style="margin-left: 50px;">
                  <input type="hidden" name="vahical_type" id="vahical_type" value="">
                    <a style="cursor:pointer;">
                        <img class="class_icon_car_upload_parking_step1 class_icon_car_filter_modal" id="icon_car_filters" src="{{asset('img/car_off.png')}}" name="change_car" onclick="highlightcar()">
                        {{-- <input type="hidden" name="vahical1" id="car" value="{{$parkingSpace->vahical_type ?? ''}}"> --}}
                    </a>
                    <a style="cursor:pointer;">
                        <img class="class_icon_motorbike_upload_parking_step1 class_icon_motorbike_filter_modal" id="icon_motorbike_filters" src="{{asset('img/motorbike_off.png')}}" name="change_motorbike" onclick="highlightbike()">
                        {{-- <input type="hidden" name="vahical2" id="bike" value="{{$parkingSpace->vahical_type ?? ''}}"> --}}
                    </a>
                </div>
                {{-- <div class="row mt-4">
                    <div class="col-md-4 mt-2" style="text-align:left">

                        <a style="cursor:pointer;">
                            <img
                            style="width: 4.8em;
                            margin-top: 0.4em;
                            margin-left: 20%;
                            position: inherit;"
                            id="icon_car1"
                            src="{{asset('img/car_on.png')}}"
                            name="change_car"
                            onMousedown="cambia_imagen_coche()">
                           </a>
                    </div>
                    <div class="col-md-4 mt-2">

                        <a style="cursor:pointer;">
                            <img
                            style="width: 4.2em;
                            margin-top: 0.09em;
                            margin-left: 20%;
                            position: inherit;"
                            id="icon_motorbike1"
                            src="{{asset('img/motorbike_off.png')}}"
                            name="change_motorbike"
                            onMousedown="cambia_imagen_moto()">
                        </a>
                    </div>
               </div> --}}
               <form class="mt-4" action="{{route('change-password')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="text" name="" style="width: 35%" class=" form-control  mt-2" placeholder="Matrícula" value="">
                    <p>*Introduce la matrícula del vehículo y automaticamente se completaran el resto de campos in english</p>
                    <input type="text"  name="" style="width: 75%" class=" form-control  mt-4"  placeholder="Marca" value="">
                    <input type="text" name="" style="width: 35%" class=" form-control  mt-4" placeholder="Ano" value="">
                    <input type="text" name="" style="width: 75%" class=" form-control  mt-4" placeholder="Modelo del vehiculo" value="">

                    <button type="submit" class="class_login_button_modal class_input_box form-control">
                        Aceptar
                    </button>
                </form>


        </div>
    </div>
    </section>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
    </script>

    <script>
        var vahical_type = document.getElementById('vahical_type').value;

        if(vahical_type == "car"){
            document.getElementById('icon_car_filters').src = "img/car_on.png";
        }


        if(vahical_type == 'bike'){
            document.getElementById('icon_motorbike_filters').src = 'img/motorbike_on.png'
        }


        function highlightcar(){
            document.getElementById("icon_car_filters").src = "{{asset('img/car_on.png')}}";
            document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_off.png')}}"
            document.getElementById('vahical_type').value = 'car';

        }

        function highlightbike(){
            document.getElementById("icon_car_filters").src = "{{asset('img/car_off.png')}}";
            document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_on.png')}}";
            document.getElementById('vahical_type').value = 'bike';
        }
     </script>
@endsection
