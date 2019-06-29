<?php

namespace App\Controllers\Partials;

trait ArchivePost {
  public function categoryList() {
    $args = [
      'orderby' => 'name',
      'parent' => 0
    ];

    return get_categories($args);
  }

  public function blogLink() {
    return get_page_link(get_page_by_title('Blog')->ID);
  }

  public function blogActive() {
    $page_id = get_page_by_title('Blog')->ID;
    return is_page($page_id) ? 'active' : '';
  }

  public function isFeatured() {
    return get_field('featured');
  }
}