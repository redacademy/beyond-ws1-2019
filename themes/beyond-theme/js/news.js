jQuery(function ($) {
  $.ajax({
    method: 'GET',
    url:
      'https://api.nytimes.com/svc/topstories/v2/' +
      'technology' +
      '.json?api-key=MCJhGoJthqCkQuDvJvgX3isw1LxKIpgO'
  }).done(function (data) {
    let cont = 0;
    $('.news').html('');
    $.each(data.results, function (key) {
      if (data.results[key].multimedia.length >= 5 && cont < 12) {
        try {
          cont = cont + 1;
          $('.news').append(
            `<li class="style">
              <a target="_blank" rel="noopener noreferrer" href='${data.results[key].url}'>
                <div class="image" style="background-image: url('${data.results[key].multimedia[4].url}')">
                  <div class="image2">
                    <p class="para">${data.results[key].abstract}</p>
                    </div>
                          </div>
                            </a>
                              </li>`
          );
          console.log(data);
        } catch (error) {
          console.log(error);
        }
      }
    });
  });
});
