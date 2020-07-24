
$(document).ready(function() {
    $('.open-menu-icon, .backgroud-transparent').click(function() {
        $('body').toggleClass('open-menu');
    });

    $('#book-schedule').click(function() {
        $('html, body').animate({scrollTop: $('#in-home-service').offset().top}, 700);
        $('.online').addClass('btn-focus');
        setTimeout(function() {
            $('.online').removeClass('btn-focus');
        }, 3000);
    });


    $('#action-link').click(function() {
        $('html, body').animate({scrollTop: $('#action').offset().top}, 700);
    });



    $('.online, .close-popup').click(function() {
        $('body').addClass('open-repair');
    });

    $('#segment-order, .close-popup').click(function() {
        $('body').addClass('open-segment');
    });

    $('.close-popup').click(function() {
        $('body').removeClass('open-segment open-repair');
    });


});
