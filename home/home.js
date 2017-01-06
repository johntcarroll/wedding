$(document).ready(function(){
    $("#nav-overlay").click(function(){
        $("#fullscreen-menu").removeClass('hidden');
    });
    $("#nav-close-overlay").click(function(){
        $("#fullscreen-menu").addClass('hidden');
    });
});
