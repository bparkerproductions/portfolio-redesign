<?php

namespace App\Controllers\Partials;

trait FrontPageProjects {
  public function projectsTitle() {
    return get_field("projects_title");
  }

  public function projectCategories() {
    return get_field("project_categories");
  }

  public function projectsBtnLink() {
    return get_field("projects_button")['url'];
  }

  public function projectsBtnText() {
    return get_field("projects_button")['title'];
  }
}