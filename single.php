<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package G-Info
 */

get_header();
?>

	<main id="primary" class="bg-gray-100 pt-10">
		<?php $countNumber = tutCount(get_the_ID()); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="container px-2 lg:px-0 mx-auto">

				<!-- Top -->
				<div class="w-full lg:w-8/12">
					<div class="mb-10">
						<!-- Хлебные крошки -->
						<div class="breadcrumbs text-sm mb-2" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
			        <ul class="flex items-center flex-wrap">
			          <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item mr-8 pl-8">
			            <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-700">
			              <span itemprop="name"><?php _e( 'Главная', 'restx' ); ?></span>
			            </a>                        
			            <meta itemprop="position" content="1">
			          </li>
			          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item mr-8">
			            <a itemprop="item" href="#" class="text-blue-700">
			              <span itemprop="name"><?php _e( 'Новости', 'restx' ); ?></span>
			            </a>                        
			            <meta itemprop="position" content="2">
			          </li>
			          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item">
			            <span itemprop="name"><?php the_title(); ?></span>
			            <meta itemprop="position" content="3" />
			          </li>
			        </ul>
			      </div>
						<!-- END Хлебные крошки -->

						<h1 class="text-2xl font-semibold mb-1">
							<?php the_title(); ?>
						</h1>	

						<div class="flex items-center text-gray-500">

							<div class="flex items-center mr-4">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
								</div>
								<div>
									<?php echo get_the_modified_time('d M'); ?>
								</div>
							</div>

							<div class="flex items-center mr-5">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
									</svg>
								</div>
								<div>
									<?php echo get_comments_number(); ?>
								</div>
							</div>

							<div class="flex items-center mr-5">
								<div class="mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
									</svg>
								</div>
								<div>
									<?php echo $countNumber; ?>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- END Top -->

				<div class="flex flex-wrap lg:-mx-4">

					<!-- Left -->
					<div class="w-full lg:w-8/12 lg:px-4">

						<!-- Контент -->
						<div class="content bg-white shadow rounded-lg p-5 mb-8">
							<?php the_content(); ?>
						</div>
						<!-- END Контент -->

						<!-- Комментарии -->
						<div class="bg-white shadow rounded-lg mb-8">
							<?php 
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif; ?>
						</div>
						<!-- END Комментарии -->

						<!-- Другие новости -->
						<div class="bg-white shadow rounded-lg mb-8">
							<div class="flex items-center text-xl font-semibold border-b border-gray-200 p-5 mb-5">
								<div class="w-2 h-2  bg-red-500 rounded-full mr-2"></div>
								<div><?php _e('Свежие новости', 'g-info'); ?></div>
							</div>
							<div class="pb-2">
								<?php 
									$current_id = get_the_ID();
									$other_query = new WP_Query( array( 
										'post_type' => 'post', 
										'posts_per_page' => 5,
										'post__not_in' => array($current_id),
										'order'    => 'DESC',
									) );
								if ($other_query->have_posts()) : while ($other_query->have_posts()) : $other_query->the_post(); ?>
									<div class="relative border-b-2 px-5 pb-5 mb-5">
										<a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0 z-10"></a>
										<div class="text-lg text-gray-800 font-semibold mb-2"><?php the_title(); ?></div>
										<div>
											<?php 
												$content_text = wp_strip_all_tags( get_the_content() );
												echo mb_strimwidth($content_text, 0, 200, '...');
											?>
										</div>
										
									</div>
								<?php endwhile; endif; wp_reset_postdata(); ?>	
							</div>
							
						</div>
						<!-- Другие новости -->

					</div>
					<!-- END Left -->

					<!-- Right -->
					<div class="w-full lg:w-4/12 lg:px-4">
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
					<!-- END Right -->
				</div>
			</div>

		<?php endwhile; endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>
