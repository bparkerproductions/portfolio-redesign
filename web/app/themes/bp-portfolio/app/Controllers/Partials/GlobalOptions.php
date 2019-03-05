<?php

namespace App\Controllers\Partials;

trait GlobalOptions {
  public function socialMedia() {
    return get_field('social_media', 'option');
  }
}