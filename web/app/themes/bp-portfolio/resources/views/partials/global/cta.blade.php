<section class="cta spacer column-center">
  <div class="inner-container">
    <div class="header-container">
      <h2 class="white">{{$cta_header}}</h2>
      <div class="social-media">
        <div class="cta-social-media">
          @foreach($social_media as $icon)
            @if($icon['is_cta'])
              <a href="{{$icon['link']}}">
                <i class="{{$icon['class']}} white"></i>
              </a>
            @endif
          @endforeach
        </div>
      </div>

      <div class="link-container">
        <a href="mailto:{{$cta_email_link}}" class="white">Email</a>
      </div>
    </div>
  </div>
</section>