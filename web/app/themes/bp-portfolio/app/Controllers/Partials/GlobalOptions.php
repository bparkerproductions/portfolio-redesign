<?php

namespace App\Controllers\Partials;

trait GlobalOptions {
  public function socialMedia() {
    return get_field('social_media', 'option');
  }

  public function ctaHeader() {
    return get_field('cta_header', 'option');
  }

  public function ctaEmailLink() {
    return get_field('cta_email_link', 'option');
  }
}