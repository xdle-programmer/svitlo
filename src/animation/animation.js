const $animation = document.querySelector('.animation');

if ($animation) {
    animationStart();
}

// Рекурсивная проверка на загрузку и готовность рендера
function animationStart() {
    if (document.readyState === 'complete') {
        requestAnimationFrame(() => {
            animation($animation);
        });
    } else {
        setTimeout(() => {
            animationStart();
        }, 5);
    }
}

function animation($wrapper) {

    // Общие переменные
    const $body = document.querySelector('body');
    let originalHeight = 0;
    let viewportHeight = window.innerHeight;
    let changeScreenPosition;
    let scrollDirection = 'down';
    let lastScroll = window.scrollY;
    let screensSizes = [];
    let screensChangeBackgroundAreas = [];
    let slideTextAreas = [];

    // Классы, модификаторы и селекторы
    const screenClass = 'animation__screen';
    const screenChangeBackgroundClass = 'animation__screen--change-background';
    const slideTextClass = 'animation__text-x-scroll';
    const slideTextItemClass = 'animation__text-x-scroll-item';
    const screens = Array.from($wrapper.querySelectorAll(`.${screenClass}`));

    // Переменные опций анимации
    const screenTransitionDuration = 800; // плавность анимации слайдов
    const screenChangeBackgroundPosition = .1; // отступ от края экрана для включения "доскрола"
    const screenChangeBackgroundHeight = .2; // высота области, попадаю в которую включается доскрол
    // const slideTextPosition = .2; // отступ от края экрана для включения слайда текста
    const shiftScroll = 0;

    init();

    // Функция инициализации
    function init() {
        addEventListeners();

        changeScreenPosition = new ChangeScreenPosition();

        changeScreenPosition.init();
    }

    // Функция установки событий
    function addEventListeners() {
        window.addEventListener('scroll', handlerScroll);

        window.addEventListener('resize', calcScreenSizes);

        $wrapper.addEventListener('init', () => {
            $body.classList.add('init');
        });
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

            // Установка области доскрола
            if ($screen.classList.contains(screenChangeBackgroundClass)) {
                const changeBackgroundTop = top - (viewportHeight * (1 - screenChangeBackgroundPosition));
                const changeBackgroundBottom = changeBackgroundTop + (viewportHeight * screenChangeBackgroundHeight);

                screensChangeBackgroundAreas.push({
                    top: changeBackgroundTop, bottom: changeBackgroundBottom, topScreen: top
                });
            }


            screensSizes.push({
                height: screenHeight, top, bottom, slideTextScrollHeight
            });

            height += screenHeight;
        }

        originalHeight = height;

        setBodyHeight();
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

                $screen.style.transitionDuration = `${screenTransitionDuration}ms`;
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

                if (scrollY + viewportHeight >= top && scrollY <= bottom) {
                    if (scrollY <= top) {
                        $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${top - scrollY})`;
                    } else if (scrollY > top + slideTextScrollHeight) {
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
                } else if (scrollY + viewportHeight < top) {
                    $screen.style.transform = `matrix(1, 0, 0, 1, 0, ${viewportHeight})`;
                } else {
                    $screen.style.transform = `matrix(1, 0, 0, 1, 0, -${height - slideTextScrollHeight})`;
                }
            }
        }

        this.init = init;

        this.changePosition = changePosition;
    }

    // Функция обработки скролла
    function handlerScroll(event) {
        const scrollY = window.scrollY;

        if (scrollY < 0) {
            return;
        }

        if (scrollY > originalHeight) {
            return;
        }


        if (lastScroll > scrollY) {
            scrollDirection = 'up';
        } else if (lastScroll < scrollY) {
            scrollDirection = 'down';

            screensChangeBackgroundAreas.forEach((screensChangeBackgroundArea) => {
                const topScreen = screensChangeBackgroundArea.topScreen;
                const top = screensChangeBackgroundArea.top;
                const bottom = screensChangeBackgroundArea.bottom;

                if (scrollY > top && scrollY < bottom) {
                    window.scrollTo(0, topScreen - 3);
                }

                // if (scrollY > top && scrollY < topScreen) {
                //
                //     screens.forEach(($screen, index) => {
                //         $screen.style.transitionDuration = `${screenTransitionDuration * 2}ms`;
                //     });
                //
                //     setTimeout(() => {
                //
                //     }, 0);
                // } else {
                //     screens.forEach(($screen, index) => {
                //         $screen.style.transitionDuration = `${screenTransitionDuration * 1}ms`;
                //     });
                // }

            });
        }

        lastScroll = scrollY;

        changeScreenPosition.changePosition(scrollY);
    }

    // Функция установки высоты бади
    function setBodyHeight() {
        $body.style.height = originalHeight + 'px';
    }


    window.addEventListener('scroll222', (event) => {


        // let requestTimeout = [10];


        // changeBackground()
        //
        // setTitleShowClass()
        //
        // setTextsShowClass()

        // Отмена скролла во время горизонтального скролла
        // checkScroll = slideText()


        console.log($bus.getBoundingClientRect().top);

        if ($bus.getBoundingClientRect().top < window.innerHeight * 0.9 && !xxx) {
            console.log('Пора!!!');

            xxx = true;

            window.scrollTo(0, window.scrollY + (window.innerHeight * 1.2));
        }

        // if (window.scrollY > 200 && window.scrollY < 300) {
        //     window.scrollTo(0, 1000)
        //     checkScroll = false
        // }

        // setScalePortfolioTitle()

        if (checkScroll) {
            $wrapper.style.transform = `translate3d(0, -${window.scrollY - shiftScroll}px, 0)`;
            $wrapper.style.transform = `matrix(1.00,0.00,0.00,1.00,0,-${window.scrollY - shiftScroll})`;
            // $wrapper.scrollTo(0, window.scrollY - shiftScroll)
        }

        lastScroll = window.scrollY;
    });


    // const blockClass = 'animation__block';
    // const titleClass = 'animation__title';
    // const titleWrapperClass = 'animation__title-wrapper';
    // const textClass = 'animation__text';
    // const textWrapperClass = 'animation__text-wrapper';
    // const slideChangeBackgroundClass = 'animation__change-background';
    // const slideTextClass = 'animation__text-x-scroll';
    //
    // const slideReadyTitleClass = 'animation__block--ready-title';
    // const slideTextNotReadyClass = 'animation__block--not-ready-slide-text';
    // const titleActiveClass = 'animation__title--active';
    // const titleWrapperActiveClass = 'animation__title-wrapper--active';
    // const textActiveClass = 'animation__text--active';
    // const textWrapperActiveClass = 'animation__text-wrapper--active';


    //
    //
    //
    // const shiftSlide = window.innerHeight * .9
    //
    // // Заголовки, которые нужно сдвинуть пл горизонтальни
    // const slideTextElements = Array
    //     .from($wrapper.querySelectorAll(`.${slideTextClass}`))
    //     .map(($slideTextElementSelector) => {
    //
    //         const scrollHeight = new WebKitCSSMatrix(window.getComputedStyle($slideTextElementSelector).transform).m41
    //         originalHeight += scrollHeight
    //
    //         return {
    //             $selector: $slideTextElementSelector,
    //             offset: $slideTextElementSelector.getBoundingClientRect().top - shiftSlide,
    //             changeState: false,
    //             scrollHeight
    //         }
    //     })
    //
    // // Слайды, которые нужно подскроллить
    // const changeBackgroundElements = Array
    //     .from($wrapper.querySelectorAll(`.${slideChangeBackgroundClass}`))
    //     .map(($changeBackgroundElementsSelector, index) => {
    //         return {
    //             $selector: $changeBackgroundElementsSelector,
    //             offset: $changeBackgroundElementsSelector.getBoundingClientRect().top - shiftSlide,
    //             changeState: false
    //         }
    //     })
    //
    //
    // // Блоки для отслеживания тайтлов и текста
    // const titles = Array.from($wrapper.querySelectorAll(`.${titleClass}`));
    // const texts = Array.from($wrapper.querySelectorAll(`.${textClass}`));
    //

    //
    // setBodyHeight()
    //
    // // Функция подскраливания слайда
    // function changeBackground() {
    //
    //     let requestTimeout = 25
    //
    //     for (let index = 0; index < changeBackgroundElements.length; index++) {
    //         const $changeBackgroundElement = changeBackgroundElements[index].$selector;
    //         const duration = parseInt(getComputedStyle($changeBackgroundElement)['transitionDuration'])
    //         const initialState = changeBackgroundElements[index].changeState;
    //         const offset = changeBackgroundElements[index].offset;
    //
    //         if (offset <= window.scrollY - shiftScroll) {
    //             if (!initialState) {
    //                 $changeBackgroundElement.style.transform = `translateY(0)`
    //                 changeBackgroundElements[index].changeState = true;
    //                 requestTimeout = duration
    //             }
    //         } else {
    //             if (initialState) {
    //                 $changeBackgroundElement.style.transform = `translateY(80vh)`
    //                 changeBackgroundElements[index].changeState = false;
    //                 requestTimeout = duration
    //             }
    //         }
    //     }
    //
    //     return requestTimeout
    // }
    //
    // // Функция горизонтального сдвига текста
    // function slideText() {
    //     let allScrollHeight = 0;
    //     let checkScroll = true;
    //
    //     for (let index = 0; index < slideTextElements.length; index++) {
    //         const $slideTextElement = slideTextElements[index].$selector;
    //         const $block = $slideTextElement.closest(`.${blockClass}`)
    //         const offset = slideTextElements[index].offset;
    //         const scrollHeight = slideTextElements[index].scrollHeight;
    //         let prevScrollHeight = 0
    //
    //         for (let subIndex = 0; subIndex < index; subIndex++) {
    //             prevScrollHeight += slideTextElements[subIndex].scrollHeight
    //         }
    //
    //         if (offset + prevScrollHeight <= window.scrollY) {
    //             const shift = scrollHeight - (window.scrollY - (offset + prevScrollHeight))
    //
    //             if (shift >= 0) {
    //                 $block.classList.add(slideTextNotReadyClass)
    //                 $slideTextElement.style.transform = `translateX(${scrollHeight - (window.scrollY - (offset + prevScrollHeight))}px)`
    //                 checkScroll = false;
    //             } else {
    //                 $block.classList.remove(slideTextNotReadyClass)
    //                 $slideTextElement.style.transform = `translateX(0)`
    //                 allScrollHeight += scrollHeight
    //             }
    //         } else {
    //             $block.classList.add(slideTextNotReadyClass)
    //         }
    //     }
    //
    //     shiftScroll = allScrollHeight;
    //
    //     return checkScroll
    // }
    //
    // // Функция добавления классов для тайтлов
    // function setTitleShowClass() {
    //     let requestTimeout = 50
    //
    //     for (let index = 0; index < titles.length; index++) {
    //         const $title = titles[index]
    //         const $block = $title.closest(`.${blockClass}`)
    //         const offset = $title.getBoundingClientRect().top;
    //         let changeLimit = .9
    //
    //         if (scrollDirection === 'up') {
    //             changeLimit = .5
    //         }
    //
    //         if (offset <= window.innerHeight * changeLimit && !$block.classList.contains(slideTextNotReadyClass)) {
    //             $block.classList.add(slideReadyTitleClass)
    //             $title.classList.add(titleActiveClass)
    //             $title.closest(`.${titleWrapperClass}`).classList.add(titleWrapperActiveClass)
    //         } else if (offset > window.innerHeight * changeLimit) {
    //             $title.classList.remove(titleActiveClass)
    //             $title.closest(`.${titleWrapperClass}`).classList.remove(titleWrapperActiveClass)
    //             if (Array.from($block.querySelectorAll(`.${titleActiveClass}`)).length === 0) {
    //                 $block.classList.remove(slideReadyTitleClass)
    //             }
    //         }
    //
    //
    //     }
    //
    //     return requestTimeout
    // }
    //
    // // Функция добавления классов для текстов
    // function setTextsShowClass() {
    //     for (let index = 0; index < texts.length; index++) {
    //         const $text = texts[index]
    //         const $block = $text.closest(`.${blockClass}`)
    //         const offset = $text.getBoundingClientRect().top;
    //         let changeLimit = .8
    //
    //         if (offset <= window.innerHeight * changeLimit) {
    //             if ($block.classList.contains(slideReadyTitleClass) && !$block.classList.contains(slideTextNotReadyClass)) {
    //                 $text.classList.add(textActiveClass)
    //                 $text.closest(`.${textWrapperClass}`).classList.add(textWrapperActiveClass)
    //             } else {
    //                 $text.classList.remove(textActiveClass)
    //                 $text.closest(`.${textWrapperClass}`).classList.remove(textWrapperActiveClass)
    //             }
    //         } else if (offset > window.innerHeight * changeLimit) {
    //             $text.classList.remove(textActiveClass)
    //             $text.closest(`.${textWrapperClass}`).classList.remove(textWrapperActiveClass)
    //         }
    //     }
    // }
    //
    // // Функция масштабирования заголовка портфолио
    // function setScalePortfolioTitle() {
    //     const $portfolioDesc = $wrapper.querySelector('.portfolio__desc')
    //     const $portfolioDescTitle = $wrapper.querySelector('.portfolio__desc-item--1')
    //     const scrollHeight = window.innerHeight / 3
    //     const offset = $portfolioDesc.getBoundingClientRect().top
    //     const scaleMax = 1
    //     const scaleMin = .4
    //     const translateMax = 0
    //
    //     const translateMin = 61
    //
    //     if (offset < 0 && offset * -1 < scrollHeight) {
    //         const percent = (offset * -1) / (scrollHeight / 100)
    //         const scale = ((scaleMin - scaleMax) / 100 * percent) + 1
    //         const translate = (translateMin - translateMax) / 100 * percent
    //
    //         $portfolioDescTitle.style.transform = `translateX(-50%) scale(${scale}) translateY(${translate}vw)`
    //     }
    // }
    //
    // // scroll()
    //
    // $wrapper.style.transform = `matrix(1.00,0.00,0.00,1.00,0,-${.1})`;
    //
    // const $bus = $wrapper.querySelector('.businesses')
    // let xxx = false
    //
    //
    //
    // // Функция проверки положения скролла и передвижения враппера
    // function scroll() {
    //     if (lastScroll > window.scrollY) {
    //         scrollDirection = 'up';
    //     } else if (lastScroll < window.scrollY) {
    //         scrollDirection = 'down';
    //     }
    //
    //     let requestTimeout = [10];
    //     let checkScroll = true;
    //
    //     // Передача задержки рекурсии при подсролле слайдов
    //     requestTimeout.push(changeBackground())
    //
    //     setTitleShowClass()
    //
    //     setTextsShowClass()
    //
    //     // Отмена скролла во время горизонтального скролла
    //     checkScroll = slideText()
    //
    //
    //     setScalePortfolioTitle()
    //
    //     if (checkScroll) {
    //         $wrapper.style.transform = `translate3d(0, -${window.scrollY - shiftScroll}px, 0)`;
    //         // $wrapper.scrollTo(0, window.scrollY - shiftScroll)
    //     }
    //
    //     lastScroll = window.scrollY;
    //
    //     setTimeout(() => {
    //         requestAnimationFrame(scroll)
    //     }, Math.max(...requestTimeout))
    //
    //
    // }
}

//
// window.addEventListener('scroll', (event) => {
//     // event.preventDefault()
//     // console.log(44444)
//     // document.querySelector('.animation').scrollTo(0, 300)
//
//     document.querySelector('.animation').scroll(0, window.scrollY)
// })
//
//
