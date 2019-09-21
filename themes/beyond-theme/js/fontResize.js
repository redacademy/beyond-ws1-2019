const smallFont = document.getElementById('small-font');
const normalFont = document.getElementById('normal-font');
const bigFont = document.getElementById('big-font');

function changeFontSize(target) {
    let allText = document.getElementsByClassName('text-header')[0];
    let computedStyle = window.getComputedStyle(allText, null).getPropertyValue('font-size');
    // let computedStyle = window.getComputedStyle
    //       ? getComputedStyle(allText)
    //       : allText.currentStyle;
    let fontSize;
  
    if (computedStyle) {
        fontSize = parseFloat(computedStyle && computedStyle.fontSize);
  
        if (target == bigFont) {
          for (fontSize = 100; fontSize < 120; fontSize++) {
            fontSize += 5;
          }
        }  else if (target == normalFont) {
            for (fontSize = 75; fontSize > 100; fontSize++) {
                fontSize += 5;
            }
        } else if (target == smallFont) {
          for (fontSize = 100; fontSize > 80; fontSize--) {
            fontSize -= 5;
          }
        }
        allText.style.fontSize = fontSize + "px";
    }
  }