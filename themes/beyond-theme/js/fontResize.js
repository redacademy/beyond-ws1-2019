const smallFont = document.getElementById('small-font');
const normalFont = document.getElementById('normal-font');
const bigFont = document.getElementById('big-font');

function changeFontSize(target) {
    let html = document.documentElement;

    if (target === bigFont) {
        html.style['font-size'] = '110%';
    } else if (target === normalFont) {
        html.style['font-size'] = '100%';
    } else if (target === smallFont) {
        html.style['font-size'] = '90%';
    }
}

changeFontSize();