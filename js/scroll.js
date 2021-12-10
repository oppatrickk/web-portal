// Scroll
$(document).ready(function(){
    $('.main').height($(window).height());
    $(window).on("resize", function(){
        $('.main').height($(window).height());
    });
});

