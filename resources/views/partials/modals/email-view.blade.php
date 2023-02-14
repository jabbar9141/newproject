<div class="class_modal_login modal fade" id="myEmailView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="class_modal_content modal-content">
        <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
        <div class="class_content_modal_login modal-body">
        <p class="class_title_content_modal_login">
        ¿Has olvidado tu contraseña?
        </p>

<div class="class_space_reset_password_modal_1"></div>


        <a class="class_text_modal_reset_password">
        Por favor, escribe tu correo electrónico.<br>
        Te enviaremos las instrucciones para restablecer tu contraseña.
</a>
<div class="class_space_reset_password_modal_1"></div>

        @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
        <form action="{{route('forget-password-email-varification')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="email"
                   name = 'email'
                   class="class_input_content_modal_login form-control class_input_box"
                   placeholder="Correo electrónico" required>

            <button type="submit"
                    class="class_button_reset_password_modal_reset class_input_box form-control mb-4">Restablecer contraseña</button>
        </form>
      </div>

      </div>
    </div>
  </div>
