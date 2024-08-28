import VerticalCarousel from './blocks/VerticalCarousel';
import MediaCarousel from './blocks/MediaCarousel';
import MobileMenu from './modules/MobileMenu';
import Cursor from './modules/Cursor';
import HeroCover from './blocks/HeroCover';
import Accordion from './modules/Accordion';
import PeopleCarousel from './blocks/PeopleCarousel';
import Map from './blocks/Map';
import SelectedClients from './blocks/SelectedClients';
import MoreWork from './blocks/MoreWork';
import LoadMore from './modules/LoadMore';

const mobileMenu = new MobileMenu();

if (document.body.classList.contains('blog')) {
  const loadMore = new LoadMore();
}

if (document.querySelector('.cursor')) {
  const cursor = new Cursor();
}

if (document.querySelector('.hero-cover')) {
  const heroCover = new HeroCover();
}

if (document.querySelector('#map')) {
  const map = new Map();
}

if (document.querySelector('.vertical-carousel')) {
  const verticalCarousel = new VerticalCarousel();
}

if (document.querySelector('.selected-clients')) {
  const selectedClients = new SelectedClients();
}

if (document.querySelector('.more-work')) {
  const moreWork = new MoreWork();
}

document.querySelectorAll('.media-carousel').forEach((carousel) => {
  const mediaCarousel = new MediaCarousel(carousel);
});

document.querySelectorAll('.people-carousel').forEach((carousel) => {
  const peopleCarousel = new PeopleCarousel(carousel);
});

document.querySelectorAll('.js-accordion').forEach((accordion) => {
  const acc = new Accordion(accordion);
});

window.onload = document.body.classList.remove('preload');

// body bg color change
const sections = [...document.querySelectorAll('[data-body-bg]')];
const body = document.body;
const options = {
  root: null,
  rootMargin: '0px 0px 0px 0px',
  threshold: 0.25,
};

const observer = new IntersectionObserver(changeBackroundColour, options);

function changeBackroundColour(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const prefix = 'body-bg-';
      const classes = body.className
        .split(' ')
        .filter((c) => !c.startsWith(prefix));
      body.className = classes.join(' ').trim();
      body.classList.add('body-bg-' + entry.target.dataset.bodyBg);
    } else {
      body.classList.remove('body-bg-' + entry.target.dataset.bodyBg);
    }
  });
}

sections.forEach((section) => {
  observer.observe(section);
});

// lazy load
const lazyLoadItems = [...document.querySelectorAll('.js-lazy-load')];
const lazyLoadOptions = {
  root: null,
  rootMargin: '90px 0px',
  threshold: 0.1,
};

const lazyLoadObserver = new IntersectionObserver(lazyLoad, lazyLoadOptions);

function lazyLoad(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('loaded');
    }
  });
}

lazyLoadItems.forEach((item) => {
  lazyLoadObserver.observe(item);
});
