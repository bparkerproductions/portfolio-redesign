<section class="spacer column-center projects">
  <div class="inner-container">
    <h1 class="blue">
      {{$projects_title}}
    </h1>

    <div class="projects-section-header">
      @foreach($project_categories as $category)
        <div class="project-col">
          <i class="{{$category['icon']}}"></i>
          {{$category['cat_title']}}
        </div>
      @endforeach
    </div>

    <div class="projects-section">

      {{-- Loop through each project in every category --}}
      @foreach($project_categories as $category)

        @if($category['projects'])
          <div class="project">
            @foreach($category['projects'] as $project)
              <h3>
                {{$project['title']}}
              </h3>
              <div class="image-container">
                <a href="{{$project['link']}}">
                  <img src="{{$project['image']}}">
                </a>
              </div>
              <div class="text-container">
                {{$project['desc']}}
              </div>
            @endforeach
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>