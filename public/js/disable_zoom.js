$(document).ready(function() {
    $(document).keydown(function(event) {
        if (event.ctrlKey == true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109' || event.which == '187' || event.which == '189')) {
            alert('Zoom deshabilitado');
            event.preventDefault();
           
        }
    });
    $(window).bind('mousewheel DOMMouseScroll', function(event) {
        if (event.ctrlKey == true) {
            alert('Zoom deshabilitado');
            event.preventDefault();
        }
    });
});
document.addEventListener("gesturestart", function(e) {
    e.preventDefault();
    document.body.style.zoom = 0.99;
});

document.addEventListener("gesturechange", function(e) {
    e.preventDefault();

    document.body.style.zoom = 0.99;
});
document.addEventListener("gestureend", function(e) {
    e.preventDefault();
    document.body.style.zoom = 1;
});