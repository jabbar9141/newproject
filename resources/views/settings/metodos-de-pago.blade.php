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
</style>
@section('section')
    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="metodos" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Añade un método de pago</h3>

                <div class="row pagar mt-4" style="border: 1px solid; border-radius: 15px;display:flex">
                    <div class="col-md-6">
                        <p style="margin-top: 10px;
                        margin-bottom: 1rem;
                        margin-left: 10px;">Pagar con Tarjeta</p>
                    </div>
                    <div class="col-md-6" style="text-align: end;">
                        <img src="{{asset('img/Captura-de-pantalla1.png')}}" alt="" width="150px" height="40px">
                    </div>


                </div>

                <div class="container p-0 mt-4">
                    <div class="card px-4">

                        <div class="row gx-3">
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1 mt-4">Títular de la tarjeta</p>
                                    <input class="form-control mb-3" type="text" placeholder="Nombre y apellidos" value="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Número de tarjeta</p>
                                    <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Fecha de vencimiento ( MM/AA)</p>
                                    <input class="form-control mb-3" type="" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">CVV ( 3 dígitos)</p>
                                    <input class="form-control mb-3 pt-2 " type="" placeholder="Los últimos 3 dígitos del reverso">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn btn-primary mb-3">
                                    <span class="ps-3">Aceptar</span>
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     </div>
</section>
@endsection
