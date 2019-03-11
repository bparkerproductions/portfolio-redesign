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

  public function projectOverview() {
    return get_field("overview", get_the_ID());
  }

  public function projectProcess() {
    return get_field("process", get_the_ID());
  }

  public function projectTechnologies() {
    return get_field("technologies", get_the_ID());
  }

  public function techList() {
    return get_field('tech', get_the_ID());
  }
}
