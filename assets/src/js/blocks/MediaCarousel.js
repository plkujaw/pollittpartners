import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';

class MediaCarousel {
  constructor(wrapper) {
    this.wrapper = wrapper;
    this.id = this.wrapper.dataset.id;
    this.events();
  }

  events() {
    this.carouselInit();
  }

  carouselInit() {
    this.carousel = new Swiper(
      this.wrapper.querySelector('.swiper-container'),
      {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        navigation: {
          nextEl: `.swiper-button-next.${this.id}`,
          prevEl: `.swiper-button-prev.${this.id}`,
        },
        pagination: {
          el: `.swiper-pagination.${this.id}`,
          type: 'fraction',
        },
        loop: true,
  
        on: {
          // init: function (swiper) {
          //   swiper.navigation.prevEl[0].removeAttribute('disabled');
          // },
          // slidePrevTransitionEnd: function (swiper) {
          //   swiper.navigation.prevEl[0].removeAttribute('disabled');
          // },
          // slideNextTransitionEnd: function (swiper) {
          //   swiper.navigation.nextEl[0].removeAttribute('disabled');
          // },
        },
        breakpoints: {
          599: {
            pagination: {
              enabled: true,
            },
          },
        },
      }
    );
  }
}

export default MediaCarousel;
