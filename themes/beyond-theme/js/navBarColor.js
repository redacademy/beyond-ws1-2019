jQuery(function($) {

    const navigation = document.getElementsByClassName('main-navigation')[0];
    const smallFont = document.getElementById('small-font');
    const normalFont = document.getElementById('normal-font');
    const bigFont = document.getElementById('big-font');
    const menuList = document.querySelectorAll('.menu .menu-item');
    const menuItems = document.querySelectorAll('.menu li a');
    const searchIcon = document.querySelector('.fa-search');
    const siteLogo = document.querySelector('.white-icon');

    let $win = $(window);

        if( $(window).width() > 800) {
                $win.on('scroll', function () {
                    if ($(this).scrollTop() > $win.height()) {
                        $(navigation).css({ 'background': 'linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 50%,rgba(255,255,255,0) 100%)' });
                        $(smallFont).css({ 'color': '#62284e' });
                        $(normalFont).css({ 'color': '#62284e' });
                        $(bigFont).css({ 'color': '#62284e' });
                        $(menuItems).css({ 'color': '#62284e' });
                        $(menuList).mouseover(function() {
                            $(this).css({ 'border-bottom': '2px solid #62284e' });
                        }).mouseout(function() {
                            $(this).css({ 'border-bottom': 'none' });
                        })
                        $(searchIcon).css({ 'color': '#62284e' });
                        $(siteLogo).css({ 'background-image': `url(${red_vars.template_uri}/Media/logo/svg/logo-header.svg)` });
                    } else {
                        $(navigation).css('background', 'linear-gradient(to bottom, rgba(0, 0, 0, 1) 0%, rgba(36, 36, 36, 0.84) 50%, rgba(0, 0, 0, 0) 100%)');
                        $(smallFont).css({ 'color': '#fff' });
                        $(normalFont).css({ 'color': '#fff' });
                        $(bigFont).css({ 'color': '#fff' });
                        $(menuItems).css({ 'color': '#fff' });
                        $(menuList).mouseover(function() {
                            $(this).css({ 'border-bottom': '2px solid #fff' });
                        }).mouseout(function() {
                            $(this).css({ 'border-bottom': 'none' });
                        })
                        $(searchIcon).css({ 'color': '#fff' });
                        $(siteLogo).css({ 'background-image': `url(${red_vars.template_uri}/Media/logo/logo-white.svg)` });
                    }
                })
        }
});