import Scroll from '../components/scroll';

export default {
  init() {
    this.setEventListeners();
  },
  setEventListeners() {
    $('.projects-button').click(() => {
      Scroll.to('#projects-container');
    });

    $('.goto-about-me').click(() => {
      Scroll.to('#about-container');
    });
  },
}

