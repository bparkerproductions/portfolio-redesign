export default {
  init() {
    $('.toggle-container').on('click', this.toggleNav);
  },
  toggleNav() {
    let $navbar = $('.primary-content');
    let $content = $('.content-container');
    $navbar.toggleClass('active');
    $content.toggleClass('active');
  },
};
