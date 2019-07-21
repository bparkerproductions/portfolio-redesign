<div class="column-center spacer">
  <div class="inner-container entry-content">
    @include('partials.global.tech-list', [
      'technology_list' => $technologies_list,
      'classes' => ''
    ])

    @php the_content(); @endphp

    @include('partials.global.related-media', [
      'related_media' => $related_media
    ])
  </div>
</div>