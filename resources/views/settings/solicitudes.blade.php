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
            <div id="Perfil" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Solicitudes</h3>

                <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mt-4">
                        <select class="form-control"  style="height: 55px;border-radius: 1.4rem;">
                        <option>Nasser Juma</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>

                    <div class="form-group mt-4" >
                        <select class="form-control"  style="height: 55px;border-radius: 1.4rem;">
                        <option>Fernando Rodriguez</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>

                    <div class="form-group mt-4">
                        <select class="form-control"  style="height: 55px;border-radius: 1.4rem;">
                        <option>Sandra Acebal</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>

                    <div class="mt-4" style="border: 1px solid;border-radius: 15px;">
                        <p class="mt-2" style="padding: 15px;">
                            Hola ( propietario) !
                            <br>
                            (Sandra Acebal ) tiene 29 años y trabaja como diseñadora de interiores, en su tiempo libre le gusta disfrutar de la montaña y sus perritos. Ella esta interesada en aparcar su coche en tu plaza de parking.
                            <br>¿Quieres aceptar su solicitud y firmar el contrato?
                        </p>
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="bt1-div col-6">
                                <button type="submit" class="class_login_button_modal class_input_box form-control">
                                    Denegar
                                </button>
                            </div>
                            <div class="btn2-div col-6">
                                <button type="submit" class="class_login_button_modal class_input_box form-control">
                                    Aceptar
                                </button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
