$(function() {
    $(window).bind('scroll', function() {
        var navHeight = 80; // custom nav height
        ($(window).scrollTop() > navHeight) ? $('.navbar-Top').addClass('goToTop'): $('.navbar-Top').removeClass('goToTop');
    });
});