<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateDemos extends Controller {
  public function demoLoop() {
    $options = [
      'post_type' => 'demos',
      'post_status' => 'publish',
      'orderby' => 'title',
      'order' => 'ASC'
    ];

    return new \WP_Query($options);
  }
}