<?php

namespace App\Controllers\Partials;

trait Comments {
  public function makeEmailMarkup() {
    return "
      <div>
        <label for='email'>Email</label><br />
        <input type='email' id='email' name='email' aria-required='true'>
      </div>
    ";
  }

  public function makeAuthorMarkup() {
    return "
      <div>
        <label for='author'>Author</label><br />
        <input type='text' id='author' name='author' aria-required='true'>
      </div>
    ";
  }

  public function makeCommentTextArea() {
    return "
      <div class='comment-form-group'>
        <label for='comment'>Your Comment</label><br />
        <textarea id='comment' name='comment' aria-required='true'></textarea>
      </div>
    ";
  }

  public function commentOptions() {
    return [
      'label_submit' => 'Post Comment',
      'title_reply' => 'Write a reply',
      'fields' => [
        'author' => $this->makeAuthorMarkup(),
        'email' => $this->makeEmailMarkup()
      ],
      'comment_field' => $this->makeCommentTextArea()
    ];
  }
}