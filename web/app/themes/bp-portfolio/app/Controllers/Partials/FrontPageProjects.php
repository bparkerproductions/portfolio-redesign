<?php

namespace App\Controllers\Partials;

trait FrontPageProjects {
  public function projectsTitle() {
    return get_field("projects_title");
  }

  public function allProjects() {
    return get_field("all_projects");
  }

  public function bottomLinkText() {
    return get_field("bottom_link")["title"];
  }

  public function bottomLink() {
    return get_field("bottom_link")["url"];
  }

  public function siteLinkText() {
    return get_field("site_link")["title"];
  }

  public function siteLink() {
    return get_field("site_link")["url"];
  }
}