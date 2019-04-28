<section class="hero">
  <div class="inner-container">
    <div class="social-media">
      @foreach($social_media as $icon)
        <a href="{{$icon['link']}}">
          <i class="{{$icon['class']}}"></i>
        </a>
      @endforeach
    </div>

    <div class="content-container">
      <h1 data-lax-preset="spin fadeInOut" class="bold">
        {{$hero_title}}
      </h1>
      <div class="hero-cards-container">
        <div class="hero-cards">
          @foreach($hero_blurbs as $card)
            <div class="hero-card">
              <div class="icon-container">
                <i class="{{$card['icon']}}"></i>
              </div>
              <h6>{{$card['title']}}</h6>
              <p class="subtitle">{{$card['subtitle']}}</p>
            </div>
          @endforeach
        </div>

        <div class="button-container hard-center">
          <a>
            <button class="button large black rotate projects-button">
              {{$hero_button_text}}
              <i class="fas fa-caret-right"></i>
            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="toggle-more goto-about-me">
      <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</section>