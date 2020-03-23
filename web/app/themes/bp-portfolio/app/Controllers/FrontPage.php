<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {
  public function homeHero() {
    return get_field('home_hero');
  }
}
