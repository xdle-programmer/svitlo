const lights = document.querySelectorAll('.light');

lights.forEach(($light) => {
    light($light);
});


function light($wrapper) {
    const lightShiftWidth = window.innerWidth / 2;
    const lightShiftHeight = window.innerHeight / 2;

    const transitionDuration = parseInt(window.getComputedStyle($wrapper).transitionDuration) * 1000;

    setPosition();

    function setPosition() {
        $wrapper.style.transform = `translate(${getRandomInt(-lightShiftWidth, lightShiftWidth)}px, ${getRandomInt(-lightShiftHeight, lightShiftHeight)}px)`;

        setTimeout(setPosition, transitionDuration);
    }
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}