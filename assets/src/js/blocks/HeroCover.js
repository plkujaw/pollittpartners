import Rellax from 'rellax';

class HeroCover {
  constructor() {
    this.media = document.querySelector('.hero-cover__media');
    if (this.media) {
      this.events();
    }
  }

  events() {
    this.rellaxInit();
  }

  rellaxInit() {
    const rellax = new Rellax(this.media);
  }
}

export default HeroCover;
