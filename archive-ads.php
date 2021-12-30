<?php get_header(); ?>
  <main id="primary" class="bg-gray-100 pt-10">

    <div class="container px-2 lg:px-0 mx-auto">
      <div class="flex items-center text-2xl font-semibold mb-6">
        <div class="w-2 h-2  bg-indigo-500 rounded-full mr-2"></div>
        <h1><?php _e('Все объявления', 'q-info'); ?></h1>
      </div>
      <div class="flex flex-wrap lg:-mx-4">

        <!-- Left -->
        <div class="w-full lg:w-8/12 lg:px-4">

          <!-- Список объявления -->
          <?php 
            $ads_query = new WP_Query( array( 
              'post_type' => 'ads', 
              'posts_per_page' => 10,
              'order'    => 'DESC',
            ) );
          if ($ads_query->have_posts()) : while ($ads_query->have_posts()) : $ads_query->the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_type()); ?>
          <?php endwhile; endif; wp_reset_postdata(); ?>    
          <!-- END Список объявления -->

        </div>
        <!-- END Left -->

        <!-- Right -->
        <div class="w-full lg:w-4/12 lg:px-4">
          <div class="mb-6">
            <?php get_template_part( 'template-parts/block-humor' ); ?>
          </div>
          <div class="mb-6">
            <?php get_template_part( 'template-parts/block-telegram' ); ?>
          </div>
          <div class="mb-6">
            <?php get_template_part( 'template-parts/block-cvk' ); ?>
          </div>
          <div class="mb-6">
            <?php get_template_part('template-parts/block-q'); ?>
          </div>
        </div>
        <!-- END Right -->
      </div>
    </div>

  </main><!-- #main -->

<?php get_footer();
