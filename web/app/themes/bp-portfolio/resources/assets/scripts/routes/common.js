import navbar from '../components/navbar';
import text from '../components/text';
import testimonial from '../components/testimonial';
import post from '../components/post';
import relatedPosts from '../components/related-posts';

export default {
  init() {
    text.init();
    navbar.init();
    testimonial.init();
    post.init();
    relatedPosts.init();
  },
};
