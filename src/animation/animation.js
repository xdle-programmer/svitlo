// Рекурсивная проверка на загрузку и готовность рендера
export function animationStart($animation) {
    if (document.readyState === 'complete') {
        requestAnimationFrame(() => {
            animation($animation);
        });
    } else {
        setTimeout(() => {
            animationStart($animation);
        }, 5);
    }
}

export function animation($wrapper) {
    // Общие переменные
    const $body = document.querySelector('body');
    let originalHeight = 0;
    let viewportHeight = window.innerHeight;
    let viewportWidth = window.innerWidth;
    let screensSizes = [];
    let slideTextAreas = [];

    // Переменные для текущего состояния скролла
    let scrollDirection = 'down';
    let lastScrollDirection = 'down';
    let lastScroll = 0;
    let limitPosition = true;
    let touchActive = false;
    let touchLast = 0;
    let scrollBarDragged = false;
    let scrollBarLast = 0;
    let scrollBarHeight = 0;
    let shiftScroll = []; // массив для алгоритмически рассчитаных сдвигов скролла
    let scrollPosition = 0;
    let lastWheelDeltaY = false;

    // Переменные для настроек скролла
    const smoothCoefficient = .3;
    const screenChangeBackgroundPosition = .1; // отступ от края экрана для включения "доскрола"

    // Классы, модификаторы и селекторы
    const screenClass = 'animation__screen';
    const screenChangeBackgroundClass = 'animation__screen--change-background';
    const slideTextClass = 'animation__text-x-scroll';
    const slideTextItemClass = 'animation__text-x-scroll-item';
    const screens = Array.from($wrapper.querySelectorAll(`.${screenClass}`));
    let $scrollHandler = document.querySelector('.animation__scroll-handler-wrapper');

    const $chartMask = $wrapper.querySelector('.portfolio__chart-mask');
    const textingItemSelectors = Array.from($wrapper.querySelectorAll('.animation__texting-item'));
    const textingItems = textingItemSelectors.map(($textingItemSelector) => {

        return {
            $selector: $textingItemSelector,
            text: $textingItemSelector.innerText,
            textLength: $textingItemSelector.innerText.length,
            state: false
        };

    });

    const counterItemSelectors = Array.from($wrapper.querySelectorAll('.animation__counter'));
    const counterItems = counterItemSelectors.map(($counterItemSelector) => {

        return {
            $selector: $counterItemSelector,
            count: $counterItemSelector.dataset.animationCounter,
            state: false
        };

    });

    const countingDuration = 1000;

    // Переменные для функций конструкторов
    let changeScreenPosition;
    let setEffects;


    init();

    // Функция инициализации
    function init() {
        addEventListeners();

        changeScreenPosition = new ChangeScreenPosition();

        setEffects = new SetEffects();

        changeScreenPosition.init();

        window.requestAnimationFrame(setAlgorithmicScroll);
    }

    // Функция установки событий
    function addEventListeners() {
        window.addEventListener('resize', calcScreenSizes);

        $wrapper.addEventListener('init', () => {
            const $video = $wrapper.querySelector('.intro__video-item');

            if ($video) {
                const $loader = document.querySelector('.loader');
                const $name = $wrapper.querySelector('.intro__name');
                const videoDuration = $video.duration;
                const introTransition = 800;

                $body.classList.add('init');
                $video.pause();
                $video.currentTime = 0;

                $wrapper.classList.add('animation--preshow');
                $wrapper.style.transition = `all ${introTransition}ms`;

                let checkScale = setInterval(() => {
                    let matrix = new WebKitCSSMatrix(window.getComputedStyle($wrapper).transform);
                    if (matrix.a === 1.4) {
                        $loader.classList.add('loader--hide');
                        $wrapper.classList.add('animation--show');
                        $video.classList.add('intro__video-item--show');

                        setTimeout(() => {
                            $video.play();

                            setTimeout(() => {
                                $name.classList.add('intro__name--show');
                            }, 3030);
                        }, introTransition);

                        clearInterval(checkScale);
                    }
                }, 5);
            }


        });

        window.addEventListener('wheel', (event) => {

            if (detectTrackPad(event)) {
                handlerScroll(event);
                return;
            }

            calcAlgorithmicScroll(event.deltaY);
        });

        window.addEventListener('touchstart', (event) => {
            touchActive = true;
            touchLast = event.touches[0].screenY;
        });

        window.addEventListener('touchend', () => {
            touchActive = false;
        });

        window.addEventListener('touchmove', (event) => {
            if (touchActive) {
                let touchShift = touchLast - event.touches[0].screenY;
                calcAlgorithmicScroll(touchShift * 5);
                touchLast = event.touches[0].screenY;
            }
        });

        window.addEventListener('keydown', (event) => {
            if (event.code === 'Space' || event.code === 'PageDown') {
                calcAlgorithmicScroll(viewportHeight);
            }

            if (event.code === 'PageUp') {
                calcAlgorithmicScroll(-viewportHeight);
            }

            if (event.code === 'Home') {
                calcAlgorithmicScroll(-(scrollPosition + viewportHeight));
            }

            if (event.code === 'End') {
                calcAlgorithmicScroll(originalHeight);
            }

            if (event.code === 'ArrowDown') {
                calcAlgorithmicScroll(viewportHeight * .1);
            }

            if (event.code === 'ArrowUp') {
                calcAlgorithmicScroll(-(viewportHeight * .1));
            }
        });

        $scrollHandler.addEventListener('mousedown', (event) => {
            event.preventDefault();
            scrollBarDragged = true;
            scrollBarLast = event.clientY;
        });

        window.addEventListener('mouseup', () => {
            scrollBarDragged = false;
        });

        window.addEventListener('mousemove', (event) => {
            event.preventDefault();

            let inScreen = true;

            if (event.clientY > viewportHeight || event.clientY < 0) {
                inScreen = false;
            }

            if (event.clientX > viewportWidth || event.clientX < 0) {
                inScreen = false;
            }

            if (!inScreen) {
                scrollBarDragged = false;
            }

            if (scrollBarDragged) {
                let scrollBarDragShift = event.clientY - scrollBarLast;
                let scrollPercent = scrollBarDragShift / (scrollBarHeight / 100);

                calcAlgorithmicScroll(scrollPercent * (originalHeight / 100));
                scrollBarLast = event.clientY;
            }
        });
    }

    // Функция рекурсии алгоритмического скролла
    function setAlgorithmicScroll() {
        if (shiftScroll.length > 0) {
            handlerScroll({deltaY: shiftScroll[0]});
            shiftScroll.shift();
        }

        window.requestAnimationFrame(setAlgorithmicScroll);
    }

    // Функция расчета алгоритмического скролла
    function calcAlgorithmicScroll(scroll) {
        // Если определена мышь, то берем все значения скролла из текущего и прошлых событий
        let originalShift = scroll / smoothCoefficient;
        let originalSum = originalShift;
        let multiply = 1;

        if (shiftScroll.length > 0) {
            originalSum = shiftScroll.reduce(function (a, b) {
                return (a + b);
            });

            originalShift += originalSum;
            shiftScroll = [];
        }

        let shift = originalShift;

        if (shift < 0) {
            multiply = -1;
        }

        shift *= multiply;

        calcSmoothMouseScroll();

        function calcSmoothMouseScroll() {
            let sum = 0;

            if (shiftScroll.length > 0) {
                sum = shiftScroll.reduce(function (a, b) {
                    return (a + b);
                });
            }

            let nextShift = shift * .08;
            shift = shift - nextShift;

            if (shift + sum < originalShift * multiply && shiftScroll.length < 100 && nextShift > .5) {
                shiftScroll.push(nextShift * multiply);
                calcSmoothMouseScroll();
            }
        }
    }

    // Функция расчета размеров экрана
    function calcScreenSizes() {
        let height = 0;

        for (let index = 0; index < screens.length; index++) {
            const $screen = screens[index];

            let screenHeight = $screen.getBoundingClientRect().height;
            let slideTextScrollHeight = 0;

            // Установка верхней границы экрана
            let top;

            if (index > 0) {
                top = screensSizes[index - 1].bottom;
            } else {
                top = 0;
            }

            // Проверка на наличие слайд текста
            if ($screen.querySelector(`.${slideTextClass}`)) {
                const $slideText = $screen.querySelector(`.${slideTextClass}`);
                slideTextScrollHeight = new WebKitCSSMatrix(window.getComputedStyle($slideText).transform).m41;

                const slideTextBottom = top + slideTextScrollHeight;
                screenHeight += slideTextScrollHeight;

                slideTextAreas.push({
                    top: top, bottom: slideTextBottom, scrollHeight: slideTextScrollHeight, $slideText,
                });
            }

            // Установка нижней границы экрана
            let bottom = top + screenHeight;

            // Переменные для установки доскрола
            let changeBackground = false;
            let changeBackgroundTop = 0;
            let changeBackgroundHeight = 0;

            // Установка области доскрола
            if ($screen.classList.contains(screenChangeBackgroundClass)) {
                changeBackground = true;
                changeBackgroundHeight = viewportHeight * (1 - screenChangeBackgroundPosition);
                changeBackgroundTop = top - changeBackgroundHeight;
            }

            screensSizes.push({
                height: screenHeight,
                top,
                bottom,
                changeBackground,
                changeBackgroundTop,
                changeBackgroundHeight,
                slideTextScrollHeight,
                changeBackgroundState: false
            });

            height += screenHeight;
        }

        originalHeight = height - viewportHeight;

        scrollBarHeight = viewportHeight - $scrollHandler.getBoundingClientRect().height;

        setBodyHeight();
    }

    // Функция определения тачпада
    function detectTrackPad(event) {

        let isTrackpad = false;
        let wheelDeltaYModul = event.wheelDeltaY;

        if (wheelDeltaYModul && wheelDeltaYModul < 0) {
            wheelDeltaYModul *= -1;
        }

        if (wheelDeltaYModul && wheelDeltaYModul === (event.deltaY * -3)) {
            isTrackpad = true;
        }

        if (wheelDeltaYModul === 0) {
            isTrackpad = true;
        } else if (wheelDeltaYModul % 120 > 0) {
            isTrackpad = true;
        } else if (lastWheelDeltaY % 120 > 0) {
            isTrackpad = true;
        }

        lastWheelDeltaY = wheelDeltaYModul;

        return isTrackpad;
    }

    // Функция обработки скролла
    function handlerScroll(event) {
        scrollPosition += event.deltaY * smoothCoefficient;

        if (scrollPosition > originalHeight) {
            scrollPosition = originalHeight;

            if (!limitPosition) {
                changeScreenPosition.changePosition(scrollPosition);
                limitPosition = true;
            }
            return;
        } else if (scrollPosition < 0) {
            scrollPosition = 0;

            if (!limitPosition) {
                changeScreenPosition.changePosition(scrollPosition);
                limitPosition = true;
            }

            return;
        }

        limitPosition = false;
        const scrollY = scrollPosition;

        if (lastScroll > scrollY) {
            scrollDirection = 'up';
        } else if (lastScroll < scrollY) {
            scrollDirection = 'down';
        }

        if (lastScrollDirection !== scrollDirection) {
            shiftScroll = [];
        }


        lastScroll = scrollY;
        lastScrollDirection = scrollDirection;

        changeScreenPosition.changePosition(scrollY);

        setEffects.toggleEffects();

        $scrollHandler.style.transform = `translateY(${scrollBarHeight / 100 * (scrollY / (originalHeight / 100))}px)`;
    }

    // Функция установки высоты бади
    function setBodyHeight() {
        // $body.style.height = originalHeight + 'px';
    }

    // Функция для сдвига экранов
    function ChangeScreenPosition() {

        function init() {
            calcScreenSizes();

            screens.forEach(($screen, index) => {
                if (index > 0) {
                    $screen.style.transform = `matrix(1.00,0.00,0.00,1.00,0,${viewportHeight})`;
                } else {
                    $screen.style.transform = `matrix(1.00,0.00,0.00,1.00,0,-.1)`;
                }

                // $screen.style.transitionDuration = `${screenTransitionDuration}ms`;
            });

            $wrapper.dispatchEvent(new Event('init'));
        }

        function changePosition(scrollY) {
            for (let index = 0; index < screens.length; index++) {
                const $screen = screens[index];
                const {top} = screensSizes[index];
                const {bottom} = screensSizes[index];
                const {height} = screensSizes[index];
                const {slideTextScrollHeight} = screensSizes[index];
                const {changeBackground} = screensSizes[index];
                const {changeBackgroundTop} = screensSizes[index];
                const {changeBackgroundHeight} = screensSizes[index];

                // Если экран находится в зоне видимости
                if (scrollY + viewportHeight >= top && scrollY <= bottom) {

                    // Если экран уже появлися, но не занял весь вьюпорт и его пора доскроллить
                    if (scrollY <= changeBackgroundTop + changeBackgroundHeight && changeBackground) {

                        if (scrollY > changeBackgroundTop) {

                            if (scrollDirection === 'down') {
                                if (!screensSizes[index].changeBackgroundState) {
                                    calcAlgorithmicScroll(changeBackgroundHeight);
                                    screensSizes[index].changeBackgroundState = true;
                                }
                            } else {
                                screensSizes[index].changeBackgroundState = false;
                            }
                        }

                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${top - scrollY})`;

                    }

                    // Если экран уже появлися, но не занял весь вьюпорт и не нужно доскраливать
                    else if (scrollY <= top && !changeBackground) {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${top - scrollY})`;
                    }

                    // Если экран уже прошел и весь вьюпорт и боковой слайд текста
                    else if (scrollY > top + slideTextScrollHeight) {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${top - scrollY + slideTextScrollHeight})`;
                    } else {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, 0)`;

                        slideTextAreas.forEach((slideTextArea) => {
                            const {top} = slideTextArea;
                            const {bottom} = slideTextArea;
                            const {$slideText} = slideTextArea;
                            const {scrollHeight} = slideTextArea;

                            if (scrollY > top && scrollY <= bottom) {
                                let percent = (scrollY - top) / (scrollHeight / 100);
                                $slideText.style.transform = `matrix(1.00,0.00,0.00,1.00,${scrollHeight - (scrollHeight / 100 * percent)},0)`;
                            } else if (scrollY < top) {
                                $slideText.style.transform = `matrix(1.00,0.00,0.00,1.00,${scrollHeight},0)`;
                            } else {
                                $slideText.style.transform = `matrix(1.00,0.00,0.00,1.00,0,0)`;
                            }
                        });
                    }

                }
                // Если экран находится ВНЕ зоны видимости, если до него еще не доскроллили
                else if (scrollY + viewportHeight < top) {
                    $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${viewportHeight})`;
                }
                // Если экран находится ВНЕ зоны видимости, его уже пролистали
                else {
                    if (changeBackground) {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, -${height - slideTextScrollHeight + changeBackgroundHeight})`;
                    } else {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, -${height - slideTextScrollHeight})`;
                    }
                }
            }
        }

        this.init = init;

        this.changePosition = changePosition;
    }

    // Объединяющая функция для эффектов, зависимых от позиции страницы
    function SetEffects() {

        // Блоки для отслеживания тайтлов и текста
        const blockClass = 'animation__block';
        const titleClass = 'animation__title';
        const titleWrapperClass = 'animation__title-wrapper';
        const textClass = 'animation__text';
        const textWrapperClass = 'animation__text-wrapper';
        const titles = Array.from($wrapper.querySelectorAll(`.${titleClass}`));
        const texts = Array.from($wrapper.querySelectorAll(`.${textClass}`));

        const slideReadyTitleClass = 'animation__block--ready-title';
        const slideTextNotReadyClass = 'animation__block--not-ready-slide-text';
        const titleActiveClass = 'animation__title--active';
        const titleWrapperActiveClass = 'animation__title-wrapper--active';
        const textActiveClass = 'animation__text--active';
        const textWrapperActiveClass = 'animation__text-wrapper--active';
        const $portfolioDesc = $wrapper.querySelector('.portfolio__desc');
        const $portfolioDescTitle = $wrapper.querySelector('.portfolio__desc-item--1');
        const $chart = $wrapper.querySelector('.portfolio__chart');
        const owners = $wrapper.querySelectorAll('.we-are__owners-item');
        const parallaxCoefficient = .1;
        const logos = $wrapper.querySelectorAll('.clients__item--main');

        // Функция добавления классов для тайтлов
        function setTitleShowClass() {

            for (let index = 0; index < titles.length; index++) {
                const $title = titles[index];
                const $block = $title.closest(`.${blockClass}`);
                const offset = $title.getBoundingClientRect().top;
                let changeLimit = 1;

                if (scrollDirection === 'up') {
                    changeLimit = 1;
                }

                if (offset <= window.innerHeight * changeLimit && !$block.classList.contains(slideTextNotReadyClass)) {
                    $block.classList.add(slideReadyTitleClass);
                    $title.classList.add(titleActiveClass);
                    $title.closest(`.${titleWrapperClass}`).classList.add(titleWrapperActiveClass);
                } else if (offset > window.innerHeight * changeLimit) {
                    $title.classList.remove(titleActiveClass);
                    $title.closest(`.${titleWrapperClass}`).classList.remove(titleWrapperActiveClass);
                    if (Array.from($block.querySelectorAll(`.${titleActiveClass}`)).length === 0) {
                        $block.classList.remove(slideReadyTitleClass);
                    }
                }
            }

        }

        // Функция добавления классов для текстов
        function setTextsShowClass() {
            for (let index = 0; index < texts.length; index++) {
                const $text = texts[index];
                const $block = $text.closest(`.${blockClass}`);
                const offset = $text.getBoundingClientRect().top;
                let changeLimit = 1;

                if (scrollDirection === 'up') {
                    changeLimit = 1;
                }

                if (offset <= window.innerHeight * changeLimit) {
                    if ($block.classList.contains(slideReadyTitleClass) && !$block.classList.contains(slideTextNotReadyClass)) {
                        $text.classList.add(textActiveClass);
                        $text.closest(`.${textWrapperClass}`).classList.add(textWrapperActiveClass);
                    } else {
                        $text.classList.remove(textActiveClass);
                        $text.closest(`.${textWrapperClass}`).classList.remove(textWrapperActiveClass);
                    }
                } else if (offset > window.innerHeight * changeLimit) {
                    $text.classList.remove(textActiveClass);
                    $text.closest(`.${textWrapperClass}`).classList.remove(textWrapperActiveClass);
                }
            }
        }

        // Функция масштабирования заголовка портфолио
        function setScalePortfolioTitle() {
            const scrollHeight = window.innerHeight / 3;
            const offset = $portfolioDesc.getBoundingClientRect().top;
            const scaleMax = 1;
            const scaleMin = .7;
            const translateMax = 0;

            const translateMin = 61;

            if (offset < 0 && offset * -1 < scrollHeight) {
                const percent = (offset * -1) / (scrollHeight / 100);
                const scale = ((scaleMin - scaleMax) / 100 * percent) + 1;
                const translate = (translateMin - translateMax) / 100 * percent;

                $portfolioDescTitle.style.transform = `translateX(-50%) scale(${scale}) translateY(${translate}vw)`;
            } else if (offset > 0) {
                $portfolioDescTitle.style.transform = `translateX(-50%)`;
            } else {
                $portfolioDescTitle.style.transform = `translateX(-50%) scale(${scaleMin}) translateY(${translateMin}vw)`;
            }
        }

        // Функция отрисовки чарта
        function setChart() {
            const scrollHeight = window.innerHeight / 3 * 2;
            const offset = $chart.getBoundingClientRect().top - viewportHeight + ($chart.getBoundingClientRect().height / 2);

            const percent = (offset * -1) / (scrollHeight / 100);

            if (offset < 0 && offset * -1 < scrollHeight) {
                $chartMask.style.transform = `translateX(${percent}%)`;
            } else if (offset > 0) {
                $chartMask.style.transform = `translateX(${0}%)`;
            } else {
                $chartMask.style.transform = `translateX(${100}%)`;
            }
        }

        // Функция отрисовки парралакса на оунерах
        function setOwnerParallax() {
            owners.forEach(($owner) => {
                const scrollHeight = window.innerHeight / 3 * 2;
                const $photo = $owner.querySelector('.we-are__owners-item-photo');
                const offset = $owner.getBoundingClientRect().top - viewportHeight + $photo.getBoundingClientRect().height;

                const percent = (offset * -1) / (scrollHeight / 100);


                if (offset < 0 && offset * -1 < scrollHeight) {
                    $photo.style.transform = `translateY(${viewportHeight / 100 * percent * parallaxCoefficient}px)`;
                } else if (offset > 0) {
                    $photo.style.transform = `translateY(0)`;
                } else {
                    $photo.style.transform = `translateY(${viewportHeight * parallaxCoefficient}px)`;
                }
            });
        }

        // Функция отрисовки масштабирования логотипов
        function setLogoScale() {
            logos.forEach(($logo) => {
                const scrollHeight = window.innerHeight / 3 * 2;
                const offset = $logo.getBoundingClientRect().top - viewportHeight;

                const percent = (offset * -1) / (scrollHeight / 100);

                if (offset < 0 && offset * -1 < scrollHeight) {
                    if (percent < 10) {
                        $logo.style.transform = `scale(${.1})`;
                    } else {
                        $logo.style.transform = `scale(${percent / 100})`;
                    }
                } else if (offset > 0) {
                    $logo.style.transform = `scale(${.1})`;
                } else {
                    $logo.style.transform = `scale(${1})`;
                }
            });
        }

        // Функция отпечатывания текста
        function setTexting() {
            textingItems.forEach((textingItem, index) => {
                const {$selector} = textingItem;
                const {text} = textingItem;
                const {textLength} = textingItem;
                const {state} = textingItem;

                const offset = $selector.getBoundingClientRect().top - viewportHeight;

                if (offset > 0) {
                    $selector.innerText = '';
                    textingItems[index].state = false;
                    $selector.classList.remove('.testimonial__item--texting');
                } else if (offset < 0 && offset > -viewportHeight) {
                    if (!state) {
                        texting($selector, text, textLength);
                        textingItems[index].state = true;
                        $selector.classList.remove('testimonial__item--texting');
                    }
                } else {
                    $selector.innerText = text;
                    $selector.classList.remove('testimonial__item--texting');
                }
            });
        }

        // Функция растущего счетчика
        function setCounters() {
            counterItems.forEach((counterItem, index) => {
                const {$selector} = counterItem;
                const {count} = counterItem;
                const {state} = counterItem;

                const offset = $selector.getBoundingClientRect().top - viewportHeight;

                if (offset > 0) {
                    $selector.innerText = '0%';
                    counterItems[index].state = false;
                } else if (offset < 0 && offset > -viewportHeight) {
                    if (!state) {
                        counting($selector, count);
                        counterItems[index].state = true;
                    }
                } else {
                    $selector.innerText = `${count}%`;
                }
            });
        }

        function texting($selector, text, textLength) {
            let counter = 0;

            addChar();

            function addChar() {
                $selector.innerText = text.slice(0, counter);
                counter++;

                if (counter % 2 === 0) {
                    $selector.classList.add('testimonial__item--texting');
                } else {
                    $selector.classList.remove('testimonial__item--texting');
                }

                if (counter < textLength) {
                    setTimeout(() => {
                        addChar();
                    }, getRandomInt(30, 80));
                } else {
                    $selector.classList.remove('testimonial__item--texting');
                }
            }
        }

        function counting($selector, count) {
            let counter = 1;
            let duration = countingDuration / count;

            // countingDuration

            addChar();

            function addChar() {
                $selector.innerText = `${counter}%`;
                counter++;

                if (counter <= count) {
                    setTimeout(() => {
                        addChar();
                    }, duration);
                }
            }
        }

        function toggleEffects() {

            setTitleShowClass();

            setTextsShowClass();

            if ($portfolioDesc) {
                setScalePortfolioTitle();
            }

            if ($chartMask) {
                setChart();
            }

            setOwnerParallax();

            setLogoScale();

            setTexting();

            setCounters();
        }

        this.toggleEffects = toggleEffects;

    }


}


function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}