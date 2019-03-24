<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
  use Partials\ProjectSingle;
  use Partials\Comments;

  public function testimonials() {
    return get_field('testimonial');
  }

  public function blogLink() {
    return get_page_link(get_page_by_title('Blog')->ID);
  }
}