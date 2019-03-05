<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {
  use Partials\FrontPageHero;
  use Partials\FrontPageAbout;
  use Partials\FrontPageProjects;

  public function testimonials() {
    return get_field("testimonials");
  }
}
