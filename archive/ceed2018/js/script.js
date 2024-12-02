// CEED 2016 CSS Document
// By Design & Dev Team. (Author: Naveed Ahmed)

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.ceed-logo').css("top", "7px");
        } else {
            $('.ceed-logo').css("top", "-50px");
        }
    });
    function show_menu() {
        $('.fly-menu').css("left", "0");
        $('#hamburger').hide();
        $('.overlay').show();
        $('.close-menu').show();
    }
    function close_menu() {
        $('.fly-menu').css("left", "200%");
        $('.close-menu').hide();
        $('.overlay').hide();
        $('#hamburger').show();
    }
    $('#hamburger').click(function () {
        show_menu();
    });
    $('.close-menu').click(function () {
        close_menu();
    });
    $('ul.fly-menu a').click(function () {
        close_menu();
    });
});