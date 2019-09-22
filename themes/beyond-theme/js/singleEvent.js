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
            // if (response[0]._qod_quote_source_url !== '' && response[0]._qod_quote_source !== '') {
            //     quote = `<a class="quote-source-url" href="${response[0]._qod_quote_source_url}">
            // <span class="quote-source">${response[0]._qod_quote_source} </span></a>`;
            //     comma = ',';
            // } else if (response[0]._qod_quote_source_url === '' && response[0]._qod_quote_source !== '') {
            //     quote = `<span class="quote-source">${response[0]._qod_quote_source} </span>`;
            //     comma = ',';
            // } else {
            //     quote = '';
            //     comma = '';
            // }
            //     $homeQuotes.html(`<div class="quote-para">${response[0].content.rendered}</div>
            // <div class="entry-meta">
            //     <div class="quote-author"> - ${response[0].title.rendered}</div>
            //     ${comma}${quote}
            // </div>`);


        });
    });

});
