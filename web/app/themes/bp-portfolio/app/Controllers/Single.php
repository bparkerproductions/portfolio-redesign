<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
  use Partials\ProjectSingle;

  public function testimonials() {
    return get_field("testimonial");
  }
}