<div class="entry-meta">
  <time class="updated"
  datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
  <div class="categories">
    @foreach(get_the_category() as $cat)
      <a href={{get_category_link($cat->cat_ID)}}>
        {{$cat->name}}
      </a>
    @endforeach
  </div>
</div>
