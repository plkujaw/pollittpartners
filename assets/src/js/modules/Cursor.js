class Cursor {
  constructor() {
    this.cursors = document.querySelectorAll('.cursor');
    this.cursor = document.querySelector('.cursor');
    this.hoverable = document.querySelectorAll('a, button, .hoverable');
    this.events();
  }

  events() {
    this.cursors.forEach((cursor) => {
      cursor.classList.remove('hover');
    });
    window.addEventListener('mousemove', this.positionElement);
    this.hoverable.forEach((item) => {
      item.addEventListener('mouseover', () => {
        this.cursor.classList.add('hover');
        if (item.dataset.type == 'project') {
          this.cursor
            .querySelector('.cursor-circle--project')
            .classList.add('show');
        }
        if (item.dataset.type == 'carousel-nav') {
          const nav = item.dataset.nav;
          this.cursor.querySelector(`[data-nav=${nav}]`).classList.add('show');
        }
      });

      item.addEventListener('mouseleave', () => {
        this.cursor.classList.remove('hover');
        this.cursor
          .querySelector('.cursor-circle--project')
          .classList.remove('show');
        this.cursor
          .querySelectorAll('.cursor-circle--nav')
          .forEach((cursorCircle) => {
            cursorCircle.classList.remove('show');
          });
      });
    });
  }

  positionElement = (e) => {
    const mouseY = e.clientY;
    const mouseX = e.clientX;
    this.cursor.style.transform = `translate3d(calc(${mouseX}px - 50%),calc(${mouseY}px - 50%), 0)`;
  };
}

export default Cursor;
