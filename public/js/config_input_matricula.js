$('#id_input_matricula').focus(function() {
    $(this).attr('placeholder', '0000-AAA')
}).blur(function() {
    $(this).attr('placeholder', '<?php
$query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_sub_header_filters'");
foreach ($query2 as $result_query2){
  echo $result_query2->$lang;
};
?>')
})
document.getElementById("id_input_matricula").maxLength = "8";
//DEFINO LA ESTRUCURA DEL CAMPO
var idco = document.getElementById('id_input_matricula')
idco.addEventListener('keydown', function(event) {
  const key = event.key;
  if (key !== "Backspace") {
    if (idco.value.length == 4) {
      idco.value = idco.value + '-';
    }
  }
}, false)
//BLOQUEO LOS ESPACIOS
function ParametroMatricula(string){
    return string.split(" ").join("");
}