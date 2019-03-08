<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
  public function projectLink() {
    return get_field("link", get_the_ID());
  }
}