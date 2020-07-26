$(document).ready(function() {
    $('.open-menu-icon, .backgroud-transparent').click(function() {
        $('body').toggleClass('open-menu');
    });

    $('#book-schedule').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-repair').removeClass('open-menu');
    });

    $('#segment-order').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-segment').removeClass('open-menu');
    });


    $('#action-link').click(function() {
        $('html, body').animate({scrollTop: $('#action').offset().top}, 700);
    });

    $('.open-search-icon').click(function() {
        $('body').toggleClass('open-search');
    });

    $('.menu-link').click(function() {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });


    $('#login-button').click(function() {
        $('body').toggleClass('show-login');
    });

    $('.close-popup, .btn-cancel').click(function() {
        $('body').removeClass('open-segment open-repair show-login');
    });


});
