class MobileMenu {
  constructor() {
    this.mobileMenuBtn = document.querySelector('.js-mobile-menu-trigger');
    this.mobileMenu = document.querySelector('.mobile-menu');
    this.events();
  }

  events() {
    // console.log('menu init');
    // console.log(this.mobileMenuBtn);

    this.mobileMenuBtn.addEventListener('click', () => this.toggleMenu());


    window.addEventListener('resize', () => {
      const width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
      if (width > 767 && this.mobileMenu.classList.contains('active')) {
        this.closeMenu();
      }
    });
  }

  toggleMenu() {
    document.body.classList.toggle('no-scroll');
    this.mobileMenu.classList.toggle('active');
    this.mobileMenuBtn.classList.toggle('active');
    this.mobileMenuBtn.getAttribute('aria-expanded') === 'false'
      ? this.mobileMenuBtn.setAttribute('aria-expanded', 'true')
      : this.mobileMenuBtn.setAttribute('aria-expanded', 'false');
  }

  closeMenu() {
    document.body.classList.remove('no-scroll');
    this.mobileMenu.classList.remove('active');
    this.mobileMenuBtn.classList.remove('active');
    this.mobileMenuBtn.getAttribute('aria-expanded') === 'false'
      ? this.mobileMenuBtn.setAttribute('aria-expanded', 'true')
      : this.mobileMenuBtn.setAttribute('aria-expanded', 'false');
  }
}

export default MobileMenu;
