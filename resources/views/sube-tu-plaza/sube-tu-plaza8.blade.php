<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
  @include('partials.head')
  <body style="padding-top: 72px;">
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
    <div class="progress rounded-0 sticky-top" style="height: 8px; top: 0px;">
      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">
        <div class="container">

            @include('partials.modals.salir')

          <div class="row">
              <h1 class="h2 mb-5"><span class="text-muted float-end">Step 8</span>      </h1>
              <hr>
            <div class="col-lg-6">

              <div class="text-block"   style="text-align: center">
                  <h1
                  style="
                  text-align: center;
                  color: #2A6092;
                  margin-top: 80px;">¿Cuando quieres que Garer pase hacer el video en 3D?</h1>
              </div>
              <div style="    margin-left: 30px;
              margin-right: 30px;
              background-color: cornflowerblue;
              padding: 15px;
              border: 1px solid;
              border-radius: 12px;">
                  <strong>
                    Recuerda que Garer tarda 24h en comprobar tu plaza, fija una fecha si puede ser el mismo día para que tu plaza este activa lo antes posible.
                  </strong>
              </div>
              {{-- {{$parkingSpace}} --}}

            </div>
            <div class="col-lg-6 ps-xl-5"
                style="text-align: center;
                padding: 40px;
                margin-top: 40px;">
                <form action="{{route('postSubeTuPlaza8')}}" method="post">
                    @csrf
                     @method('post')
                     @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif
                       <strong>
                                    Para una mayor facilidad a la hora de alquilar tu plaza de parking, Garer realizará una grabación de los accesos a tu plaza de parking. Así puede crear el vídeo en 3D.
                                     <br>
                                     <br>
                                     ¿Cuando quieres que pase el equipo de Garer a grabar?
                                </strong>
                                {{-- {{$parkingSpace}} --}}
                                <ul class="list-unstyled text-muted">
                                  <li class="mb-2 mt-4">
                                      <input type="date" name='date' value="{{ $parkingSpace->date }}">
                                  </li>
                                </ul>


            </div>
              <hr style="margin-top: 40px">
              <div class="col text-center text-sm-start">
                <a class="btn btn-link text-muted"
                style=" width: 140px;
                background-color: #2A6092;
                color: white !important;
                border-radius: 25px;" href="{{ url('/sube-tu-plaza7') }}"> <i class="fa-chevron-left fa me-2"></i>Atrás</a>
              </div>
              <div class="col text-center text-sm-end ">
                  {{-- <a class="btn btn-primary px-3"
                  style="color: white !important;
                  background-color: #2A6092;
                  width: 140px;
                  border-radius: 25px;" href="{{ url('/sube-tu-plaza9')  }}">Aceptar<i class="fa-chevron-right fa ms-2"></i>
                  </a> --}}
                <button type="submit"  class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>

              </div>

            </form>

          </div>
        </div>
    </section>
    <!-- Footer-->
     @include('partials.footer')
    <!-- JavaScript files-->
      @include('partials.new-scripts')
  </body>
</html>
