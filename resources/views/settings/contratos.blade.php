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
.accordion1 {
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
.active, .accordion1:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel1 {
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
            <div id="Contratos" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Contratos</h3>

                <button class="accordion1">Contrato alquiler C/ Camp 16 </button>
                <div class="panel1">
                    <img src="{{asset('img/Captura-de-pantalla-las.png')}}" alt="">
                    <button type="submit" class="class_login_button_modal class_input_box form-control">
                        Firmar
                    </button>
                </div>

            </div>

        </div>
    </div>
    </section>

    <script>
        var acc = document.getElementsByClassName("accordion1");
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
