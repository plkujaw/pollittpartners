class MoreWork {
  constructor() {
    this.moreWork = document.querySelectorAll('.more-work');
    this.moreWorkBtns = document.querySelectorAll('.more-work__load');
    this.moreWorkFirstBtn = this.moreWork[0].querySelector('.more-work__load');
    this.events();
  }

  events() {
    this.moreWorkFirstBtn.style.display = 'block';
    this.moreWorkBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const currentSection = btn.parentElement;
        currentSection.classList.add('active');
        btn.style.display = 'none';
        const nextSection = this.getNextSibling(currentSection, '.more-work');
        if (nextSection) {
          const nextSectionBtn = nextSection.querySelector('.more-work__load');
          nextSectionBtn.style.display = 'block';
        }
      });
    });
  }

  getNextSibling = function (elem, selector) {
    // Get the next sibling element
    let sibling = elem.nextElementSibling;

    // If there's no selector, return the first sibling
    if (!selector) return sibling;

    // If the sibling matches our selector, use it
    // If not, jump to the next sibling and continue the loop
    while (sibling) {
      if (sibling.matches(selector)) return sibling;
      sibling = sibling.nextElementSibling;
    }
  };
}

export default MoreWork;
