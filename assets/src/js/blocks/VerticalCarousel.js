import Swiper, { Mousewheel, Parallax } from 'swiper';
import 'swiper/css';
import 'swiper/css/parallax';

class VerticalCarousel {
  constructor() {
    this.events();
  }

  events() {
    const width =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;
    if (width > 767) {
      this.carouselInit();
    }

    window.addEventListener('resize', () => {
      const width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
      if (width > 767) {
        this.carouselInit();
      } else {
        if (this.carousel !== undefined) {
          this.carousel.destroy(true, true);
          // console.log(this.carousel);
        }
      }
    });
  }

  carouselInit() {
    const slides = document.getElementsByClassName('swiper-slide');
    const slidesLength = slides.length;
    this.carousel = new Swiper('.swiper-container', {
      modules: [Parallax, Mousewheel],
      observer: true,
      observeParents: true,
      speed: 1200,
      direction: 'vertical',
      mousewheel: { releaseOnEdges: false },
      followFinger: false,
      touchReleaseOnEdges: true,
      longSwipes: false,
      parallax: true,

      on: {
        beforeSlideChangeStart: () => {
          document.body.classList.add('body-bg-black');
        },
        beforeTransitionStart: () => {
          document.body.classList.add('body-bg-black');
        },
        changeDirection: () => {
          document.body.classList.add('body-bg-black');
        },
        slideChangeTransitionEnd: () => {
          document.body.classList.add('body-bg-black');
        },
        slideChangeTransitionStart: () => {
          document.body.classList.add('body-bg-black');
        },
        toEdge: () => {
          document.body.classList.add('body-bg-black');
        },

        slideChange: (swiper) => {
          const { offsetTop } = swiper.el;
          window.pageYOffset !== offsetTop &&
            window.scrollTo({
              top: offsetTop,
              behavior: 'smooth',
            });
          // document.body.classList.add('body-bg-black');
        },
        slideChangeTransitionEnd: (swiper) => {
          const activeIndex = swiper.activeIndex;
          swiper.params.mousewheel.releaseOnEdges =
            activeIndex === 0 || activeIndex === slidesLength - 1;
        },
      },
    });
    // console.log('swiper init');
  }
}

export default VerticalCarousel;
