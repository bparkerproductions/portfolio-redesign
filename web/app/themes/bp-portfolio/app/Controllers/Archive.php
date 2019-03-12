<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller {
  public function loopObject() {
    if(is_page("Blog")) {
      return $this->postQuery();
    }
    else if(is_category()) {
      return $this->categoryQuery();
    }
    else {
      //default
      return $this->postQuery();
    }
  }

  public function authorUrl() {
    return get_author_posts_url(get_the_author_meta( 'ID' ));
  }

  public function postQuery() {
    $args = array(
      'post_type' => 'post',
      'nopaging' => true
    );

    return new \WP_Query($args);
  }

  public function categoryQuery() {
    $category = get_queried_object()->term_id;

    $args = array(
      'post_type' => 'post',
      'category__in' => $category
    );

    return new \WP_Query($args);
  }
}
