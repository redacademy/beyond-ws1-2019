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

        // $.ajax({
        //     method: 'GET',
        //     url: red_vars.rest_url + 'wp/v2/event',
        //     beforeSend: function (xhr) {
        //         xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        //     }
        // }).done(function (response) {
        //     console.log(response);

        //     $('.singleEvent').show();

        //     let count = 0;
        //     response.forEach(function (element, index) {

        //         if (count < 6) {
        //             count += 1;
        //             // const imgUrl = response2[0] && response2[0].guid ? response2[0].guid.rendered : null;
        //             $('.singleEvent').html(`<p class="event-title">${response[index].title.rendered}</p>
        //             <div class="event-description">${response[index].content.rendered}</div>
        //             <img class="event-image" src="${response[index].guid.rendered}">`);
        //         }

        //         $.ajax({
        //             method: 'GET',
        //             url: response[index]._links['wp:attachment'][0].href,
        //             beforeSend: function (xhr) {
        //                 xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        //             }
        //         }).done(function (response2) {
        //             const imgUrl = response2[0] && response2[0].guid ? response2[0].guid.rendered : null
        //             $('.singleEvent').html(`<p class="event-title">${response[index].title.rendered}</p>
        //                 <div class="event-description">${response[index].content.rendered}</div>
        //                 <img class="event-image" src="${imgUrl}">`);
        //         })


        //     });


        // });
    });

});
