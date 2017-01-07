$(document).ready(function(){
    $("#nav-overlay").click(function(){
        $(".fullscreen").fadeIn('slow');
    });
    $("#nav-close-overlay").click(function(){
        $(".fullscreen").fadeOut('slow');
    });
});
