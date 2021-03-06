@php
if (post_password_required()) {
  return;
}
@endphp

<section id="comments" class="comments">
  @php comment_form($comment_options); @endphp
  @if (have_comments())
    <h3 class="comments-title">
      {!! sprintf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
    </h3>

    <ul class="comment-list">
      {!! wp_list_comments(
        ['style' => 'ul', 'short_ping' => true]
      ) !!}
    </ul>

    @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav>
        <ul class="pager">
          @if (get_previous_comments_link())
            <li class="previous">
              @php previous_comments_link(__('&larr; Older comments', 'sage')) @endphp
            </li>
          @endif
          @if (get_next_comments_link())
            <li class="next">@php next_comments_link(__('Newer comments &rarr;', 'sage')) @endphp</li>
          @endif
        </ul>
      </nav>
    @endif
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="alert alert-warning">
      {{ __('Comments are closed.', 'sage') }}
    </div>
  @endif
</section>
