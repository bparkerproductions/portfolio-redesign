<div class="entry-meta">
  <div class="meta-col">
    <div class="icon-container">
      <i class="fas fa-calendar fa-lg faded-blue"></i>
    </div>
    <time class="updated"
    datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date() }}
    </time>
  </div>

  <div class="meta-col">
    <div class="icon-container">
      <i class="fas fa-folder-open fa-lg faded-blue"></i>
    </div>
    <div class="categories">
      @foreach(get_the_category() as $cat)
        <a href={{get_category_link($cat->cat_ID)}}>
          {{$cat->name}}
        </a>
      @endforeach
    </div>
  </div>
</div>
