<div class="class_modal_login modal fade" id="mySolicitudesModel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="class_modal_content modal-content">
        <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
        <div class="class_content_modal_login modal-body">
        <p class="class_title_content_modal_login">
            Messages
        </p>

        <img class="class_login_icon_modal" src="img/login_icon.png">
        @if (Session::has('message'))
           <p class="text-danger">{{Session::get('message')}}</p>
        @endif
      </div>

      </div>
    </div>
  </div>
