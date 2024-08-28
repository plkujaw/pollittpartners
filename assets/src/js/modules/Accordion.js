class Accordion {
  constructor(accordion) {
    this.accordion = accordion;
    this.panel = accordion.querySelector('.js-accordion-panel');
    this.btn = accordion.querySelector('.js-accordion-btn');
    this.title = accordion.querySelector('.js-accordion-title');
    this.events();
  }

  events() {
    this.btn.addEventListener('click', () => this.toggleSlide());
    if (this.title) {
      this.title.addEventListener('click', () => this.toggleSlide());
    }

  }

  toggleSlide() {
    if (this.panel.style.maxHeight) {
      this.panel.style.maxHeight = null;
      this.btn.innerHTML = `${this.btn.dataset.text} More +`;
    } else {
      this.panel.style.maxHeight = this.panel.scrollHeight + 'px';
      this.btn.innerHTML = `${this.btn.dataset.text} Less -`;
    }
  }
}

export default Accordion;
