const flashlights = Array.from(document.querySelectorAll('.flashlight'));

flashlights.forEach(($flashlight) => {
    flashlight($flashlight);
});

function flashlight($wrapper) {
    const size = parseFloat($wrapper.dataset.flashlightSize);
    const transitionDuration = parseInt(window.getComputedStyle($wrapper).transitionDuration) * 1000;

    setPosition();

    function setPosition() {
        $wrapper.style.clipPath = `circle(${size}vw at ${getRandomInt(0, $wrapper.getBoundingClientRect().width)}px ${getRandomInt(0, $wrapper.getBoundingClientRect().height / 3)}px)`;

        setTimeout(setPosition, transitionDuration);
    }

}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}