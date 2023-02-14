<!-- Modal -->

<div class="class_modal_login modal fade" id="myForgetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="class_modal_content modal-content">
        <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
        <div class="class_content_modal_login modal-body">
        <p class="class_title_content_modal_login">
            Nueva contraseña<br><br>
        </p>
        <!-- <img class="class_login_icon_modal" src="img/login_icon.png"> -->
        @if ($errors->any())
        <div class="class_error_texts_modal">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif

       @if (Session::has('error'))
         <p class="class_error_texts_modal">{{Session::get('error')}}</p>
       @endif

        <form action="{{route('reset-password')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            @if (Session::has('token'))
               <input type="hidden" name="token" value="{{Session::get('token')}}">
            @endif

            <!-- <input type="password"
                   name = 'old_password'
                   class="class_input_content_modal_login form-control class_input_box"
                   placeholder="Enter Old Password"> -->
            <input type="password"
            id="password-field4"
                   name = 'new_password'
                   class="class_input_content_modal_login form-control class_input_box"
                   placeholder="Nueva contraseña">
                   <span toggle="#password-field4" class="class_eye_show_password fa fa-fw fa-eye-slash field-icon toggle-password"></span>
            <input type="password"
            id="password-field5"
                   name = 'confirm_password'
                   class="class_input_content_modal_login form-control class_input_box"
                   placeholder="Confirmar contraseña">
                   <span toggle="#password-field5" class="class_eye_show_password fa fa-fw fa-eye-slash field-icon toggle-password"></span>
            <button type="submit"
                    class="class_login_button_modal class_input_box form-control mb-4">Confirmar</button>
        </form>
      </div>

      </div>
    </div>
  </div>
