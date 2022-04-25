const $animation = document.querySelector('.animation');

if ($animation) {
    animationStart()
}

// Рекурсивная проверка на загрузку и готовность рендера
function animationStart() {
    if (document.readyState === 'complete') {
        requestAnimationFrame(() => {
            animation($animation)
        })
    } else {
        setTimeout(() => {
            animationStart()
        }, 5)
    }
}

function animation($wrapper) {

    // Общие переменные
    const $body = document.querySelector('body');
    let originalHeight = $wrapper.offsetHeight;
    let scrollDirection = 'down';
    let lastScroll = window.scrollY;

    // Классы и модификаторы
    const slideClass = 'animation__slide'
    const blockClass = 'animation__block'
    const slideChangeBackgroundClass = 'animation__change-background'
    const slideReadyTitleClass = 'animation__block--ready-title'
    const slideReadyAllClass = 'animation__block--ready-all'
    const slideFadeClass = 'animation__block--fade'

    // Элементы со сдвигом фона
    const changeBackgroundElementsSelectors = Array.from($wrapper.querySelectorAll(`.${slideChangeBackgroundClass}`));
    const changeBackgroundElements = changeBackgroundElementsSelectors.map(($changeBackgroundElementsSelector) => {
        return {
            $selector: $changeBackgroundElementsSelector, changeState: false
        }

    })

    // Блоки для отслеживания тайтлов и текста
    const blocks = Array.from($wrapper.querySelectorAll(`.${blockClass}`));

    // Функция установки высоты бади
    function setBodyHeight() {
        $body.style.height = originalHeight + 'px';
    }

    // Функция подскраливания слайда
    function changeBackground() {
        let changeHeight = 0

        for (let index = 0; index < changeBackgroundElements.length; index++) {
            const $changeBackgroundElement = changeBackgroundElements[index].$selector;
            const initialState = changeBackgroundElements[index].changeState;
            const offset = $changeBackgroundElement.getBoundingClientRect().top;
            let changeLimit = .8
            let shift = window.innerHeight * .8

            if (scrollDirection === 'up') {
                changeLimit = 0
            }

            if (offset <= window.innerHeight * changeLimit) {
                $changeBackgroundElement.style.marginTop = `-${shift}px`
                changeBackgroundElements[index].changeState = true;

                if (initialState !== changeBackgroundElements[index].changeState) {
                    changeHeight -= shift;
                }
            } else {
                $changeBackgroundElement.style.marginTop = 0;
                changeBackgroundElements[index].changeState = false;

                if (initialState !== changeBackgroundElements[index].changeState) {
                    changeHeight += shift;
                }
            }


        }

        originalHeight += changeHeight;

        setBodyHeight()

        return true
    }

    // Функция добавления классов для тайтлов и текста
    function setTitleTextClass() {
        let changeHeight = 0

        for (let index = 0; index < blocks.length; index++) {
            const $block = blocks[index]
            const offset = $block.getBoundingClientRect().top;
            let changeLimit = .3

            if (scrollDirection === 'up') {
                changeLimit = 0
            }

            if (offset <= window.innerHeight * changeLimit) {
                $block.classList.add(slideReadyTitleClass)
                $block.classList.add(slideReadyAllClass)
            } else {
                $block.classList.remove(slideReadyTitleClass)
                $block.classList.remove(slideReadyAllClass)
            }


        }

        originalHeight += changeHeight;

        setBodyHeight()

        return true
    }

    scroll()

    // Функция проверки положения скролла и передвижения враппера
    function scroll() {

        if (lastScroll > window.scrollY) {
            scrollDirection = 'up';
        } else if (lastScroll < window.scrollY) {
            scrollDirection = 'down';
        }

        let scrollCheck = true;

        scrollCheck = changeBackground()

        scrollCheck = setTitleTextClass()


        if (scrollCheck) {
            $wrapper.style.transform = `translateY(-${window.scrollY}px)`;
        }

        lastScroll = window.scrollY;
        requestAnimationFrame(scroll)
    }
}


