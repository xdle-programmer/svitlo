// data-modal-close data-menu-redirect="portfolio">

import {mobileViewPoint} from "../../index";

const $menu = document.querySelector('.menu');

if ($menu) {
    menu($menu);
}

function menu($wrapper) {
    const links = $wrapper.querySelectorAll('[data-menu-redirect]');

    const currentLocations = window.location.href.split('#')[0];

    const clearUrl = window.location.href.substring(window.location.origin.length, currentLocations.length);

    let mainPage = true;

    if (clearUrl.length > 1) {
        mainPage = false;
    }

    links.forEach(($link) => {
        const dataLink = $link.dataset.menuRedirect;

        if (mainPage && window.innerWidth > mobileViewPoint) {
            console.log(123123);

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
}