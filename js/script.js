// JavaScript Document
// open a video show hide script
$(document).on('ready', function() {
    "use strict";
    $(".open").on('click', function() {
        $(".open-now").show(300);
    });
    $(".close-video").on('click', function() {
        $(".open-now").hide(300);
    });

    $("#semi-trailer").owlCarousel({
        items: 1,
        lazyLoad: true,
        navigation: false,
        autoPlay: 5000

    });
});
