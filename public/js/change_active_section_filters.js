$(window).scroll(function() {        
    var scroll = $(window).scrollTop();    
    if (scroll >= 2) {
       $("#option_filters_1").addClass("class_options_modal_filters_box_selected");    
    }else{
       $("#option_filters_1").removeClass("class_options_modal_filters_box_selected");
    }
});