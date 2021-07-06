$(function() {
    $('.toggle_menu').click(function() {
        $('#list').slideToggle();
        $(this).next('ul').slideToggle();
    });
    $('li').click(function(e) {
        $(this).children('ul').slideToggle();
        $(this).toggleClass('open', 10);
        e.stopPropagation();
    });

    $('.modal-open').each(function() {
        $(this).on('click', function() {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn(300);
            return false;
        });
    });
    $('.modal-close').on('click', function() {
        $('.js-modal').fadeOut(200);
        return false;
    });
});