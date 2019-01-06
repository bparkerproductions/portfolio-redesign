export default {
  init() {
    $('.toggle-container').on('click', this.toggleNav);
  },
  toggleNav() {
    let $navbar = $('.primary-navigation');
    let $content = $('.content-container');
    $navbar.toggleClass('active');
    $content.toggleClass('active');
  },
};
