import {mobileViewPoint} from "../../index";

const $menu = document.querySelector('.menu');

if ($menu) {
    menu($menu);
}

function menu($wrapper) {
    const links = $wrapper.querySelectorAll('[data-menu-redirect]');
    const $light = $wrapper.querySelector('.menu__light');
    const lightShiftWidth = window.innerWidth / 2
    const lightShiftHeight = window.innerHeight / 2

    const currentLocations = window.location.href.split('#')[0];

    const clearUrl = window.location.href.substring(window.location.origin.length, currentLocations.length);

    let mainPage = true;

    if (clearUrl.length > 1) {
        mainPage = false;
    }

    links.forEach(($link) => {
        const dataLink = $link.dataset.menuRedirect;

        if (mainPage && window.innerWidth > mobileViewPoint) {
            $link.addEventListener('click', () => {
                document.querySelector('.animation').dispatchEvent(new CustomEvent('scroll-menu', {
                    detail: {
                        dataLink
                    }
                }));
            });
        } else {
            $link.addEventListener('click', () => {
                window.location.href = `/#${dataLink}`;
            });
        }


    });

    const transitionDuration = parseInt(window.getComputedStyle($light).transitionDuration) * 1000;

    setPosition();

    function setPosition() {
        $light.style.transform = `translate(${getRandomInt(-lightShiftWidth, lightShiftWidth)}px, ${getRandomInt(-lightShiftHeight, lightShiftHeight)}px)`;

        setTimeout(setPosition, transitionDuration);
    }
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}