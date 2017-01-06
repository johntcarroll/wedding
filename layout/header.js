$(document).ready(function(){
    $("#nav-overlay").click(function(){
        $("#fullscreen-menu").removeClass('hidden-xl-down');
    });
    $("#nav-close-overlay").click(function(){
        $("#fullscreen-menu").addClass('hidden-xl-down');
    });
});
