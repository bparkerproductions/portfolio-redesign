<section class="bg-black">
  <div class="hero lax" data-lax-translate-y="0 0, 1000 -250">
    <div class="inner-container">
      <div class="content-container lax"
      data-lax-translate-y="0 0, 750 -250">

      <div class="intro-container">
        <h1 class="bold">{{$hero_title}}</h1>

        {{-- <div class="social-media lax"
          data-lax-translate-y="0 0, 750 -250">
          @foreach($social_media as $icon)
            <a href="{{$icon['link']}}">
              <i class="{{$icon['class']}}"></i>
            </a>
          @endforeach
        </div> --}}
      </div>

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
              <button class="button black rotate projects-button">
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
  </div>
</section>