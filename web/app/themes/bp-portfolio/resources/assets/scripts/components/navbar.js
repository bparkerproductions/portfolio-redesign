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
    let scroll = $(document).scrollTop();
    let $navbar = $('.primary-content');

    if(scroll > 100) {
      $navbar.addClass('scrolled');
    }
    else {
      $navbar.removeClass('scrolled');
    }
  },
}