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
    
    $("#mapchart").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-five").offset().top - navHeight
        },500);
    });

    $("#purchase").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-six").offset().top - navHeight
        },500);
    });

    $("#payment").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-eight").offset().top - navHeight
        },500);
    });

    $("#pricelist").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-nine").offset().top - navHeight
        },500);
    });

    $("#plans").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-plan").offset().top - navHeight
        },500);
    });

    $("#documents").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".section-eleven").offset().top - navHeight
        },500);
    });
    
    $("#contactus").click(function () {
        var navHeight = $(".header_nav .navbar").outerHeight();
        $("html, body").animate({
            scrollTop: $(".footer-section").offset().top - navHeight
        },500);
    });

    $("form.searchBox").submit(function (e) {
        var postData = $(this).serializeArray();
        postData[postData.length] = {
            name: "data",
            value: "main-table",
        };

        $([document.documentElement, document.body]).animate({
                scrollTop: $(".section-ten").offset().top,
            },
            300
        );

        $.ajax({
            url: actionLink,
            type: "POST",
            data: postData,
            success: function (data, textStatus, jqXHR) {
                $("html, body").animate({
                        scrollTop: $("#pricelist").offset().top - navHeight,
                    },
                    2000
                );
                $(".tab_table").html(data);
            },
            error: function (request, error) {
                console.log(error);
            },
        });
        e.preventDefault();
    });
});