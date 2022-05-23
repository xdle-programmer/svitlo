import Swiper, {Navigation, Pagination} from 'swiper';
import 'swiper/scss';
import 'swiper/scss/pagination';
import {mobileViewPoint} from "../../index";


const $slider = document.querySelector('.portfolio__slider')

if ($slider) {
    slider($slider)
}

function slider($wrapper) {
    let swiper

    if (window.innerWidth > mobileViewPoint) {
        swiper = new Swiper('.portfolio__slider .swiper--desktop', {
            modules: [Pagination, Navigation],
            slidesPerView: 5,
            spaceBetween: 12,
            loop: true,
            loopedSlides: 10,
            centeredSlides: true,
            grabCursor: true,
            navigation: {
                nextEl: '.portfolio__slider-nav-button--next',
                prevEl: '.portfolio__slider-nav-button--prev',
            },
            pagination: {
                el: '.swiper-pagination', dynamicBullets: true, dynamicMainBullets: 3,
            },
        });
    } else {
        swiper = new Swiper('.portfolio__slider .swiper--mobile', {
            modules: [Pagination],
            slidesPerView: 3,
            spaceBetween: 12,
            loop: true,
            loopedSlides: 10,
            centeredSlides: true,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination', dynamicBullets: true, dynamicMainBullets: 3,
            },
        });
    }
}

// const $next
//
// $desktopHtml .= '<div class="portfolio__slider-nav-button portfolio__slider-nav-button--prev"></div>';
// $desktopHtml .= '<div class="portfolio__slider-nav-button portfolio__slider-nav-button--next"></div>';





