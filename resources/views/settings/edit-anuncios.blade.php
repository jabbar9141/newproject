@extends('main-template')
<link rel="stylesheet" href="{{URL::asset('css/parking_lot.css')}}">
{{-- <script src="{{asset("js/select_vehicle.js")}}"></script> --}}

@section('section')
<div class="container mt-4">
    <h4 class="mt-4" style="color:#2A6092">Información de la plaza </h4>
    <div class="row">
        <form action="{{route('edit.anuncios1.post',$parkingSpace->id)}}" method="post">
            @csrf
            @method('post')
            @if ($errors->any())
            <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
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
        <div class="offset-1 col-11">
            <div class="row mt-4">
                <h6>Selección de vehículo </h6>
                <div class="class_icons_modal" style="margin-left: 50px;">
                    <a style="cursor:pointer;">
                        <img class="class_icon_car_upload_parking_step1 class_icon_car_filter_modal" id="icon_car_filters" src="{{asset('img/car_off.png')}}" name="change_car" onclick="highlightcar()">
                        <input type="hidden" name="vahical1" id="car" value="{{$parkingSpace->vahical_type ?? ''}}">
                    </a>
                    <a style="cursor:pointer;">
                        <img class="class_icon_motorbike_upload_parking_step1 class_icon_motorbike_filter_modal" id="icon_motorbike_filters" src="{{asset('img/motorbike_off.png')}}" name="change_motorbike" onclick="highlightbike()">
                        <input type="hidden" name="vahical2" id="bike" value="{{$parkingSpace->vahical_type ?? ''}}">
                    </a>
                </div>

            </div>
            <h6 class="mt-4 mb-2">Dirección de la plaza </h6>
            <div class="row mt-2">
                <div class="col-6">
                    <input type="text" name="es_street"  class=" form-control  mt-4" placeholder="Barcelona" value="{{$parkingSpace->es_street}}">
                    <input type="text"  name='es_zone' class=" form-control  mt-4"  placeholder="Calle Aribau 245" value="{{$parkingSpace->es_zone}}">
                </div>
                <div class="offset-1 col-5">
                    <div class="row">
                        <div class="col">
                            <p>Precio /mes </p>
                            <input type="text" class=" form-control" placeholder="130 $"  value="{{$parkingSpace->price}}">
                        </div>
                        <div class="col" style="margin-left: 20px">
                            <p class="mt-2">Fianza</p>
                           <input name="fianza" value="{{$parkingSpace->fianza ?? ''}}"  class="form-check-input" id="custom-check-12" type="checkbox"> 1 mes
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-2">
                <div class="col-3">
                    <input type="text"  name='planta' class=" form-control  mt-4"  placeholder="2ª" value="{{$parkingSpace->planta ?? ''}}">
                </div>
                <div class="col-3">
                    <input type="text"  name='n_plaza' class=" form-control  mt-4"  placeholder="137" value="{{$parkingSpace->n_plaza ?? ''}}">
                </div>
            </div>
            <input type="text"  name='codigo_postel' class="form-control  mt-4" style="width: 25%;" placeholder="08021" value="{{$parkingSpace->codigo_postel}}">
            <h6 class="mt-4">Medidas de la plaza</h6>
            <div class="row">
                <div class="col-md-6 mt-4">
                  <ul class="list-unstyled text-muted">
                    <li class="mb-2" style="display: flex;">
                        <span >Largo</span>
                        <input id="id_input_largo_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Largo" name="largo"  value="{{$parkingSpace->largo ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)" style="margin-left: 70px;">
                    </li>
                    <li class="mb-2" style="display: flex;">
                        <span >Anchura</span>
                        <input id="id_input_ancho_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Ancho" name="ancho" value="{{$parkingSpace->ancho ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)" style="margin-left: 52px;">
                    </li>
                    <li class="mb-2" style="display: flex;">
                            <span >Altura min</span>
                            <input id="id_input_alto_parking_space" class="class_button_largo_parking_upload_parking_step2 class_input_box form-control" type="text" placeholder="Altura min" name="altura_min" value="{{$parkingSpace->altura_min ?? ''}}" onkeyup="this.value=ParametroSizeParking(this.value)" style="margin-left: 40px;">
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                   <img src="{{ URL::asset('img/Group-4-2.png')}}" alt="vahical" style="width: 300px;height:300px" >
                   {{-- img section --}}
                </div>
                <div>
                    <label class="mt-4">Descripción de la plaza</label>
                    <textarea name="es_description" class="form-control mt-2" rows="5" placeholder="Details.....">{{$parkingSpace->es_description}}</textarea>
                </div>
                <div class="col text-center text-sm-end mt-4 ">
                    <button class="btn btn-primary px-3"
                    style="color: white !important;
                    background-color: #2A6092;
                    width: 140px;
                    border-radius: 25px;" type="submit">Aceptar<i class="fa-chevron-right fa ms-2"></i>
                    </button>
                </div>
              </div>
            </div>
        </form>
    </div>
</div>

<script>
    var carVariable = document.getElementById('car').value;
    // console.log(carVariable);
    if(carVariable == "car"){
        document.getElementById('icon_car_filters').src = "{{asset('img/car_on.png')}}";
    }

    var bikeVariable = document.getElementById('bike').value;
    // console.log(bikeVariable);
    if(bikeVariable == 'bike'){
        document.getElementById('icon_motorbike_filters').src = "{{asset('img/motorbike_on.png')}}"
    }


    var customCheck12 = document.getElementById("custom-check-12").value;
    if(customCheck12 == true){
        document.getElementById("custom-check-12").checked = true;
    }

    function highlightcar(){
        document.getElementById("icon_car_filters").src = "{{asset('img/car_on.png')}}";
        document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_off.png')}}"
        document.getElementById('car').value = 'car';
        document.getElementById('bike').value = '';
    }

    function highlightbike(){
        document.getElementById("icon_car_filters").src = "{{asset('img/car_off.png')}}";
        document.getElementById("icon_motorbike_filters").src = "{{asset('img/motorbike_on.png')}}";
        document.getElementById('car').value = '';
        document.getElementById('bike').value = 'bike';
    }
 </script>

@endsection
