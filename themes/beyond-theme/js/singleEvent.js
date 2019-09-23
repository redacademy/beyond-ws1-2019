jQuery(document).ready(function ($) {

    $('.past-event').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'GET',
            url: red_vars.rest_url + 'wp/v2/event',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
            }
        }).done(function (response) {
            console.log(response);
            // $('.singleEvent').html
            alert(`<p class="event-title">${response[0].title.rendered}</p>
            <div class="event-description">${response[0].content.rendered}</div>
            <img class="event-image">${response[0]._links['wp:attachment'][0].href}`)






        });
    });

});
