<section class="blog-categories">
  <ul class="categories-list">
    @foreach($categories as $category)
      @foreach($category as $id)
      <li class="single-category">
        <span class="category-title">{{ get_cat_name($id) }}</span>
      </li>
      @endforeach
    @endforeach
  </ul>
</section>