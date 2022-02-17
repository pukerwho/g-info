<div class="bg-white rounded-lg shadow p-5">
  <div class="flex items-center text-xl font-semibold mb-6">
    <div class="mr-2">💬</div>
    <span><?php _e('Сейчас обсуждают', 'q-info'); ?></span>
  </div>
  <div>
    <?php 
    $comments = get_comments( array('status' => 'approve', 'number' => 5) );
    foreach ($comments as $comment): ?>
      <div class="relative border-gray-300 border-b last-of-type:border-none mb-3 pb-3 last-of-type:pb-0">
        <a href="<?php echo get_the_permalink($comment->comment_post_ID); ?>" class="w-full h-full absolute left-0 top-0 z-1"></a>
        <div class="text-gray-800 dark:text-gray-200 mb-1"><?php echo mb_strimwidth($comment->comment_content, 0, 90, '...'); ?></div>
        <div class="text-sm opacity-50"><?php echo get_the_title($comment->comment_post_ID); ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>