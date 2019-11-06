export default {
  init() {
    //initially set card amount
    Slider.init();
  },
}

let Slider = {
  init() {
    Slider.initMainSlider();
    Slider.setEventListeners();
  },
  setEventListeners() {
    $('.toggle.previous').click(function() {
      Slider.getSliderContainer().slick('slickPrev');
    });

    $('.toggle.next').click(function() {
      Slider.getSliderContainer().slick('slickNext');
    });
  },
  getSliderContainer() {
    return $('.testimonials-container .slider-container');
  },
  initMainSlider() {
    Slider.getSliderContainer().slick({
      arrows: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 1,
            adaptiveHeight: true,
          },
        },
      ],
    });
  },
}