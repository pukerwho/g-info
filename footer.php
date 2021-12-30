<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G-Info
 */

?>

<footer class="py-10 border-t-4 border-red-500">
	<div class="container px-2 lg:px-0 mx-auto">
    <div class="flex flex-wrap flex-col lg:flex-row lg:-mx-2">
      <div class="w-full lg:w-6/12 lg:px-2 mb-4 lg:mb-0">
        <div class="mb-3">
          <a href="<?php echo home_url(); ?>" class="text-2xl">
            Genichesk<span class="text-red-500 font-bold">.info</span>
          </a>  
        </div>
        <div class="text-lg text-light">
          <?php _e('Новости и субъективные заметки про Генический район.', 'g-info'); ?>
        </div>
      </div>
      <div class="w-full lg:w-3/12 lg:px-2 mb-4 lg:mb-0">
        <div class="font-bold text-lg mb-3">
          <?php _e('Навигация', 'g-info'); ?>
        </div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer_links',
            'container' => 'ul',
          ]); ?>
        </div>
      </div>
      <div class="w-full lg:w-3/12 lg:px-2 mb-4 lg:mb-0">
        <div class="hidden lg:block mb-3">
          <div class="text-lg mb-3">
            <?php _e('Подпишитесь на наш телеграм-канал, чтобы ничего не пропускать', 'g-info'); ?>:
          </div>
          <div class="relative flex items-center justify-center bg-blue-500 rounded px-2 py-3">
            <a href="https://t.me/genichesk_info" class="w-full h-full absolute top-0 left-0 z-10"></a>
            <div class="mr-2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram-white.svg" alt="Telegram" width="20">
            </div>
            <div class="text-white text-lg text-center">
              <?php _e('Телеграм канал', 'g-info'); ?>
            </div>
          </div>
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_footer_count'); ?>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
