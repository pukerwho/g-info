<div class="bg-white rounded-lg shadow p-5">
  <div class="text-center text-green-700 font-bold mb-2">
    <?php _e('Опрос', 'g-info'); ?>
  </div>
  <div class="text-center font-semibold mb-4">
    <?php echo carbon_get_theme_option('crb_vote_question'); ?>
  </div>
  <div class="mb-4">
    <?php 
      $vote_cover_large = wp_get_attachment_image_src(carbon_get_theme_option('crb_vote_cover'), 'large');
    ?>
    <img src="<?php echo $vote_cover_large[0] ?>" class="mx-auto" loading="lazy">
  </div>
  <div class="flex -mx-2 md:-mx-4">
    <div class="w-1/2 px-3 md:px-4">
      <div class="bg-gray-200 hover:bg-green-500 rounded flex items-center justify-center text-sm md:text-md cursor-pointer px-4 py-2 js-vote-like-click"><span class="mr-2">👍</span> <?php _e('Да', 'g-info'); ?> - <span class="vote-like-result ml-2"><?php echo carbon_get_theme_option('crb_vote_like'); ?></span></div>
    </div>
    <div class="w-1/2 px-3 md:px-4">
      <div class="bg-gray-200 hover:bg-red-500 rounded flex items-center justify-center text-sm md:text-md cursor-pointer px-4 py-2 js-vote-dislike-click"><span class="mr-2">👎</span> <?php _e('Нет', 'g-info'); ?> - <span class="vote-dislike-result ml-2"> <?php echo carbon_get_theme_option('crb_vote_dislike'); ?></span></div>
    </div>
  </div>
</div>