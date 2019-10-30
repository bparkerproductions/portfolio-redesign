<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {
    use Partials\GlobalOptions;
    use Partials\GlobalFields;
    use Partials\Navbar;

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

    public function blogLink() {
      return get_page_link(get_page_by_title('Blog')->ID);
    }

    public function projectsPage() {
      return get_page_by_title('All Projects')->ID;
    }

    public function projectsLink() {
      return get_page_link($this->projectsPage());
    }

    public function robotsMeta() {
      $isProjectsPage = get_the_ID() == $this->projectsPage();
      $isProjects = get_post_type() == 'projects' || $isProjectsPage;
      return $isProjects  ? ['robots', 'noindex'] : ['', ''];
    }

    public function randomPostIds() {
      $latest = new \WP_Query( array (
          'post__not_in' => array(get_the_ID()),
          'orderby'               => 'rand',
          'posts_per_page'        => 100,
          'fields' => 'ids'
      ));

      return array_slice($latest->posts, 0, 4);
    }

    public function heroBgImage() {
      return get_field('hero_background_image', 'option');
    }
}
