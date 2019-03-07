<div class="projects-section">
  @foreach($all_projects as $id)
    <div class="project">
      <div class="project-inner">
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
              <a href="{{get_field('link', $id)}}">
                <i class="fas fa-external-link-alt"></i>
                <span class="link-text">See Site</span>
              </a>
            </div>
            <div class="description">
              <p>{{get_field('description', $id)}}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="button-container">
        <a href="">
          <button class="button black">
            See Details
            <i class="fa fa-caret-right"></i>
          </button>
        </a>
      </div>
    </div>
  @endforeach
</div>