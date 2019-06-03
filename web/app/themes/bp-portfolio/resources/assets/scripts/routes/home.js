import Scroll from '../components/scroll';
import lax from 'lax.js';

export default {
  init() {
    this.setEventListeners();
    this.initLax();
  },
  setEventListeners() {
    $('.projects-button').click(() => {
      Scroll.to('#projects-container');
    });

    $('.goto-about-me').click(() => {
      Scroll.to('#about-container');
    });
  },
  initLax() {
    lax.setup() // init

    const updateLax = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(updateLax)
    }

    window.requestAnimationFrame(updateLax)
  },
}

