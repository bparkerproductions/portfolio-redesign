<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller {
  public function authorUrl() {
    return get_author_posts_url(get_the_author_meta( 'ID' ));
  }

  use Partials\ArchivePost;
}
