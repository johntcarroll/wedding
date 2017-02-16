$(document).ready(function() {

    $('.animated-link').on('click touchend', function(e) {
        var el = $(this);
        var link = el.attr('href');
        window.location = link;
    });

});