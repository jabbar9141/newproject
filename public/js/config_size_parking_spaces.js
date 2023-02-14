//FUNCTION FOR LARGO
$('#id_input_largo_parking_space').focus(function() {
    $(this).attr('placeholder', '4,96')
}).blur(function() {
    $(this).attr('placeholder', 'Largo')
})
document.getElementById("id_input_largo_parking_space").maxLength = "4";
//DEFINO LA ESTRUCURA DEL CAMPO
$('#id_input_largo_parking_space').bind('keyup paste', function(){
  this.value = this.value.replace(/[^0-9^,]/g, '');
});
var idco1 = document.getElementById('id_input_largo_parking_space')
idco1.addEventListener('keydown', function(event) {
  const key = event.key;
  if (key !== "Backspace") {
    if (idco1.value.length == 1) {
      idco1.value = idco1.value + ',';
    }
  }
}, false)
//END FOR FUNCTION FOR LARGO
//FUNCTION FOR ANCHO
$('#id_input_ancho_parking_space').focus(function() {
  $(this).attr('placeholder', '2,56')
}).blur(function() {
  $(this).attr('placeholder', 'Ancho')
})
document.getElementById("id_input_ancho_parking_space").maxLength = "4";
//DEFINO LA ESTRUCURA DEL CAMPO
$('#id_input_ancho_parking_space').bind('keyup paste', function(){
  this.value = this.value.replace(/[^0-9^,]/g, '');
});
var idco2 = document.getElementById('id_input_ancho_parking_space')
idco2.addEventListener('keydown', function(event) {
const key = event.key;
if (key !== "Backspace") {
  if (idco2.value.length == 1) {
    idco2.value = idco2.value + ',';
  }
}
}, false)
//END OF FUNCTION FOR ANCHO
//FUNCTION FOR ALTO
$('#id_input_alto_parking_space').focus(function() {
  $(this).attr('placeholder', '2,64')
}).blur(function() {
  $(this).attr('placeholder', 'Altura min')
})
document.getElementById("id_input_alto_parking_space").maxLength = "4";
//DEFINO LA ESTRUCURA DEL CAMPO
$('#id_input_alto_parking_space').bind('keyup paste', function(){
  this.value = this.value.replace(/[^0-9^,]/g, '');
});
var idco3 = document.getElementById('id_input_alto_parking_space')
idco3.addEventListener('keydown', function(event) {
const key = event.key;
if (key !== "Backspace") {
  if (idco3.value.length == 1) {
    idco3.value = idco3.value + ',';
  }
}
}, false)
//END OF FUNCTION FOR ALTO
//BLOQUEO LOS ESPACIOS
function ParametroSizeParking(string){
  return string.split(" ").join("");
};