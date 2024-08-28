class SelectedClients {
  constructor() {
    this.tabBtns = document.querySelectorAll('.js-tab-btn');
    this.tabs = document.querySelectorAll('.js-tab');
    this.events();
  }

  events() {
    this.tabBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const type = btn.dataset.show;
        this.showTab(type);
      });
    });
  }

  showTab(type) {
    this.tabs.forEach((tab) => {
      tab.style.display = 'none';
      setTimeout(() => {
        tab.classList.remove('active');
      }, 10);
    });
    this.tabBtns.forEach((btn) => {
      btn.classList.remove('active');
    });

    const tab = document.querySelector(`[data-list='${type}']`);

    const btn = document.querySelector(`[data-show='${type}']`);
    tab.style.display = 'grid';
    setTimeout(() => {
      tab.classList.add('active');
    }, 10);
    btn.classList.add('active');
  }
}

export default SelectedClients;
