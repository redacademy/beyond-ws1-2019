jQuery(document).ready(function ($) {
    $('i').hide();
    $('.cfs-photo').on('click', function (event) {
        event.preventDefault();
        $(this).siblings('i').show();
        $(this).parent().addClass('desktop-member');
        $(this).parent().removeClass('cfs-member');
        $('.desktop-member').show();
    });
    $('i').on('click', function (event) {
        event.preventDefault();
        $(this).parent().removeClass('desktop-member');
        $(this).parent().addClass('cfs-member');
        $('.cfs-member').show();
        $(this).hide();
    });
})