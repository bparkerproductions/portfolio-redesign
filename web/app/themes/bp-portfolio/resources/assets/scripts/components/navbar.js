import scroll from './scroll';

export default {
  init() {
    $('.toggle-container').on('click', this.toggleNav);
    $(document).scroll(this.navScroll);
  },
  toggleNav() {
    let $navbar = $('.primary-content');
    let $content = $('.content-container');
    $navbar.toggleClass('active');
    $content.toggleClass('active');
  },
  navScroll() {
    scroll.addClassOnScroll('.primary-content', 120);
  },
}