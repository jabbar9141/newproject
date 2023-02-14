@extends('main-template')
<head>
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
</head>

@section('section')

    <section class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-3 me-lg-auto">
            @include('settings.sidebar')
            </div>
            <div id="mensajes" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Mensajes</h3>
            </div>

        </div>
    </div>
    </section>

@endsection

