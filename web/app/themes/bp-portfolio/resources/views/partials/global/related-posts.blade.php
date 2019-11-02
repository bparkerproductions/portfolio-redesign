<section class="related-posts mt-medium">
  <div class="header-container">
    <h2>More Posts</h2>
  </div>
  <div class="inner-container">
    <div class="posts-container layout-two-columns ">
      @foreach($random_post_ids as $ID)
        <article class="col mt-small mb-small">
          <section class="top-post">
            <header>
              @include('partials/entry-meta', [
                'postID' => $ID
              ])
              <div>
              <h4 class="entry-title">
                <a href="{{ get_permalink($ID) }}">
                  {!! get_the_title($ID) !!}
                </a>
              </h4>
            </header>
            <div class="entry-summary">{!! get_the_excerpt($ID) !!}</div>
          </section>

          <a class="read-more-link" href="{{get_permalink($ID)}}">
            <div class="read-more">
              <i class="fas fa-hand-point-right white fa-2x"></i>
              <h3 class="read-more-text">Read Post</h3>
            </div>
          </a>
        </article>
      @endforeach
    </div>
  </div>
</section>