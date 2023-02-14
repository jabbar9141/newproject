<div class="class_modal_login modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="class_modal_content modal-content">
      <button class="class_button_close_modal btn-close" type="button" data-bs-dismiss="modal" aria-hidden="true"></button>
      <div class="class_content_modal_login modal-body">
      <p class="class_title_content_modal_login">
        <?php

            $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='text1_modal_login'");
            foreach ($query1 as $result_query1){
            echo $result_query1->lang_es;
            };
        ?>
        </p>

        <img class="class_login_icon_modal" src="img/login_icon.png">

        @if (Session::has('error'))
           <p class="class_error_texts_modal">{{Session::get('error')}}</p>
        @endif

        <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="email"  name = 'email'  class="class_input_content_modal_login form-control class_input_box" placeholder="<?php
                $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_modal_login'");
                foreach ($query2 as $result_query2){
                echo $result_query2->lang_es;
                };
            ?>"required>

            <input type="password" name = 'password' id="password-field" class="class_input_content_modal_login form-control class_input_box" placeholder="<?php
                $query3 = DB::select("SELECT * FROM gr_texts WHERE variable='text3_modal_login'");
                foreach ($query3 as $result_query3){
                echo $result_query3->lang_es;
                };
            ?>"required>
            <span toggle="#password-field" class="class_eye_show_password fa fa-fw fa-eye-slash field-icon toggle-password"></span>
            <div class="class_div_remember_login_password">
                <a href="{{route('email-view')}}"   class="class_remember_login_password"><?php
                    $query4 = DB::select("SELECT * FROM gr_texts WHERE variable='text4_modal_login'");
                    foreach ($query4 as $result_query4){
                    echo $result_query4->lang_es;
                    };
                ?></a>
            </div>
            <button type="submit" class="class_login_button_modal class_input_box form-control">
                <?php
                    $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='text5_modal_login'");
                    foreach ($query5 as $result_query5){
                    echo $result_query5->lang_es;
                    };?>
            </button>

        </form>



        <br>
        <p class="class_text_content_modal_login"><?php
            $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='text6_modal_login'");
            foreach ($query6 as $result_query6){
            echo $result_query6->lang_es;
            };
            ?>, <a id="change_to_register" href="#" class="class_register_button_modal"><?php
            $query7 = DB::select("SELECT * FROM gr_texts WHERE variable='text7_modal_login'");
            foreach ($query7 as $result_query7){
            echo $result_query7->lang_es;
            };
            ?></a>
        </p>
    </div>
        <p class="class_footer_text_modal_login"><?php
            $query8 = DB::select("SELECT * FROM gr_texts WHERE variable='text8_modal_login'");
            foreach ($query8 as $result_query8){
            echo $result_query8->lang_es;
            };
            ?> <a href="#" class="class_links_footer_text_modal_login"><?php
            $query9 = DB::select("SELECT * FROM gr_texts WHERE variable='text9_modal_login'");
            foreach ($query9 as $result_query9){
            echo $result_query9->lang_es;
            };
            ?></a> <?php
            $query10 = DB::select("SELECT * FROM gr_texts WHERE variable='text10_modal_login'");
            foreach ($query10 as $result_query10){
            echo $result_query10->lang_es;
            };
            ?> <a href="#" class="class_links_footer_text_modal_login"><?php
            $query11 = DB::select("SELECT * FROM gr_texts WHERE variable='text11_modal_login'");
            foreach ($query11 as $result_query11){
            echo $result_query11->lang_es;
            };
            ?></a> <?php
            $query12 = DB::select("SELECT * FROM gr_texts WHERE variable='text12_modal_login'");
            foreach ($query12 as $result_query12){
            echo $result_query12->lang_es;
            };
            ?>
        </p>
    </div>
  </div>
</div>



