<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
    <link rel="stylesheet" href="{{URL::asset('css/parking_lot.css')}}">

    </head>
  <body style="padding-top: 72px;">
    <header class="header">
        @if (Auth::check())
            @include('partials.login-navbar')
        @else
            @include('partials.header')
        @endif
    </header>
        @include('partials.modals.email_varification')
        @include('partials.modals.email_varification2')
        @include('partials.modals.email-view')
        @include('partials.modals.forget-password')
        @include('partials.modals.error')
        @include('partials.modals.welcome_user')
       @include('partials.slider')

    <div class="container py-5">
        <img class="d-block avatar avatar-xl p-2 mb-2" src="{{asset('img/avatar/avatar-8.jpg')}}" alt="Padmé Amidala" style="
            width: 7rem;
            height: 7rem;
            line-height: 7rem;
            position: absolute;
            margin-top: -105px;
            z-index: 9;">
        <div class="container py-5">
            <div class="row">
              <div class="col-lg-8">
                <div class="text-block">
                  <h4>{{$parkingSpace->es_street . ',' . $parkingSpace->es_zone}}</h4>
                  <p class="text-primary"><i class="fa-map-marker-alt fa me-1"></i> Brooklyn</p>
                  <div class=" card">
                    <video class="video-player" controls>
                        <source src="{{ URL::asset('img/background_video.mp4') }}" type="video/mp4">
                    </video>
                  </div>

                  <h3 class="mb-3 mt-3">Descripción</h3>
                  <p class="text-muted fw-light"> {{$parkingSpace->es_description}}</p>

                </div>
                <div class="text-block">
                    <h4 class="mb-4">Datos de la plaza</h4>
                    <div class="row">
                      <div class="col-md-6 mt-4">
                        <ul class="list-unstyled text-muted">
                          <li class="mb-2">

                              <span >Largo</span>
                              <a  href="#" class="dimention-size1 btn">{{$parkingSpace->largo}} m</a>

                          </li>
                          <li class="mb-2">

                              <span >Anchura</span>
                              <a href="#" class="dimention-size2 btn">{{$parkingSpace->ancho}} m</a>

                          </li>
                          <li class="mb-2">

                                  <span >Altura min</span>
                                  <a href="#" class="dimention-size3 btn">{{$parkingSpace->altura_min}} m</a>

                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                         <img src="{{ URL::asset('img/Group-4-2.png')}}" alt="vahical" style="width: 300px;height:300px" >
                         {{-- img section --}}
                      </div>
                    </div>
                  </div>

                  <div class="text-block">
                    <h4 class="mb-4">Extras</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="list-unstyled text-muted">
                          <li class="mb-2">
                            <img src="{{ URL::asset('icons/cargando-1.svg') }}" alt="" style="width: 40px;height:40px ">
                             <span style="font-size: 25px">Cargador electrico</span>
                            <input type="checkbox" class="larger" name="checkBox2"  {{ $parkingSpace->gate_electric_charger ? "checked" : "" }} @disabled(true)>

                          </li>
                          <li class="mb-2">
                            <img src="{{ URL::asset('icons/carro-de-limpieza -1.svg') }}" alt="" style="width: 40px;height:40px">
                             <span style="font-size: 25px">Servicio limpieza</span>
                            <input type="checkbox"  name="checkBox2"  {{ $parkingSpace->housekeeping ? "checked" : "" }}  @disabled(true) >
                          </li>
                          <li class="mb-2">
                            <img src="{{ URL::asset('icons/garaje 1.svg') }}" alt="" style="width: 40px;height:40px">
                             <span style="font-size: 25px">Puerta automatica</span>
                            <input type="checkbox"  name="checkBox2" {{ $parkingSpace->automatic_door ? "checked" : "" }} @disabled(true)>
                          </li>

                        </ul>
                      </div>
                      <div class="col-md-6">
                       <ul class="list-unstyled text-muted">
                        <li class="mb-2">
                          <img src="{{ URL::asset('icons/discapacidad-1.svg') }}" alt="" style="width: 40px;height:40px ">
                           <span style="font-size: 25px" >Acceso minusválido</span>
                         <input type="checkbox" class="larger" name="checkBox2" {{ $parkingSpace->disabled_access ? "checked" : "" }} @disabled(true)>
                          </li>
                          <li class="mb-2">
                            <img src="{{ URL::asset('icons/policia.svg') }}" alt="" style="width: 40px;height:40px">
                             <span style="font-size: 25px">Personal de seguridad</span>
                            <input type="checkbox"  name="checkBox2" {{ $parkingSpace->security_personnel ? "checked" : "" }} @disabled(true)>
                          </li>
                           <li class="mb-2">
                            <img src="{{ URL::asset('icons/proteger-1.svg') }}" alt="" style="width: 40px;height:40px ">
                             <span style="font-size: 25px">Seguridad 24h</span>
                             <input type="checkbox" class="larger" name="checkBox2" {{ $parkingSpace->security_cameras ? "checked" : "" }} @disabled(true)>
                          </li>
                       </ul>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4">
                <div class="p-4 shadow ms-lg-4 rounded sticky-top" style="top: 100px;">
                  <p class="text-muted" ><span class="text-primary h2">{{ $parkingSpace->price}}</span > per night</p>
                  <hr class="my-4">
                  <form class="form" id="booking-form" method="get" action="#" autocomplete="off">
                    <div class="mb-4">
                      <label class="form-label" for="bookingDate" style="font-size: 16px;color:black">Entrada Fecha</label>
                        <input class="form-control" type="date" name="bookingDate" id="bookingDate" placeholder="Choose your dates" required="required">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="bookingDate" style="font-size: 16px;color:black">Salida 1 a 6 meses</label>
                          <input class="form-control" type="date" name="bookingDate" id="bookingDate" placeholder="Choose your dates" required="required">
                    </div>

                    <div class="d-grid mb-4">
                      <button class="btn" type="submit"
                      style="border: 1px solid;
                      border-radius: 30px;
                      font-size: 18px;
                      background-color: #2A6092;
                      font-weight: 900;">Solicitar plaza</button>
                    </div>
                  </form>
                  <hr class="my-4">
                  <div class="text-center">
                    <ul class="list-inline text-sm mb-4">
                        <li class="list-inline-item me-3">
                            <a href="#" class="btn btn-share-favert" style="border: 1px solid;
                            border-radius: 25px;
                            color: black;
                            text-size-adjust: auto;
                            font-size: 16px;"><i class="fa fa-users me-1 text-secondary"></i> Guardar
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="#" class="btn btn-share-favert" style="border: 1px solid;
                            border-radius: 25px;
                            color: black;
                            text-size-adjust: auto;
                            font-size: 16px;">
                                <i class="fa fa-door-open me-1 text-secondary"></i>Compartir </a>
                        </li>

                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- map call --}}
          <div class="text-block">
            <h5 class="mb-4">Mapa</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18340.920581183786!2d2.142551791447738!3d41.39073425273921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49816718e30e5%3A0x44b0fb3d4f47660a!2sBarcelona!5e0!3m2!1ses!2ses!4v1658679716543!5m2!1ses!2ses" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
         </div>
    </div>
    {{-- footer are --}}
    @include('partials.footer')
    <script>
         @include('partials.new-scripts')
    </script>
      <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script>var basePath = ''</script>
  </body>
</html>

