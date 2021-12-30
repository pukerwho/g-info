<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package G-Info
 */

get_header();
?>

	<main id="primary" class="bg-gray-100 pt-10">
		<div class="container px-2 lg:px-0 mx-auto">
			<div class="flex flex-wrap mx-0 lg:-mx-4">

				<!-- Левый сайдбар -->
				<div class="hidden lg:block w-full lg:w-2/12 text-gray-900 px-0 lg:px-4">

					<div class="border-b-2 border-gray-300 pb-4 mb-6">

						<!-- Главная -->
						<div class="flex items-center relative bg-gray-200 hover:bg-gray-200 rounded-lg px-3 py-2 mb-2">
							<a href="<?php echo home_url(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
							<div class="text-gray-600 mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
								</svg>
							</div>
							<span class="text-lg"><?php _e('Главная', 'g-info'); ?></span>
						</div>
						<!-- END Главная -->

						<!-- Каталог -->
						<div class="flex items-center relative rounded-lg hover:bg-gray-200 px-3 py-2 mb-2">
							<a href="<?php echo get_post_type_archive_link('ads'); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
							<div class="text-gray-600 mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
								</svg>
							</div>
							<span class="text-lg"><?php _e('Каталог', 'g-info'); ?></span>
						</div>
						<!-- END Каталог -->

					</div>

					<!-- Такси -->
					<div class="border-b-2 border-gray-300 pb-6 mb-6">
						<div class="text-xl font-bold mb-2">🚕 <?php _e('Такси', 'g-info'); ?></div>
						<div>
							<div class="mb-2">Телефоны такси <span class="font-semibold text-red-500">1553</span> в Геническе:</div>
							<div class="flex items-center mb-1">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
									  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
									</svg>
								</div>
								<div>
									<a href="tel:055-343-55-54">055-343-55-54</a>
								</div>
							</div>
							<div class="flex items-center mb-1">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
									  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
									</svg>
								</div>
								<div>
									<a href="tel:050-650-20-25">050-650-20-25</a>
								</div>
							</div>
							<div class="flex items-center mb-1">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
									  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
									</svg>
								</div>
								<div>
									<a href="tel:067-930-89-79">067-930-89-79</a>
								</div>
							</div>
							<div class="flex items-center mb-1">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
									  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
									</svg>
								</div>
								<div>
									<a href="tel:068-114-42-77">068-114-42-77</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END Такси -->

					<!-- Ютуб -->
					<div class="border-b-2 border-gray-300 pb-6 mb-6">
						<div class="sidebar-block__icon mb-2">
							<?php 
								$youtube_cover_large = wp_get_attachment_image_src(carbon_get_theme_option('crb_sidebar_youtube_cover'), 'large'); 
							?>
							<img src="<?php echo $youtube_cover_large[0] ?>" class="w-full rounded-lg mx-auto"  loading="lazy">
						</div>
						<div class="text-lg font-bold mb-2"><?php _e('Геническ в Ютубе!', 'totop'); ?></div>
						<div>
							<a href="https://www.youtube.com/channel/UCTwTgpDfjQ5mWbT79wk37pg" target="_blank" class="block w-full text-white text-center text-md bg-red-600 hover:bg-red-700 rounded-lg px-2 py-2"><?php _e('Смотреть', 'totop'); ?></a>	
						</div>
					</div>
					<!-- END Ютуб -->

					<!-- Открыть на телефоне -->
					<div>
						<div class="text-lg font-bold mb-2"><?php _e('Открыть сайт на телефоне', 'g-info'); ?>:</div>
						<div>
							<img src="https://genichesk.info/wp-content/uploads/2019/06/qr-code.svg" alt="<?php _e('Открыть сайт на телефоне', 'g-info'); ?>">
						</div>
					</div>
					
					<!-- END Открыть на телефоне -->

				</div>
				<!-- END Левый сайдбар -->	

				<!-- Основной поток -->
				<div class="w-full lg:w-6/12 px-0 lg:px-4 mb-4 lg:mb-6">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
				<!-- END Основной поток -->

				<!-- Правый сайдбар -->
				<div class="w-full lg:w-4/12 px-0 lg:px-4">
					<div class="mb-6">
						<?php get_template_part( 'template-parts/block-ads' ); ?>	
					</div>
					<div class="mb-6">
						<?php get_template_part( 'template-parts/block-products' ); ?>
					</div>
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
				<!-- END Правый сайдбар -->

			</div>
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
