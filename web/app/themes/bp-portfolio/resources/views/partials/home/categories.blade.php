<section class="blog-categories">
  <ul class="categories-list">
    @foreach($categories as $category)
      @foreach($category as $id)
      <li class="single-category">
        <a class="category-link" href="{{ get_category_link($id) }}">
          <span class="category-title">{{ get_cat_name($id) }}</span>
          <i class="{{ get_field('fa_icon_class', APP::CategoryIconID($id)) }}"></i>
        </a>
      </li>
      @endforeach
    @endforeach
  </ul>
</section>