$(document).ready(function(){
    AOS.init();

    var $navbar = $(".header_nav .navbar");
    adjustheader();

    $(window).scroll(function() {
        adjustheader();
    });

    function adjustheader(){
        if ($(window).scrollTop() > 138) {
            if (!$navbar.hasClass("sticky-nav")) {
                $navbar.addClass("sticky-nav");
            }
        } else {
            $navbar.removeClass("sticky-nav");
        }
    }

    $("#project").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-four").offset().top - navHeight
        },500);
    });

    $("#city").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-three").offset().top - navHeight
        },500);
    });
    
    $("#developer").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });
    /*
    $("#project").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });

    $("#city").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });

    $("#developer").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });

    $("#project").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });

    $("#city").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });

    $("#developer").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-two").offset().top - navHeight
        },500);
    });
    */
});