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
       color:#2A6092 !important;
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
.accordion2 {
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
.active, .accordion2:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel2 {
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
            <div id="Facturas" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Facturas</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4"  style="border-right: 1px solid;">
                        <h4>Facturas</h4>
                        <div style="border: 1px solid;
                            border-radius: 15px;
                            padding: 15px;
                            background: #E4EFFB;">
                            <h6>Enero</h6>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Emitida el 29.01.2022</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" style="color: #27a811 !important;
                                    font-size: 16px;
                                    font-weight: bold;">Recibido</a>
                                </div>
                            </div>

                        </div>
                        <div class="mt-4" style="border: 1px solid;
                        border-radius: 15px;
                        padding: 15px;
                        background: #E4EFFB;">
                        <h6>Enero</h6>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Emitida el 29.01.2022</p>
                            </div>
                            <div class="col-md-4">
                                <a href="#" style="color: #27a811 !important;
                                font-size: 16px;
                                font-weight: bold;">Recibido</a>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4" style="border: 1px solid;
                        border-radius: 15px;
                        padding: 15px;
                        background: #E4EFFB;">
                        <h6>Enero</h6>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Emitida el 29.01.2022</p>
                            </div>
                            <div class="col-md-4">
                                <a href="#" style="color: #6d6f0b !important;
                                font-size: 16px;
                                font-weight: bold;">Pendiente</a>
                            </div>
                        </div>

                    </div>

                    </div>
                    <div class="col-md-8" style="">
                        <button class="accordion2 mt-2"> Factura Enero </button>
                        <div class="panel2">
                            <img src="{{asset('img/garer-image.png')}}" alt="" width="550px">
                            <button type="submit" class="class_login_button_modal class_input_box form-control">
                                Descargar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>
    <script>
        var acc = document.getElementsByClassName("accordion2");
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
@endsection
