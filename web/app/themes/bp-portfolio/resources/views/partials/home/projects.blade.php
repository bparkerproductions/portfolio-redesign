<section class="spacer column-center projects">
  <div class="inner-container">
    <div class="projects-section-header">
      <h1 class="blue">
        {{$projects_title}}
      </h1>

      <div class="project-select">
        @foreach($project_categories as $category)
          <div class="project-col">
            <i class="{{$category['icon']}}"></i>

            <span>
              {{$category['cat_title']}}
            </span>
          </div>
        @endforeach
      </div>
    </div>

    <div class="projects-section">

      {{-- Loop through each project in every category --}}
      @foreach($project_categories as $category)

        @if($category['projects'])
          @foreach($category['projects'] as $project)
            <div class="project">
              <div class="header-container">
                <h4 class="white">
                  {{$project['title']}}
                </h4>
                <div class="icon-container">
                  @foreach($project['tech'] as $tech)
                    <i class="{{$tech['icon']}}"></i>
                  @endforeach
                </div>
              </div>
              <div class="image-container">
                <a href="{{$project['link']}}">
                  <img src="{{$project['image']}}">
                </a>
              </div>
            </div>
          @endforeach
        @endif
      @endforeach
    </div>

    <div class="button-container">
      <a href="{{$projects_btn_link}}">
        <button class="button black large">
          {{$projects_btn_text}}
          <i class="fas fa-caret-right"></i>
        </button>
      </a>
    </div>
  </div>
</section>