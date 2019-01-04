<section class="hero">
  <div class="inner-container">
    <div class="content-container">
      <h1>
        {{$hero_title}}
      </h1>
      <h3>
        {{$hero_subtitle}}
      </h3>
    </div>

    <div class="social-media">
      @foreach($social_media as $icon)
        <a class="{{$icon['link']}}">
          <i class="{{$icon['class']}}"></i>
        </a>
      @endforeach
    </div>
  </div>
</section>