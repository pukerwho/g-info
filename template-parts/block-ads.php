<!-- Каталог -->
<div class="bg-white rounded-lg shadow p-5">
  <div class="flex items-center text-xl font-semibold mb-6">
    <div class="w-2 h-2  bg-indigo-500 rounded-full mr-2"></div>
    <span><?php _e('Объявления', 'q-info'); ?></span>
  </div>
  <div class="mb-8">
    <?php 
    $ads_sidebar_query = new WP_Query( array(
      'post_type' => 'ads',
      'orderby'     => 'modified',
      'order'       => 'DESC',
      'posts_per_page' => 8,
    ));
    if ($ads_sidebar_query->have_posts()) : while ($ads_sidebar_query->have_posts()) : $ads_sidebar_query->the_post(); ?>
      <div class="relative mb-5">
        <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
        <div class="flex items-center justify-between">

          <div class="flex items-start">
            <div class="mr-4">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-12 h-12 object-fit rounded-full">
            </div>
            <div>
              <div class="font-semibold">
                <?php the_title(); ?>
              </div>
              <?php if (carbon_get_the_post_meta('crb_ads_location')): ?>
                <div class="text-gray-600"><?php echo carbon_get_the_post_meta('crb_ads_location'); ?></div>
              <?php endif; ?>
            </div>
          </div>  

        </div>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
  <div class="relative text-center border border-gray-300 hover:border-indigo-500 hover:bg-indigo-500 hover:text-white shadow rounded-lg px-4 py-2">
    <a href="<?php echo get_post_type_archive_link( 'ads' ); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
    <span class="font-semibold"><?php _e('Все объявления', 'q-info'); ?></span>
  </div>
</div>
<!-- END Каталог -->