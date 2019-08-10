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
    <div class="button-container">
      <a href="{{get_permalink($id)}}">
        <button class="button black">
          See Details
          <i class="fa fa-caret-right"></i>
        </button>
      </a>
    </div>

    @if(get_field('link', $id))
      <div class="button-container">
        <a href="{{get_field('link', $id)}}">
          <button class="button black">
            See Project
            <i class="fa fa-caret-right"></i>
          </button>
        </a>
      </div>
    @endif
  </div>
</article>