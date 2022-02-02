<div class="bg-white rounded-lg shadow p-5">
  <div class="flex items-center text-xl font-semibold mb-6">
    <div class="mr-2">🔥</div>
    <span><?php _e('Популярное', 'q-info'); ?></span>
  </div>
  <div>
    <?php 
    $sidebar_top_posts = new WP_Query( array(
      'post_type' => 'post',
      'meta_key' => 'post_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'posts_per_page' => 5,
    ));
    if ($sidebar_top_posts->have_posts()) : while ($sidebar_top_posts->have_posts()) : $sidebar_top_posts->the_post(); ?>
      <div class="relative border-gray-300 border-b last-of-type:border-none mb-3 pb-3 last-of-type:pb-0">
        <a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0 z-1"></a>
        <div class="font-light text-lg"><?php the_title(); ?></div>
        <div class="text-gray-800 font-semibold opacity-75"><?php _e('Просмотров', 'g-info'); ?>: <?php echo get_post_meta( get_the_ID(), 'post_count', true ); ?></div>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>