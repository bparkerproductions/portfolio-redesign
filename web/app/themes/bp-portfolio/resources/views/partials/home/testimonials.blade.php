<section class="testimonials column-center spacer">
  <div class="inner-container">

    <div class="tesimonial-container">
      @foreach($testimonials as $testimonial)
        <div class="testimonial">
          <div class="content">
            {!! $testimonial['text']!!}
          </div>
          <div class="client-info">
            <p>
              {{$testimonial['name']}}
            </p>
            <a href="{{$testimonial['company']}}">
              Website
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>