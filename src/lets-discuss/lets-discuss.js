const $carousel = document.querySelector('.lets-discuss__text-carousel');

if ($carousel) {
    carousel($carousel);
}

function carousel($wrapper) {
    const $itemsWrapper = $wrapper.querySelector('.lets-discuss__text-carousel-wrapper');
    const items = Array.from($wrapper.querySelectorAll('.lets-discuss__text-carousel-item'));
    let height = $itemsWrapper.getBoundingClientRect().height;
    $wrapper.style.height = height / 3 + 'px';
    const duration = 1000;
    let counter = 0

    window.addEventListener('resize', () => {
        height = $itemsWrapper.getBoundingClientRect().height;
        $wrapper.style.height = height / 3 + 'px';
    });

    setInterval(() => {
        if (counter > items.length - 1) {
            counter = 0;
        }

        $itemsWrapper.style.transform = `translateY(-${height / 3 * counter}px)`

        counter++

    }, duration);

}
