// FUNCION DEL TOGGLE SWITCH
 function toggleCheck() {
  if(document.getElementById("myCheckbox").checked === true){
    $('.mb-5').addClass('col-sm-4');
    $('.mb-5').addClass('col-sm-6');
    document.getElementById("id_results_map").style.display = "block";
    document.getElementById("id_class_hide_map").style.width = "58.33333%";
  } else {
    $('.mb-5').removeClass('col-sm-6');
    $('.mb-5').addClass('col-sm-4');
    document.getElementById("id_results_map").style.display = "none";
    document.getElementById("id_class_hide_map").style.width = "99.5%";
          }
}; 
// FIN DE LA FUNCION DEL TOGGLE SWITCH
// FUNCION DEL TOGGLE SWITCH RESPINSIVE
    function toggleCheckResponsive() {
            document.getElementById("id_class_hide_map").style.display = "none";
            $('.map-side-lg').removeClass('class_results_map');
            document.getElementById("myCheckbox2").style.display = "none";
            document.getElementById("myCheckbox3").style.display = "block";
            document.getElementById("id_nav_filters_bar").style.display = "none";
        }; 
// FIN DE LA FUNCION DEL TOGGLE SWITCH RESPONSIVE
// FIN DE LA FUNCION DEL TOGGLE SWITCH
// SEGUNDA FUNCION DEL TOGGLE SWITCH RESPINSIVE
    function toggleCheckResponsive3() {
        document.getElementById("id_class_hide_map").style.display = "block";
        $('.map-side-lg').addClass('class_results_map');
        document.getElementById("myCheckbox2").style.display = "block";
        document.getElementById("myCheckbox3").style.display = "none";  
        document.getElementById("id_nav_filters_bar").style.display = "block";
    }; 
  
// FIN DE LA SEGUNDA FUNCION DEL TOGGLE SWITCH RESPONSIVE