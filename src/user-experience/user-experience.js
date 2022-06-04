const colorItems = Array.from(document.querySelectorAll('.user-experience__colors-item'));

colorItems.forEach(($colorItem) => {
    setColorName($colorItem);
});

function setColorName($wrapper) {
    const rgbColor = window.getComputedStyle($wrapper).backgroundColor;
    const $title = $wrapper.querySelector('.animation__title');

    $title.innerText = `#${getHexRGBColor(rgbColor)}`;
}

function getHexRGBColor(color) {
    color = color.replace(/\s/g, "");
    let aRGB = color.match(/^rgb\((\d{1,3}[%]?),(\d{1,3}[%]?),(\d{1,3}[%]?)\)$/i);

    if (aRGB) {
        color = '';
        for (let i = 1; i <= 3; i++) {
            color += Math.round((aRGB[i][aRGB[i].length - 1] == "%" ? 2.55 : 1) * parseInt(aRGB[i])).toString(16).replace(/^(.)$/, '0$1');
        }
    } else {
        color = color.replace(/^#?([\da-f])([\da-f])([\da-f])$/i, '$1$1$2$2$3$3');
    }

    return color;
}