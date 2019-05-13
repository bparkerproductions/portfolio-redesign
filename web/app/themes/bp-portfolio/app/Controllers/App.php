<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
    use Partials\GlobalOptions;
    use Partials\GlobalFields;

    public function siteName() {
      return get_bloginfo('name');
    }

    public static function title() {
      if (is_home()) {
        if ($home = get_option('page_for_posts', true)) {
            return get_the_title($home);
        }
        return __('Latest Posts', 'sage');
      }
      if (is_archive()) {
          return get_the_archive_title();
      }
      if (is_search()) {
          return sprintf(__('Search Results for %s', 'sage'), get_search_query());
      }
      if (is_404()) {
          return __('Not Found', 'sage');
      }
      return get_the_title();
    }

    public static function IsActive($page) {
      return is_page($page) ? 'active' : '';
    }

    public function primaryNavItems() {
      $menuLocations = get_nav_menu_locations();
      $menuID = $menuLocations['primary_navigation'];

      return wp_get_nav_menu_items($menuID);
    }
}
