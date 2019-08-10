<section id="about-container" class="column-center spacer about-section">
  <div class="inner-container">
    <div class="top-row">
      <div class="content-container">
        <h1 class="blue">{{$about_title}}</h1>
        <p class="para">{!!$about_desc!!}</p>
        @include('partials.components.button', [
          'link' => $about_btn_link,
          'text' => $about_btn_text
        ])
      </div>

      <div class="technologies-container">
        <h3 class="blue tech-header">{{$tech_header}}</h3>
        <div class="technologies">
          @foreach($technologies as $tech)
            @php
              $specialize = $tech['specialize'] ? 'specialized' : '';
            @endphp
            <div class="tech-col {{$specialize}}">
              <i class="{{$tech['icon']}}"></i>
              <span class="tech-label">{{$tech['label']}}</span>
              @if($specialize)
                <div class="specialized-icon">
                  <i class="fas fa-star"></i>
                </div>
              @endif
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @include('blocks.content-rows')
</section>