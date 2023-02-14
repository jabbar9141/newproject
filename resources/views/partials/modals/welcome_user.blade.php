

<div class="class_modal_login modal fade" id="welcomeUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="class_modal_content modal-content">
        <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
        <div class="class_content_modal_login modal-body">
        <p class="class_title_content_modal_login">
        ¡Ya estás registrado!
        </p>

        <img class="class_logo_verify_user_modal mt-4" src="{{asset('img/check.png')}}">
          <p class="mt-4">
            Bienvenido a Garer
          </p>
          <div class="class_space_modal_verify_1"></div>
          <a href="{{route('login-view')}}" class="class_button_close_verify_user_modal mb-4 mt-4"
            {{-- data-bs-dismiss="modal" --}}
            >Cerrar</a>
          </div>  

<div class="class_space_modal_verify_2"></div>

      </div>
    </div>
  </div>
