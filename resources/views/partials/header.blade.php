@include('partials.modals.login')
@include('partials.modals.register')

      <!-- Navbar-->
      <nav class="div_header_head navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="/">
            <img id="gr_logo" src="{{asset('img/logo.png')}}">
            </a>
          </div>
          <button id="button_downdrop_menu_responsive" class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-4 mb-2 d-sm-none" action="#" id="searchcollapsed">

            </form>
            <ul class="navbar-nav ms-auto">
      <!--BOTÓN REGISTRO DESKTOP-->
              <li id="register_button" class="class_input_box nav-item">
                <a onclick="HideDowndropMenuResponsive()" data-bs-toggle="modal" data-bs-target="#modal_register" class="btn register_btn btn-outline-primary class_input_box" href="#">

              <?php
                $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='register_button'");
                foreach ($query1 as $result_query1){
                echo $result_query1->lang_es;
                };
                ?>
             </a></li>

<!--FIN DE BOTÓN REGISTRO DESKTOP-->
<!--BOTÓN REGISTRO RESPONSIVE-->
<!-- <li id="register_button2" class="nav-item"><a data-bs-toggle="modal" data-bs-target="#modal_register" href="#" class="nav-link"> -->
<li id="register_button2" class="nav-item"><a onclick="HideDowndropMenuResponsive()" data-bs-toggle="modal" data-bs-target="#modal_register" href="#" class="nav-link">
<?php
$query1 = DB::select("SELECT * FROM gr_texts WHERE variable='register_button'");
foreach ($query1 as $result_query1){
  echo $result_query1->lang_es;
};
?>
</a></li>

<!--FIN DE BOTÓN REGISTRO RESPONSIVE-->
              <li id="login_button" class="nav-item"><a onclick="HideDowndropMenuResponsive()" data-bs-toggle="modal" data-bs-target="#modal_login" href="#" class="nav-link">
              <?php
$query2 = DB::select("SELECT * FROM gr_texts WHERE variable='login_button'");
foreach ($query2 as $result_query2){
  echo $result_query2->lang_es;
};
?>

              </a></li>

            </ul>
          </div>
        </div>

      </nav>


