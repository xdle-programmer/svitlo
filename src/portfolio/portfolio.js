import Swiper, {Pagination} from 'swiper';
import 'swiper/scss';
import 'swiper/scss/pagination';


const swiper = new Swiper('.portfolio__slider .swiper', {
    modules: [Pagination],
    slidesPerView: 1.5,
    spaceBetween: 12,
    loop: true,
    loopedSlides: 10,
    centeredSlides: true,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination', dynamicBullets: true, dynamicMainBullets: 3,
    },
    breakpoints: {
        480: {
            slidesPerView: 2
        }, 640: {
            slidesPerView: 3
        }, 1024: {
            slidesPerView: 4
        }, 1200: {
            slidesPerView: 3
        },
    },
});
