<section class="spacer column-center projects">
  <div class="inner-container">
    <div class="projects-section-header">
      <h1 class="blue">
        {{$projects_title}}
      </h1>
    </div>

    @include('partials.home.projects-section')

    <div class="bottom-link-container">
      <a class="link black"
         href="{{$bottom_link}}">
        <i class="fas fa-arrow-right"></i>
        {{$bottom_link_text}}
      </a>
      <a class="link black"
         href="{{$site_link}}">
        <i class="fas fa-arrow-right"></i>
        {{$site_link_text}}
      </a>
    </div>
  </div>
</section>