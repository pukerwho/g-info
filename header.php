<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G-Info
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php echo carbon_get_theme_option('crb_adsense_code'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="bg-white py-4">
		<div class="container px-2 lg:px-0 mx-auto">
			<div class="flex items-center justify-between">

				<!-- Лого -->
				<div class="w-1/2 lg:w-1/5 text-lg">
					<a href="<?php echo home_url(); ?>">
						Genichesk<span class="text-red-500 font-bold">.info</span>
					</a>
				</div>
				<!-- END Лого -->

				<!-- Поиск -->
				<div class="hidden lg:block w-3/5">
					<?php echo get_search_form(); ?>
				</div>
				<!-- END Поиск -->

				<!-- Меню -->
				<div class="hidden lg:flex w-2/5 justify-end items-center">

					<div class="font-bold mr-10">
						<a href="#"><?php _e('Реклама', 'g-info'); ?></a>	
					</div>

					<!-- Кнопка -->
					<div class="relative text-white bg-red-600 hover:bg-red-700 rounded-lg px-4 py-2">
						<a href="#" class="w-full h-full absolute top-0 left-0 z-10"></a>
						<?php _e('Добавить новость', 'g-info'); ?>
					</div>
					<!-- END Кнопка -->
				</div>
				<!-- END Меню -->

				<!-- Гамбургер -->
				<div class="hamburger-toggle block lg:hidden relative -mt-4">
					<span class="w-7 h-0.5 absolute bg-gray-600 top-0 right-0"></span>
					<span class="w-7 h-0.5 absolute bg-gray-600 top-2 right-0"></span>
					<span class="w-7 h-0.5 absolute bg-gray-600 top-4 right-0"></span>
				</div>
				<!-- END Гамбургер -->
			</div>
		</div>
	</header><!-- #masthead -->

	<!-- Мобильное меню -->
	<div class="mobile-menu hidden h-full w-full fixed left-0 bg-gray-100 py-4 px-2">
		<div class="text-gray-900 border-b-2 border-gray-300 pb-4 mb-6">
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

		<!-- Кнопка -->
		<div class="relative text-white text-center bg-red-600 hover:bg-red-700 rounded-lg px-4 py-2">
			<a href="#" class="w-full h-full absolute top-0 left-0 z-10"></a>
			<?php _e('Добавить новость', 'g-info'); ?>
		</div>
		<!-- END Кнопка -->

	</div>
	<!-- END Мобильное меню -->

	<!-- На мобильном поиск -->
	<div class="container block lg:hidden px-2 mx-auto">
		<div class="pb-4">
			<?php echo get_search_form(); ?>
		</div>
	</div>
	<!-- END На мобильном поиск -->
