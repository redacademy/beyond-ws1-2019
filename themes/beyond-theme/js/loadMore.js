jQuery(document).ready(function($) {
  $('.cfs-member')
    .slice(0, 2)
    .css('display', 'flex');
  $('#loadMore').on('click', function(event) {
    event.preventDefault();
    $('.cfs-member:hidden')
      .slice(0, 4)
      .slideDown()
      .css('display', 'flex');
  });
});
