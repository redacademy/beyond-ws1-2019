jQuery(document).ready(function ($) {
    $('.fa-times').hide();
    $('.cfs-photo').on('click', function (event) {
        event.preventDefault();
        $(this).siblings('.fa-times').show();
        $(this).parent().addClass('desktop-member');
        $(this).parent().removeClass('cfs-member');
        $('.desktop-member').show();
    });
    $('.fa-times').on('click', function (event) {
        event.preventDefault();
        $(this).parent().removeClass('desktop-member');
        $(this).parent().addClass('cfs-member');
        $('.cfs-member').show();
        $(this).hide();
    });
})