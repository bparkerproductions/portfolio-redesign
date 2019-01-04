<?php

namespace App\Controllers\Partials;

trait FrontPageHero {
  public function heroTitle() {
    return get_field("home_hero_title");
  }

  public function heroSubtitle() {
    return get_field("home_hero_subtitle");
  }
}
