<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller {
  use Partials\ArchivePost;

  public function authorUrl() {
    return get_author_posts_url(get_the_author_meta( 'ID' ));
  }

  public static function postImageBg($id) {
    $postImageUrl = get_the_post_thumbnail_url($id);

    if($postImageUrl) return 'background-image: url("' . $postImageUrl . '")';
    else return '';
  }
}
