const $carousel = document.querySelector('.lets-discuss__text-carousel');

if ($carousel) {
    carousel($carousel);
}

function carousel($wrapper) {
    const $itemsWrapper = $wrapper.querySelector('.lets-discuss__text-carousel-wrapper');
    const items = Array.from($wrapper.querySelectorAll('.lets-discuss__text-carousel-item'));
    let height = items[0].getBoundingClientRect().height;
    let width = items[0].getBoundingClientRect().width;
    $wrapper.style.height = height + 'px';
    $wrapper.style.width = width + 'px';
    const duration = 3000;
    let counter = 0;

    const activeClass = 'lets-discuss__text-carousel-item--active';

    items.forEach(($item) => {
        $item.style.position = 'absolute';
    });


    window.addEventListener('resize', () => {
        height = items[0].getBoundingClientRect().height;
        width = items[0].getBoundingClientRect().width;
        $wrapper.style.height = height + 'px';
        $wrapper.style.width = width + 'px';
    });

    setInterval(() => {
        if (counter > items.length - 1) {
            counter = 0;
        }

        items.forEach(($item) => {
            $item.classList.remove(activeClass);
        });

        items[counter].classList.add(activeClass);

        counter++;

    }, duration);

}
