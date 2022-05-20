import Swiper, {Pagination} from 'swiper';
import 'swiper/scss';
import 'swiper/scss/pagination';
import {mobileViewPoint} from "../../index";


if (window.innerWidth > mobileViewPoint) {
    const swiper = new Swiper('.portfolio__slider .swiper--desktop', {
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
} else {
    const swiper = new Swiper('.portfolio__slider .swiper--mobile', {
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


