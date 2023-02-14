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
            <div id="Acceso" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Acceso Plaza</h3>
                <div class="row mt-4" style="text-align: center;">
                    <div class="col-4"
                        style="margin: 12px;
                        border: 1px solid;
                        border-radius: 30px;">
                        <a href="{{route('recogida')}}" class="btn"><b>Recogida de llaves/mando</b></a>
                    </div>
                    <div class="col-4"
                    style="margin: 12px;
                        border: 1px solid;
                        border-radius: 30px;">
                        <a href="{{route('entrega')}}" class="btn"><b>Entrega de llaves/mando<b></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </section>
@endsection
