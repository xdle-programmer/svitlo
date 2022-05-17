const flashlights = Array.from(document.querySelectorAll('.flashlight'));

flashlights.forEach(($flashlight) => {
    flashlight($flashlight);
});

function flashlight($wrapper) {
    const size = parseFloat($wrapper.dataset.flashlightSize);
    const maxWidth = $wrapper.getBoundingClientRect().width
    const maxHeight = $wrapper.getBoundingClientRect().height
    const transitionDuration = parseInt(window.getComputedStyle($wrapper).transitionDuration) * 1000

    console.log(transitionDuration)

    setPosition()

    function setPosition() {

        $wrapper.style.clipPath = `circle(${size}vw at ${getRandomInt(0, maxWidth)}px ${getRandomInt(0, maxHeight / 2)}px)`;

        setTimeout(setPosition,transitionDuration)
    }

}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}