@php
  $featured = get_field('is_featured', get_the_ID());
  $is_featured = $featured ? 'featured-post' : '';
@endphp

<article @php post_class('col ' . $is_featured) @endphp>
  <section class="top-post">
    @if($featured)
      <div class="featured-icon">
        <i class="fas fa-star fa-lg white"></i>
      </div>
    @endif
    <header>
      @include('partials/entry-meta')
      <div>
      <h4 class="entry-title">
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      </h4>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </section>

  <a class="read-more-link" href="{{get_permalink()}}">
    <div class="read-more">
      <i class="fas fa-hand-point-right white fa-2x"></i>
      <h3 class="read-more-text">Read Post</h3>
    </div>
  </a>
</article>
