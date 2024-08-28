import Swiper, { Navigation } from 'swiper';
import 'swiper/css';

class PeopleCarousel {
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
        modules: [Navigation],
        slidesPerView: 1.2,
        spaceBetween: 25,
        navigation: {
          nextEl: `.swiper-button-next.${this.id}`,
          prevEl: `.swiper-button-prev.${this.id}`,
        },

        breakpoints: {
          599: {
            slidesPerView: 2.2,
          },
          900: {
            slidesPerView: 3.2,
          },
          1200: {
            slidesPerView: 4.2,
          },
        },
      }
    );
  }
}

export default PeopleCarousel;
