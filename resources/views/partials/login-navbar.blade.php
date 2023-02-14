<nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
    <div class="container-fluid">
        <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="/">
            <img id="gr_logo" src="{{asset('img/logo.png')}}">
            </a>
          </div>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'getSubeTuPlaza1') ? 'active' : '' }}" href="{{route('getSubeTuPlaza1')}}">Sube tu plaza</a>
          </li>
          <!-- Megamenu-->
          <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'getFavoritos') ? 'active' : '' }}" href="{{route('getFavoritos')}}">Favoritos</a>
          </li>
          <!-- /Megamenu end-->
          <li class="nav-item"><a class="nav-link {{ (Request::route()->getName() == 'getMensajes') ? 'active' : '' }}" href="{{route('getMensajes')}}">Mensajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'getAyuda') ? 'active' : '' }}" href="{{route('getAyuda')}}">Ayuda</a>
          </li>

<div class="class_downdrop_mobile_profile_settings">
          <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'getAyuda') ? 'active' : '' }}" href="{{route('profile-view')}}">Mi perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Request::route()->getName() == 'getAyuda') ? 'active' : '' }}" href="{{route('logout')}}">Cerrar sesión</a>
          </li>
</div>




          <li class="class_photo_user_profile_downdrop nav-item dropdown ms-lg-3">
            <a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
              <img class="avatar avatar-sm avatar-border-white me-2" src="/img/avatar/{{Auth::user()->avatar}}">
            </a>

            <div class="dropdown-menu dropdown-menu-end class_downdrop_user_settings" aria-labelledby="userDropdownMenuLink">

              <img class="class_user_icon_downdrop" src="img/user_downdrop.png"><a class="dropdown-item class_item_downdrop_logged_navbar" href="{{route('profile-view')}}">Mi perfil</a>
              <div class="dropdown-divider class_dropdown_divider_user_settings"></div>
              <img class="class_logout_icon_downdrop" src="img/logout_downdrop.png"><a class="dropdown-item class_item_downdrop_logged_navbar" href="{{route('logout')}}"> Cerrar sesión</a>
            </div>
          </li>





        </ul>
      </div>
    </div>
  </nav>



<!-- Main Theme JS file    -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
