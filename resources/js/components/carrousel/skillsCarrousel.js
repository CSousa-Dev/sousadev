import Swiper from "swiper";

import { Navigation, Pagination, EffectCoverflow, Autoplay } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';


// init Swiper:
const skillsContinuousSwiper = new Swiper('.skills-carrousel-container-continuous', {
  // configure Swiper to use modules
  modules: [Autoplay],

  autoplay: {
      delay: 0,
      disableOnInteraction: false
  },

  speed: 1600,
  grabCursor: true,
  loop: true,
  slidesPerView: 8,

  
  breakpoints: {
    300: {
      slidesPerView: 3,
      speed: 2600,
      loop: true,
    },
    440: {
      slidesPerView: 4,
      speed: 2600,
      loop: true,
    },
    620: {
      slidesPerView: 5,
      speed: 2600,
      loop: true,
    },
    880: {
      slidesPerView: 7,
      speed: 2600,
      loop: true
    },
  }, 
});

const skillsSwiper = new Swiper('.skills-carrousel-container', {
  spaceBetween: 0,
  grabCursor: true,
  slidesPerView: 7
});

skillsContinuousSwiper.init();
skillsSwiper.init();

  