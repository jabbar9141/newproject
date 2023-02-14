@extends('main-template')
<link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
<link rel="stylesheet" href="{{asset('css/sube-tu-plaza9.css')}}">

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
            <div id="Recogida" class="tabcontent col-lg-9 ps-lg-5">
                <h3 style="color:#2A6092">Recogida De llaves/mando</h3>
                <div>
                       <div style="text-align: center">
                        <p>Selecciona en el calendario el día y hora que quieres que Garer pase a recoger tus llaves/mando.</p>
                        <input type="date">
                       </div>

                        <ul class="list-unstyled text-muted mt-6" style="text-align: center;">
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
                            {{-- <li>
                              <a href="" class="btn mt-1" style="background-color: white;
                              border: 1px solid;">00:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                               border: 1px solid;">00:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                border: 1px solid;">01:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                 border: 1px solid;">01:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                  border: 1px solid;">02:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                   border: 1px solid;">02:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">03:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">03:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">04:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">04:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">05:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">05:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">06:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">06:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">07:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">07:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">08:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">08:30</a>
                            </li> --}}
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
                            {{-- <li>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">09:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">09:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">10:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">10:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                border: 1px solid;">11:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                 border: 1px solid;">11:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                  border: 1px solid;">12:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                   border: 1px solid;">12:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">13:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">13:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">14:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">14:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">15:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">15:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">16:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">16:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">17:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">17:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">18:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">18:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">19:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">19:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">20:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">20:30</a>
                            </li> --}}
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
                            {{-- <li>

                              <a href="" class="btn mt-1" style="background-color: white;
                                border: 1px solid;">21:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                 border: 1px solid;">21:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                  border: 1px solid;">22:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                   border: 1px solid;">22:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">23:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">23:30</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">24:00</a>
                              <a href="" class="btn mt-1" style="background-color: white;
                                    border: 1px solid;">24:00</a>

                            </li> --}}
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
                         <p>Selecciona la dirección donde Garer pasará a recoger tus llaves/mando.</p>
                         <form action="{{route('recogida2')}}">
                                <input type="text" class="form-control mt-4" placeholder="Dirección" style="width:75%">
                                <input type="text" class="form-control mt-4" placeholder="Piso, planta, puerta"  style="width:75%">

                                <div class="class_row_responsive row">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control mt-4" placeholder="Código postal" style="width:50%">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control mt-4" placeholder="Ciudad" style="width:50%">
                                    </div>
                                </div>
                                <div>
                                    <label class="mt-4">Explícanos algo breve sobre ti:</label>
                                    <textarea name="description" class="form-control mt-2" rows="5" style="width:75%" placeholder="Details.....">{{Auth::user()->description}}</textarea>
                                </div>


                                <button type="submit" class="mt-4 class_login_button_modal class_input_box form-control">
                                    Aceptar
                                </button>
                            </form>
                </div>



            </div>

        </div>
    </div>
    </section>

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
@endsection
