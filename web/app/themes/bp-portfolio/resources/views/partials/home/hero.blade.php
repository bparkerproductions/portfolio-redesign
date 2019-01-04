<section class="hero">
  <div class="inner-container">
    <div class="social-media">
      @foreach($social_media as $icon)
        <a class="{{$icon['link']}}">
          <i class="{{$icon['class']}}"></i>
        </a>
      @endforeach
    </div>

    <div class="content-container">
      <h1 class="bold">
        {{$hero_title}}
      </h1>
      <h3 class="light">
        {{$hero_subtitle}}
      </h3>
    </div>

    <div class="button-container hard-center">
      <a href="{{$hero_button_link}}">
        <button class="button large black">
          {{$hero_button_text}}
          <i class="fas fa-caret-right"></i>
        </button>
      </a>
    </div>
  </div>
</section>