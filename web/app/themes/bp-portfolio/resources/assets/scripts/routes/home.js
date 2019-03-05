export default {
  init() {
    this.appendReadLink();

    $('span.read').click(this.expandDesc);
  },
  appendReadLink() {
    let $para = $('.project .para');
    $('.hide', $para).hide();

    $para.append('<span class=\'read\'>Read More...</span>');
  },
  expandDesc() {
    let $para = $(this).closest('.para');
    $(this).text('Show less...');
    $('.hide', $para).toggle();
  },
};
