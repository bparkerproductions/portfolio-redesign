<?php

namespace App\Controllers\Partials;

trait FrontPageProjects {
  public function projectsTitle() {
    return get_field("projects_title");
  }

  public function allProjects() {
    return get_field("all_projects");
  }
}