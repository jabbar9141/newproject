@extends('main-template')
<link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
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
</style>
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="Recogida" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Datos de la entrega</h3>
                <div class="recogida2" style="margin: 20px;">
                    <div class="mt-4" style="text-align: center;">
                        <h6>¡Gracias! El personal de Garer pasará a entregarte las llaves/mando el próximo miércoles 9 de Noviembre a las 12:00h.</h6>
                        <img src="{{asset('img/Captura-de-Pantalla.png')}}" alt="" width="200px" height="200px">
                    </div>
                    <div>
                        <h6 class="mt-4">Datos de entrega:</h6>
                        <form action="#"
                               style="padding: 0px;
                                margin-top: 0px;">
                             <label class="mt-2">Fecha de enterega</label>
                            <input type="email" class="form-control mt-2" placeholder="Jueves 9 de Noviembre" style="width:40%">
                            <label class="mt-2">Hora de enterega</label>
                            <input type="email" class="form-control mt-2" placeholder="12:00"  style="width:40%">

                            <input type="email" class="form-control mt-4" placeholder="Dirección" style="width:70%">

                            <input type="email" class="form-control mt-4" placeholder="Piso, planta, puerta"  style="width:70%">

                            <div class="class_row_responsive row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control mt-4" placeholder="Código postal" style="width:50%">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control mt-4" placeholder="Ciudad" style="width:50%">
                                </div>
                            </div>
                            <div>
                                <label class="mt-4">Comentarios para la entrega:</label>
                                <textarea name="description" class="form-control mt-2" rows="5" style="width:75%" placeholder="Details.....">{{Auth::user()->description}}</textarea>
                            </div>

                            <button type="submit" class="mt-4 class_login_button_modal class_input_box form-control">
                                Cerrar
                            </button>
                        </form>
                    </div>

                </div>



            </div>

        </div>
    </div>
    </section>
@endsection
