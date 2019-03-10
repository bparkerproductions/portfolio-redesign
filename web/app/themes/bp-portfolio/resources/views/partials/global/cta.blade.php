<section class="cta spacer column-center">
  <div class="inner-container">
    <div class="header-container">
      <h2 class="black">{{$cta_header}}</h2>
      <div class="social-media">
        <div class="cta-social-media">
          @foreach($social_media as $icon)
            <a class="{{$icon['link']}}">
              <i class="{{$icon['class']}}"></i>
            </a>
          @endforeach
        </div>
      </div>
      <a href="mailto:{{$cta_email_link}}">Email</a>
    </div>
  </div>
</section>