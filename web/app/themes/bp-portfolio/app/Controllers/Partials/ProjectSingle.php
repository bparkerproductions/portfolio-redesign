<?php

namespace App\Controllers\Partials;

trait ProjectSingle {
  public function projectLink() {
    return get_field("link", get_the_ID());
  }

  public function projectDuration() {
    return get_field("duration", get_the_ID());
  }

  public function projectGoals() {
    return get_field("goals", get_the_ID());
  }

  public function projectLogo() {
    return get_field("logo_preview", get_the_ID());
  }
}
