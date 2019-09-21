const smallFont = document.getElementById('small-font');
const normalFont = document.getElementById('normal-font');
const bigFont = document.getElementById('big-font');

console.log(document.documentElement.style["font-size"])

function changeFontSize(target) {
    let html = document.documentElement;

    if (target === bigFont) {
        html.style.fontSize = "110%";
    } else if (target === normalFont) {
        html.style.fontSize = "100%";
    } else if (target === smallFont) {
        html.style.fontSize = "90%"
    }
}