<section class="archive-category-list column-center spacer-small">
  <div class="inner-container">
    <h3 class="black">Browse Categories</h3>
    <div class="archive-categories">
      <div class="single-category {{$blog_active}}">
        <a href="{{$blog_link}}">All Categories</a>
      </div>
      @foreach($category_list as $cat)
        <div class="single-category">
          <a href="{{get_category_link($cat->cat_ID)}}">
            {{$cat->name}}
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>