//CHANGE FUNCTION TO LOGIN
$( "#change_to_login" ).click(function() {
    $('#modal_register').modal('hide');
    $('#modal_login').modal('show');
  });
//FIN DEL CHANGE FUNCTION TO LOGIN
//CHANGE FUNCTION TO REGISTER
  $( "#change_to_register" ).click(function() {
    $('#modal_login').modal('hide');
    $('#modal_register').modal('show');
  });
//FIN DEL CHANGE FUNCTION TO LOGIN