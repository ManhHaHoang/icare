$(document).ready(function() {
    $('.open-menu-icon, .backgroud-transparent').click(function() {
        $('body').toggleClass('open-menu');
    });

    $('#book-schedule').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-repair');
    });


    $('#action-link').click(function() {
        $('html, body').animate({scrollTop: $('#action').offset().top}, 700);
    });

    $('.menu-link').click(function() {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });

    $('#segment-order, .close-popup').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-segment');
    });



    $('#login-button').click(function() {
        $('body').toggleClass('show-login');
    });

    $('.close-popup').click(function() {
        $('body').removeClass('open-segment open-repair show-login');
    });


});
