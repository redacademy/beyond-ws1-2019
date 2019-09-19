
jQuery(document).ready(function ($) {
    $('.cfs-member').slice(0, 2).css('display', 'flex');
    $('#loadMore').on('click', function (event) {
        event.preventDefault();
        $('.cfs-member:hidden').slice(0, 2).slideDown().css('display', 'flex');
    });

    $('.event').slice(0, 2).css('display', 'block');
    $('#loadMore').on('click', function (e) {
        e.preventDefault();
        $('.event:hidden').slice(0, 2).slideDown().css('display', 'block');
    });
})