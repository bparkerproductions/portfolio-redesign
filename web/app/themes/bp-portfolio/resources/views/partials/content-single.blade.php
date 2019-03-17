<div class="column-center spacer">
  <div class="inner-container entry-content">
    <article @php post_class() @endphp>
      <header>
        @include('partials/entry-meta')

        <div class="image-container">
          {!! get_the_post_thumbnail() !!}
        </div>
      </header>
      <div class="entry-content">
        @php the_content() @endphp
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
    </article>
  </div>
</div>
