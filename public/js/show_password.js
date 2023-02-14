//SCRIPT PARA EL LOGIN MODAL
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye-slash fa-eye");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
    });
//FIN DEL SCRIPT PARA EL LOGIN MODAL
//SCRIPT PARA EL REGISTER MODAL
    $(".toggle-password2").click(function() {
      $(this).toggleClass("fa-eye-slash fa-eye");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
      });
//FIN DEL SCRIPT PARA EL REGISTER MODAL
//SCRIPT PARA EL REGISTER MODAL REPETIR CONTRASEÑA
$(".toggle-password3").click(function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
  });
//FIN DEL SCRIPT PARA EL REGISTER MODAL REPETIR CONTRASEÑA
//SCRIPT PARA EL RESET PASSWORD
$(".toggle-password4").click(function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
  });
//FIN DEL SCRIPT PARA EL REPETIR RESET PASSWORD
//SCRIPT PARA EL CONFIRM RESET PASSWORD
$(".toggle-password5").click(function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
  });
//FIN DEL SCRIPT PARA EL CONFIRM REPETIR RESET PASSWORD