<article class="project">
  <div class="project-inner">
    @if(get_field('is_featured', $id))
      <div class="featured-icon">
        <i title="Featured Project" class="fas fa-star fa-lg black"></i>
      </div>
    @endif

    <div class="header-container">
      <h4 class="white">
        {{get_field('title', $id)}}
      </h4>
      <div class="icon-container">
        @foreach(get_field('tech', $id) as $tech)
          <i class="{{$tech['icon']}}"></i>
        @endforeach
      </div>
    </div>
    <div class="image-container">
      <img src="{{get_field('image', $id)}}">

      <div role="toggle" class="project-info">
        <div class="link-container">
          @if(get_field('link', $id))
            <a href="{{get_field('link', $id)}}">
              <i class="fas fa-external-link-alt"></i>
              <span class="link-text">See Site</span>
            </a>
          @endif
        </div>
        <div class="description">
          <p>{{get_field('description', $id)}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="button-wrap">
    @include('partials.components.button', [
      'link' => get_permalink($id),
      'text' => 'See Details'
    ])

    @if(get_field('link', $id))
      @include('partials.components.button', [
        'link' => get_field('link', $id),
        'text' => 'See Project'
      ])
    @endif
  </div>
</article>