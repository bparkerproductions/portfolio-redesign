<section class="testimonials column-center spacer">
  <div class="inner-container">

    <div class="testimonial-container">

    {{-- Previous Toggle --}}
      <div class="previous">
        <i class="fas fa-chevron-left"></i>
      </div>

      {{-- Testimonials --}}
      @foreach($testimonials as $testimonial)
        <div class="testimonial">
          <div class="content">
            <div class="left-quote-container">
              <i class="fas fa-quote-left"></i>
            </div>
            <div class="inner-content">
              <p>
                {!! $testimonial['text']!!}
              </p>
            </div>
            <div class="right-quote-container">
              <i class="fas fa-quote-right"></i>
            </div>
          </div>
          <div class="client-info">
            <p class="client-name">
              <i class="fas fa-user"></i>
              <span class="text">
                {{$testimonial['name']}}
              </span>
            </p>

            <a class="client-company"
            href="{{$testimonial['company']}}">
              <i class="fas fa-briefcase"></i>
              <span class="link">
                Website
              </span>
            </a>
          </div>
        </div>
      @endforeach

      {{-- Next Toggle --}}
      <div class="next">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
  </div>
</section>