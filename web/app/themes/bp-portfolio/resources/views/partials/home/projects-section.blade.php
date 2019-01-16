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