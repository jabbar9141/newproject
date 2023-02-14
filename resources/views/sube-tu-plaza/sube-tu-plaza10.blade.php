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
      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">
        <div class="container" style="background-image: url('img/Celebration-amico.png');text-align: center;">
            <div class=""   style="text-align: center">
                <h1
                style="
                text-align: center;
                color: #2A6092;
                margin-top: 20px;">¡Enhorabuena tu plaza se ha subido con éxito!</h1>

            </div>
{{-- {{$parkingSpace}} --}}
           <img src="{{asset('img/Order-ride-amico.png')}}" alt="" width="320px" height="320px">

        <div class="row">

          <div class="col text-center text-sm-start">
            {{-- <a class="btn btn-link text-muted"
            style=" width: 140px;
            background-color: #2A6092;
            color: white !important;
            border-radius: 25px;" href="{{ url('/sube-tu-plaza9') }}"> <i class="fa-chevron-left fa me-2"></i>Atrás</a> --}}
          </div>
          <div class="col text-center text-sm-end ">
              {{-- <a class="btn btn-primary px-3"
              style="color: white !important;
              background-color: #2A6092;
              width: 140px;
              border-radius: 25px;" href="#"> Aceptar<i class="fa-chevron-right fa ms-2"></i>
              </a> --}}
              <form action="{{route('postSubeTuPlaza10')}}" method="POST">
                @csrf
                @method('POST')
                {{-- <input type="hidden" id="time" name="time" value="{{$parkigSpace->time ?? ''}}"> --}}

                <button type="submit"  class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
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
