<section class="blog-grid column-center">
  <div class="inner-container">
    <h2 class="title">{{ $header }}</h2>
  </div>
  <div class="post-container">
    <ul class="blog-list">
      @foreach($blog_list as $ID)
        <li style="{{ Archive::postImageBg($ID) }}" class="single-blog-post">
          <article>
            <a href="{{ get_the_permalink($ID) }}">
              <h4 class="single-blog-title">{!! get_the_title($ID) !!}</h4>
              <p class="description">{!! get_the_excerpt($ID) !!}</p>
            </a>
          </article>
        </li>
      @endforeach
    </ul>
  </div>
</section>