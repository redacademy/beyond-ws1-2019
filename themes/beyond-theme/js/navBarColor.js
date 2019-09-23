jQuery(function($) {

    let navigation = document.getElementsByClassName('main-navigation')[0];
    const smallFont = document.getElementById('small-font');
    const normalFont = document.getElementById('normal-font');
    const bigFont = document.getElementById('big-font');
    // let $nav = $('header');
    let $win = $(window);
    let winH = $win.height(); // Get the window height.

    $win.on("scroll", function () {
        if ($(this).scrollTop() > winH ) {
            $(navigation).css({ 'background': 'linear-gradient(#fff, #fff, #fff)' });

        } else {
            $(navigation).css('background', 'linear-gradient(to bottom, rgba(0, 0, 0, 1) 0%, rgba(36, 36, 36, 0.84) 50%, rgba(0, 0, 0, 0) 100%)');

        }
    }).on("resize", function(){ // If the user resizes the window
       winH = $(this).height(); // you'll need the new height value
    });
});