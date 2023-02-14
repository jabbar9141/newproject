<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{asset('css/sube-tu-plaza9.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
  @include('partials.head')
  <body style="padding-top: 72px;">
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
    <div class="progress rounded-0 sticky-top" style="height: 8px; top: 0px;">
      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">
        <div class="container">

            @include('partials.modals.salir')

           {{-- {{$parkingSpace}} --}}
          <div class="row">
              <h1 class="h2 mb-5"><span class="text-muted float-end">Step 9</span>      </h1>
              <hr>
            <div class="col-lg-4">

              <div class="text-block"   style="text-align: center">
                  <h1
                  style="
                  text-align: center;
                  color: #2A6092;
                  margin-top: 80px;">¿Cuando quieres que Garer pase hacer el video en 3D?</h1>
              </div>

            </div>
            <div class="col-lg-8 ps-xl-5"
                style="
                padding: 40px;
                margin-left: 0px;">

                 <ul class="list-unstyled text-muted" style="text-align: center;">
                    <a  href="#" class="dimention-size1 btn" style="margin-left: 50px">Hora <br> <b>12:00</b></a>
                 </ul>
                 <ul class="list-unstyled text-muted">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                        </svg>
                        <strong>Madrugada</strong>
                    </li>
                 </ul>
                 <ul class="list-unstyled text-muted">
                    <li>
                            <div class="card border-0">
                               <div class="card-body p-3 p-sm-5">
                                   <div class="row text-center mx-0">
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">00:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">00:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                       <div class="cell py-1">01:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">01:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">02:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">02:30</div>
                                       </div>
                                   </div>
                                   <div class="row text-center mx-0">

                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">03:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">03:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">04:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">04:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">05:00</div>
                                       </div>
                                        <div class="col-md-2 col-4 my-1 px-2">
                                            <div class="cell py-1">05:30</div>
                                        </div>
                                   </div>
                                   <div class="row text-center mx-0">
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">06:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">06:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">07:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">07:30</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">08:00</div>
                                       </div>
                                       <div class="col-md-2 col-4 my-1 px-2">
                                           <div class="cell py-1">08:30</div>
                                       </div>
                                   </div>

                                </div>
                            </div>

                    </li>
                 </ul>

                 <ul class="list-unstyled text-muted">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-sun" viewBox="0 0 16 16">
                            <path d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"/>
                            <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                        </svg>
                        <strong>Manana/Trade</strong>
                    </li>
                 </ul>
                 <ul class="list-unstyled text-muted">
                    <li>
                        <div class="card border-0">
                            <div class="card-body p-3 p-sm-5">
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div id="cell1" class="cell py-1">9:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">9:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">10:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                    <div class="cell py-1">10:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">11:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">11:30</div>
                                    </div>
                                </div>
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">12:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">12:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">13:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">13:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">14:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">14:30</div>
                                    </div>
                                </div>
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">15:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">15:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">16:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">16:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">17:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">17:30</div>
                                    </div>
                                </div>
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">18:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">18:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">19:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">19:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">20:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">20:30</div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </li>
                 </ul>
                  <ul class="list-unstyled text-muted">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                        </svg>
                        <strong>Noche</strong>
                    </li>
                 </ul>

                 <ul class="list-unstyled text-muted">
                    <li>
                        <div class="card border-0">
                            <div class="card-body p-3 p-sm-5">
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div id="cell1" class="cell py-1">21:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">21:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">22:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                    <div class="cell py-1">22:30</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">23:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">23:30</div>
                                    </div>
                                </div>
                                <div class="row text-center mx-0">
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">24:00</div>
                                    </div>
                                    <div class="col-md-2 col-4 my-1 px-2">
                                        <div class="cell py-1">24:30</div>
                                    </div>
                                </div>

                             </div>
                         </div>
                    </li>
                 </ul>

            </div>
              <hr style="margin-top: 40px">
              <div class="col text-center text-sm-start">
                <a class="btn btn-link text-muted"
                style=" width: 140px;
                background-color: #2A6092;
                color: white !important;
                border-radius: 25px;" href="{{ url('/sube-tu-plaza8') }}"> <i class="fa-chevron-left fa me-2"></i>Atrás</a>
              </div>
              <div class="col text-center text-sm-end ">
                  {{-- <a class="btn btn-primary px-3"
                  style="color: white !important;
                  background-color: #2A6092;
                  width: 140px;
                  border-radius: 25px;" href="{{ url('/sube-tu-plaza10')  }}">Aceptar<i class="fa-chevron-right fa ms-2"></i>
                  </a> --}}
                <form action="{{route('postSubeTuPlaza9')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="time" name="time" value="{{$parkigSpace->time ?? ''}}">

                    <button type="submit"  class="class_buttons_steps_upload_parking_next">Siguiente<i class="fa-chevron-right fa ms-2"></i></button>
                </form>
            </div>


          </div>
        </div>
    </section>
    {{-- <section class="py-2">
        <div class="container-fluid date-select px-0 px-sm-4 mx-auto">
            <div class="row justify-content-center mx-0">
                <div class="col-lg-10">

                </div>
            </div>
        </div>
    </section> --}}
    <!-- Footer-->
     @include('partials.footer')
    <!-- JavaScript files-->
      @include('partials.new-scripts')

      <script>
        $(document).ready(function(){
            $('.cell').click(function(){
                $('.cell').removeClass('select');
                $(this).addClass('select');
                var value = $(this).html();
                $("#time").val(value);
                // console.log(value);
                });
            });
      </script>

  </body>
</html>
