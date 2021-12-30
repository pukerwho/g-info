<?php

function vote_like_function() {
  $like_count = get_option('_crb_vote_like');
  $like_count = intval($like_count);
  $like_count = $like_count + 1;
  update_option( '_crb_vote_like', $like_count );
  echo $like_count;
  wp_die();
}

function vote_dislike_function() {
  $dislike_count = get_option('_crb_vote_dislike');
  $dislike_count = intval($dislike_count);
  $dislike_count = $dislike_count + 1;
  update_option( '_crb_vote_dislike', $dislike_count );
  echo $dislike_count;
  wp_die();
}

add_action('wp_ajax_vote_like_click_action', 'vote_like_function');
add_action('wp_ajax_nopriv_vote_like_click_action', 'vote_like_function');

add_action('wp_ajax_vote_dislike_click_action', 'vote_dislike_function');
add_action('wp_ajax_nopriv_vote_dislike_click_action', 'vote_dislike_function');

?>