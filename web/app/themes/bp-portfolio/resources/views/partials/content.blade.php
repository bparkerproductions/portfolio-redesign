<article @php post_class('col') @endphp>
  <header>
    @include('partials/entry-meta')
    <h4 class="entry-title">
      <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
    </h4>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
