export default {
  to(obj) {
    let $id = $(obj);

    $('html,body').animate({
      scrollTop: $id.offset().top-50,
    }, 500, 'linear');
  },
}