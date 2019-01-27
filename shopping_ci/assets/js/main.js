$(document).ready(function () {
    /* ===================================
     Loading Timeout
     ====================================== */
    setTimeout(function () {
        $("#loader").fadeOut("slow");
    }, 2000);
});

jQuery(function ($) {
    "use strict";
    //check for browser os
    var isMobile = false;
    var isiPhoneiPad = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobile = true;
    }

    if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        isiPhoneiPad = true;
    }

    // sections background image from data background
    var pageSection = $(".parallax, section, .bg-img");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    /* ===================================
    Color Chosse
     ====================================== */

    $(".color-choose input").on("click", function () {
        var headphonesColor = $(this).attr("data-image");
        $(".active").removeClass("active");
        $(".product-color-imgs img[data-image = " + headphonesColor + "]").addClass("active");
        $(this).addClass("active");
    });

    /* ===================================
     Header Appear On Scroll
     ====================================== */

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 70) {
            // Set position from top to add class
            $("header").addClass("sticky header-appear");
        } else {
            $("header").removeClass("sticky header-appear");
        }
    });

    /* =====================================
            Scroll
     ====================================== */

    //scroll to appear
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) $(".scroll-top-arrow").fadeIn("slow");
        else $(".scroll-top-arrow").fadeOut("slow");
    });
    //Click event to scroll to top
    $(document).on("click", ".scroll-top-arrow", function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    //scroll sections
    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $("html,body").animate({ scrollTop: $(this.hash).offset().top }, 750);
    });

    /* =====================================
            Wow
     ====================================== */

    if ($(window).width() > 767) {
        var wow = new WOW({
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: false,
            live: true
        });
        new WOW().init();
    }

    /*==============================================================
                Owl Carousel
      ==============================================================*/
    // Testimonials
    var owltestimonials = $(".owl-t");
    owltestimonials.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    var owlproduct = $(".owl-p");
    owlproduct.owlCarousel({
        nav: false,
        dots: true,
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $.fn.ui_device_slider = function () {
        var id = this.attr("id");
        var items = this.find(".item").length;
        var z = false;
        var y = false;
        console.log(id);
        var owl = this.owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            items: 1
        });
        owl.on("changed.owl.carousel", function (event) {
            z = true;
            if (!y) {
                var slide = event.relatedTarget.normalize(event.item.index, true) - 2;
                if (slide < 0) {
                    slide = items + slide + 1;
                } else {
                    slide = slide + 1;
                }
                $(".collapse-feature.active").removeClass("active");
                $('[data-toggle_screen="' + slide + '"]').addClass("active");
            }
            z = false;
        });

        $(".collapse-feature").click(function () {
            $(".collapse-feature.active").removeClass("active");
            $(this).addClass("active");
            var i = $(this).data("toggle_screen") - 1;
            owl.trigger("to.owl.carousel", i);
        });
    };

    if ($(".feature-slider").length) {
        $(".feature-slider .screens").each(function () {
            $(this).ui_device_slider();
        });
    }
    /*==============================================================
                Product Single
      ==============================================================*/
    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-single',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });

});
