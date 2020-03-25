import navbar from '../components/navbar';
import text from '../components/text';
import testimonial from '../components/testimonial';
import post from '../components/post';
import relatedPosts from '../components/related-posts';
import categories from '../components/categories'

export default {
  init() {
    categories.init();
    text.init();
    navbar.init();
    testimonial.init();
    post.init();
    relatedPosts.init();
  },
};
