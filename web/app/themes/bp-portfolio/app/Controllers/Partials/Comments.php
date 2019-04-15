<?php

namespace App\Controllers\Partials;

trait Comments {
  public function makeEmailMarkup() {
    return "
      <div class='input-container'>
        <div class='label-container'>
          <label for='email'>Email</label>
        </div>
        <input class='input-style' type='email' id='email' name='email' aria-required='true'>
      </div>
    ";
  }

  public function makeAuthorMarkup() {
    return "
      <div class='input-container'>
        <div class='label-container'>
          <label for='author'>Author</label>
        </div>
        <input class='input-style' type='text' id='author' name='author' aria-required='true'>
      </div>
    ";
  }

  public function makeCommentTextArea() {
    return "
      <div class='input-container'>
        <div class='label-container'>
          <label for='comment'>Your Comment</label>
        </div>
        <textarea class='input-style' id='comment' name='comment' aria-required='true'></textarea>
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
      'comment_field' => $this->makeCommentTextArea(),
      'comment_notes_before' => ''
    ];
  }
}