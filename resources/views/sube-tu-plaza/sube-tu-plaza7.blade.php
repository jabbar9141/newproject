<!DOCTYPE html>
<html lang="en">
    <style>
 .img-preview {
        width: 150px;
        height: 130px;
    }
    </style>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.form.js"></script>
    <script>
    $(document).ready(function()
    {
     $('form').ajaxForm(function()
     {
      alert("Uploaded SuccessFully");
     });
    });

    function preview_image()
    {
     var total_file=document.getElementById("upload_file").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' class='img-preview'>");
     }
    }
    </script>
  <link rel="stylesheet" href="{{URL::asset('css/parking_lot.css') }}">
  @include('partials.head')
  <body style="padding-top: 72px;">
    @if (Auth::check())
        @include('partials.login-navbar')
    @else
        @include('partials.header')
    @endif
    <div class="progress rounded-0 sticky-top" style="height: 8px; top: 0px;">
      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <section class="py-5">
        <div class="container">

            @include('partials.modals.salir')

          <div class="row">
              <h1 class="h2 mb-5"><span class="text-muted float-end">Step 7</span>      </h1>
              <hr>
            <div class="col-lg-4">

              <div class="text-block"   style="text-align: center">
                  <h1
                  style="
                  text-align: center;
                  color: #2A6092;
                  margin-top: 80px;">Añade fotos de tu plaza de parking </h1>

              </div>



            </div>
            <div class="col-lg-8 ps-xl-5"
                style="border: 2px solid;
                border-radius: 25px;
                padding: 20px;
                margin-top: 40px;
                text-align: -webkit-center;">

                <div id="wrapper">
                    <form action="{{route('postSubeTuPlaza7')}}" method="post" enctype="multipart/form-data">
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
                        {{-- {{$parkingSpace}} --}}
                        <a style="display:block;width:120px; height:80px;" onclick="document.getElementById('upload_file').click()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-plus"
                            style="background-color: #E4EFFB;border-radius: 30px;" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg>
                        </a>
                        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple style="display:none" value="" />
                    {{-- <input type="submit" name='submit_image' value="Upload Image"/>  --}}

                    <div>
                        <p style="color: #9E9FA4">Te recomendamos utilizar fotos en  horizontal y con la máxima  calidad posible, tienes un 86% de alquilar tu plaza en un tiempo menor.</p>
                    </div>

                    <div id="image_preview" width = "150px" height ="150px"></div>
                </div>
            </div>
              <hr style="margin-top: 40px">
              <div class="col text-center text-sm-start">
                <a class="btn btn-link text-muted"
                style=" width: 140px;
                background-color: #2A6092;
                color: white !important;
                border-radius: 25px;" href="{{ url('/sube-tu-plaza6') }}"> <i class="fa-chevron-left fa me-2"></i>Atrás</a>
              </div>
              <div class="col text-center text-sm-end ">
                  {{-- <a class="btn btn-primary px-3"
                  style="color: white !important;
                  background-color: #2A6092;
                  width: 140px;
                  border-radius: 25px;" href="{{ url('/sube-tu-plaza8')  }}">Aceptar<i class="fa-chevron-right fa ms-2"></i>
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
