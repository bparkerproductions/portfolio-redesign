export default {
  init() {
    //initially set card amount
    this.setCardLength();
    this.setEventListeners();
    Testimonial.setActive();
  },
  setEventListeners() {
    $('.toggle.previous').click(Testimonial.previousIndex);
    $('.toggle.next').click(Testimonial.nextIndex);
  },
  setCardLength() {
    let $cards = Testimonial.getCards();
    Testimonial.amountCards = $cards.length-1;

    //if there aren't any cards to scroll through,
    //don't show the toggle switches
    if($cards.length <= 1) {
      $('.toggle').hide();
    }
  },
}

let Testimonial = {
  activeIndex: 0,
  amountCards: 0,
  getCards() {
    return $('.testimonial-container .testimonial');
  },
  resetAll() {
    let $cards = Testimonial.getCards();
    $cards.each( (index, elem) => {
      $(elem).removeClass('active');
    });
  },
  setActive() {
    let $cards = Testimonial.getCards();
    $cards.each( (index, elem) => {
      if(index == Testimonial.activeIndex) {
        $(elem).addClass('active');
      }
    });
  },
  updateCard() {
    this.resetAll();
    this.setActive();
  },
  nextIndex() {
    Testimonial.activeIndex++;

    //if the index is out of range, go back to 0
    if(Testimonial.activeIndex > Testimonial.amountCards) {
      Testimonial.activeIndex = 0;
    }

    Testimonial.updateCard();
  },
  previousIndex() {
    Testimonial.activeIndex--;

    //if index is below range, set to end
    if(Testimonial.activeIndex < 0) {
      Testimonial.activeIndex = Testimonial.amountCards;
    }

    Testimonial.updateCard();
  },
}
