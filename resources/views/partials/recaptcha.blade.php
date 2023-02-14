<?php
 use Illuminate\Support\Facades\DB;
?>
<!--DEFINO EL RECAPTCHA-->
<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php $query1 = DB::select("SELECT value FROM gr_config WHERE variable='recaptcha_web_key'"); foreach ($query1 as $result_query1) { echo $result_query1->value; }?>"></script>
    <script>
    $('#form').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php $query2 = DB::select("SELECT value FROM gr_config WHERE variable='recaptcha_secret_key'"); foreach ($query2 as $result_query2) { echo $result_query2->value; }?>', {action: 'registro'}).then(function(token) {
                $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form').prepend('<input type="hidden" name="action" value="registro">');
                $('#form').unbind('submit').submit();
            });;
        });
  });
  </script>
<!--FIN DE DEFINO EL RECAPTCHA-->
