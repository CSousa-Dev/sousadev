import Swiper from "swiper";

import { Navigation, Pagination, EffectCoverflow, Autoplay } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import 'swiper/css/autoplay';

// init Swiper:
const highligthsSwiper = new Swiper('.simple-single-slide', {
  // configure Swiper to use modules
  modules: [Pagination, EffectCoverflow, Autoplay ],

  autoplay: {
      delay: 8000,
      disableOnInteraction: false
  },

  speed: 800,

  spaceBetween: 30,

  grabCursor: true,
  allowSlidePrev: true,
  loop: true,
  slidesPerView: 1,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  }
});

highligthsSwiper.init();


  