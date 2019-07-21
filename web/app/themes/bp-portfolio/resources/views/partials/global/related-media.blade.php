<div class="related-media">
  @foreach($related_media as $id)
    <div class="col card">
      <div class="head">
        <h5 class="category">{{get_post_type($id)}}</h5>
      </div>

      <div class="body">
        <h4 class="title">{{get_the_title($id)}}</h4>
        @include('partials.global.tech-list', [
          'technologies_list' => get_field('tech', $id),
          'classes' => 'minimal'
        ])
      </div>
      <div class="link-container">
        <a href="{{get_the_permalink($id)}}">View Now</a>
      </div>
    </div>
  @endforeach
</div>