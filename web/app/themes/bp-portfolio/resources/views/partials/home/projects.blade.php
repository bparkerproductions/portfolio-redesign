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
    
    @include('partials.home.projects-section')
  
    <div class="toggle-more">
      <i class="fas fa-chevron-down"></i>
    </div>

    <div class="button-container">
      <a href="{{$projects_btn_link}}">
        <button class="button black medium">
          {{$projects_btn_text}}
          <i class="fas fa-caret-right"></i>
        </button>
      </a>
    </div>
  </div>
</section>