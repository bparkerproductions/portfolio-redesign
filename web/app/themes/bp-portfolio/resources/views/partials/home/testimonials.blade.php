<section class="testimonials column-center spacer">
  <div class="inner-container">

    <div class="testimonial-container">

    {{-- Previous Toggle --}}
      <div class="previous toggle">
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
              <p class="{{get_field('classes', $testimonial)}}">
                {!! get_field('text', $testimonial) !!}
              </p>
            </div>
          </div>
          @include('partials.home.client-info')
        </div>
      @endforeach

      {{-- Next Toggle --}}
      <div class="next toggle">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
  </div>
</section>