<div class="client-info">
  {{-- Name --}}
  <p class="client-name">
    <i class="fas fa-user"></i>
    <span class="text">
      {{get_field('name', $testimonial)}}
    </span>
  </p>

  {{-- Company --}}
  <a class="client-company"
  href="{{get_field('company', $testimonial)}}">
    <i class="fas fa-briefcase"></i>
    <span class="link">
      Website
    </span>
  </a>

  {{-- Project Link --}}
  @if(get_field('project', $testimonial) && is_front_page())
    @php $project_id = get_field('project', $testimonial)[0] @endphp
    <a class="project-link" href="{{get_permalink($project_id)}}">
      <i class="fas fa-laptop-code"></i>
      <span class="link">See Project</span>
    </a>
  @endif
</div>