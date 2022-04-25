import Swiper, {Pagination} from 'swiper';
import 'swiper/scss';
import 'swiper/scss/pagination';

import Panorama from '../panorama/panorama';

const swiper = new Swiper('.portfolio__slider .swiper', {
    // pass Panorama module
    modules: [Pagination, Panorama], // enable "panorama" effect
    effect: 'panorama',
    slidesPerView: 1.5,
    spaceBetween: 12,
    loop: true,
    loopedSlides: 10,
    centeredSlides: true,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination', dynamicBullets: true, dynamicMainBullets: 3,
    }, // panorama effect parameters
    panorama: {
        depth: 200, rotate: 45,
    },
    breakpoints: {
        480: {
            slidesPerView: 2, panorama: {
                rotate: 35, depth: 150,
            },
        }, 640: {
            slidesPerView: 3, panorama: {
                rotate: 30, depth: 150,
            },
        }, 1024: {
            slidesPerView: 4, panorama: {
                rotate: 30, depth: 200,
            },
        }, 1200: {
            slidesPerView: 3, panorama: {
                rotate: 25, depth: 250,
            },
        },
    },
});
console.log(swiper);
