<div class="class_modal_login modal fade" id="salir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="class_modal_content modal-content">
        <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
        <div class="class_content_modal_login modal-body">
        <p class="class_title_content_modal_login">
            ¿Quieres salir de subir la plazar?
        </p>

        {{-- <img class="class_login_icon_modal" src="img/login_icon.png"> --}}

          <p class="text">Si sales ahora perderás los cambios que hayas hecho hasta ahora.</p>
            <div class="class_row_responsive row">
                <div class="col-md-6">
                     {{-- <a href="">Cancelar</a> --}}
                     <a class="btn btn-link text-muted"
                        style=" width: 140px;
                        background-color: #2A6092;
                        color: white !important;
                        border-radius: 25px;" href="">Cancelar</a>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-link text-muted"
                    style=" width: 140px;
                    background-color: #2A6092;
                    color: white !important;
                    border-radius: 25px;" href="{{route('home')}}">Salir</a>
                </div>
            </div>
      </div>

      </div>
    </div>
  </div>
