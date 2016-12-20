// Custom global scripts
jQuery(document).ready(function ($) {
    'use strict';

    // Foundation Init
    $(document).foundation();


    // Mobile nav toggle
    $('#nav-mobile-toggle').on('click', function () {
        $('#nav-mobile').slideToggle();
    });

    $('.js-facts').click(function () {
        $('html, body').animate({
            scrollTop: $('.js-section-facts').offset().top
        }, 1200);
    });

    $('.js-section-facts').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '120px;'
    });

    $('.js--wp-1').waypoint(function (direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp').waypoint(function (direction) {
        $('.js--wp-2').addClass('animated bounceInLeft');
        $('.js--wp-3').addClass('animated bounceInRight');
        $('.js--wp-4').addClass('animated bounceInLeft');
        $('.js--wp-5').addClass('animated bounceInRight');
    }, {
        offset: '70%'
    });

}(jQuery));
