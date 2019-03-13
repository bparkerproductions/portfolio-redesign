<section class="project-content column-center">
  <div class="inner-container spacer">

    {{-- Overview --}}
    <div class="content-section spacer-small">
      <h1 class="blue">Project Overview</h1>
      {!!$project_overview!!}
    </div>

    {{-- Process --}}
    <div class="content-section spacer-small">
      <h1 class="blue">Process</h1>
      {!!$project_process!!}
    </div>

    {{-- Show Testimonial If there is one --}}
    @if($testimonials)
      <div id="project-testimonial">
        @include('partials.home.testimonials', [
          'testimonials' => $testimonials
        ])
      </div>
    @endif

    {{-- Technologies --}}
    <div class="content-section spacer-small">
      <h1 class="blue">Technologies Used</h1>
      <div class="icon-container">
        @foreach($tech_list as $tech)
          <i class="{{$tech['icon']}}"></i>
        @endforeach
      </div>
      {!!$project_technologies!!}
    </div>
  </div>
</section>