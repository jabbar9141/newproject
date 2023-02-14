<!DOCTYPE html>
<html lang="en">
<?php header('Access-Control-Allow-Origin: *'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garer</title>
</head>

<style>
  @font-face {
    font-family: 'altone-regular';
    /* src: url('http://localhost:8000/fonts/AltoneTrial-Regular.ttf'); */
    src: url('{{asset('fonts/AltoneTrial-Regular.ttf')}}');
}
  html{
  border-right: 3em solid #2A6092;
  border-left: 3em solid #2A6092;
  font-family:  altone-regular !important;
}
.class_text_email{
margin-bottom: 3em;
margin-left: 2em;
margin-right: 2em;
}

.class_img_logo_email{
  width: 100px;
  margin-top: 2em;
  margin-left: 2em;
}
.class_img_letter_email{
  width: 6em;
  margin-top: 2em;
}
.class_container_logo_email{
  text-align: left;
}
.class_container_content_email{
  text-align: center;
}
.class_button_confirm_email{
  border-radius: 3em;
  background-color: #2A6092;
  color: white;
  padding: 10px 32px;
  text-decoration: none;
  cursor: pointer;
}
.class_word_garer_email{
  font-size: 20px;
  color: #2A6092;
  font-weight: bold;
}
.class_title_email_register{
  text-align: center;
  font-size: 26px;
}
.class_line_divisor_email{
  border: 0.1px solid #d8dce1;
  margin-top: 3em;
  width: 25em;
}
.class_img_logo_email_footer{
  width: 75px;
  margin-top: 1.8em;
}
.class_text_email_footer{
margin-bottom: 3em;
margin-left: 2em;
margin-right: 2em;
font-size: 11.5px;
}
</style>


<body>
    <div class="class_container_logo_email">


<img class="class_img_logo_email" src="{{asset('img/logo.png')}}">
     </div>
     <div class="class_container_content_email">
       <img class="class_img_letter_email" src="{{asset('img/email_letter.png')}}">
       <p class="class_title_email_register">
Confirma tu e-mail
</p>
       <p class="class_text_email">
         <b>{{$user->name}}</b> , ¡Estás a un paso de alquilar tu plaza de parking de manera 100% online!<br><br>
          Simplemente haz click en el botón inferior para confirmar que tu dirección de email es válida.<br>
          Esto también asegura tu cuenta y todas las informaciones intercambiadas entre tu y <a class="class_word_garer_email">Garer</a>.
       </p>
      <a href="{{ url('/user/verify/' .$user->verifyUser->token) }}" class="class_button_confirm_email" type="button">Verificar</a>

    

      <hr class="class_line_divisor_email">


<img class="class_img_logo_email_footer" src="{{asset('img/logo.png')}}">
<p class="class_text_email_footer">
         © GARER, Garerapp S.L. Carrer Brusi 9, Barcelona.<br><br>
          Este mensaje se envió a {{$user->email}}<br>
          A fín de proteger tu cuenta, no reenvíes este correo electrónico a nadie.
       </p>

  </div>
  </div>
</body>

</html>
