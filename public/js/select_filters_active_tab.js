//SELECT OPTION FOR THE FIRST OPTION
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() == 0) {
      $("#id_select_filters_option1").addClass("class_options_modal_filters_box_selected");
    }
  });
});
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 20) {
        $("#id_select_filters_option1").removeClass("class_options_modal_filters_box_selected");
    } 
  });
});
//END OF SELECT OPTION FOR THE FIRST OPTION
//SELECT OPTION FOR THE FIRST OPTION
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 20) {
      $("#id_select_filters_option2").addClass("class_options_modal_filters_box_selected");
    } else {
        $("#id_select_filters_option2").removeClass("class_options_modal_filters_box_selected");
    }
  });
});
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
        $("#id_select_filters_option2").removeClass("class_options_modal_filters_box_selected");
    } 
  });
});
//END OF SELECT OPTION FOR THE FIRST OPTION
//SELECT OPTION FOR THE THIRD OPTION
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $("#id_select_filters_option3").addClass("class_options_modal_filters_box_selected");
    } else{
        $("#id_select_filters_option3").removeClass("class_options_modal_filters_box_selected");
    }
  });
});
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
        $("#id_select_filters_option3").removeClass("class_options_modal_filters_box_selected");
    } 
  });
});
//END OF SELECT OPTION FOR THE THIRD OPTION
//SELECT OPTION FOR THE FOUR OPTION
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $("#id_select_filters_option4").addClass("class_options_modal_filters_box_selected");
    } else{
        $("#id_select_filters_option4").removeClass("class_options_modal_filters_box_selected"); 
    }
  });
});
//END OF SELECT OPTION FOR THE FOUR OPTION