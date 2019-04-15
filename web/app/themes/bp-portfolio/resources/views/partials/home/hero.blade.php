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
      <h4 class="light">{{$hero_subtitle}}</h4>
    </div>

    <div class="button-container hard-center">
      <a>
        <button class="button large black rotate projects-button">
          {{$hero_button_text}}
          <i class="fas fa-caret-right"></i>
        </button>
      </a>
    </div>

    <div class="toggle-more goto-about-me">
      <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</section>