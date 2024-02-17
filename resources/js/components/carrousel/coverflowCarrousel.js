import Swiper from "swiper";

import { Navigation, Pagination, EffectCoverflow, Autoplay } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import 'swiper/css/autoplay';


// init Swiper:
const coverflowSwiper = new Swiper('.coverflow-carrousel-container', {
  // configure Swiper to use modules
  modules: [Pagination, EffectCoverflow, Autoplay ],

  autoplay: {
      delay: 2500,
      disableOnInteraction: false
  },


  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  slidesPerView: 3,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
      speed: 2600,

    },
    880: {
      slidesPerView: 3,
      speed: 2600,

    },
  }, 
});

coverflowSwiper.init();


  