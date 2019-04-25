<div class="all-projects projects spacer-small column-center">
  <div class="inner-container projects-section">
    @foreach($all_projects as $id)
      @include('partials.global.project-preview')
    @endforeach
  </div>
</div>
