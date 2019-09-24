jQuery(document).ready(function ($) {

    $('.close-popup').on('click', function (event) {
        $(event.currentTarget).parent().parent().hide();
    })

    $('.initial-box').on('click', function (event) {
        event.preventDefault();

        const id = $(event.currentTarget).attr('id');
        console.log(id);
        const $popup = $('[data-popup="' + id + '"]');

        $popup.show();

    });

});
