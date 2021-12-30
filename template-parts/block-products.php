<div class="bg-white rounded-lg shadow p-5">
  <div class="mb-6">
    <div class="flex items-center mb-2">
      <div class="w-2 h-2  bg-red-500 rounded-full mr-2"></div>
      <span class="text-lg font-semibold"><?php _e('Стоимость продуктов в Геническе', 'g-info'); ?></span>
    </div>
    <div class="opacity-75 font-semibold mb-6">
      <?php _e('Центральный рынок', 'g-info'); ?>, <?php echo carbon_get_theme_option('crb_price_product_date'); ?>
    </div>
    <div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/potato.jpg" alt="Картофель" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Картофель', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_potato'); ?>
        </div>
      </div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onion.jpeg" alt="Лук" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Лук', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_luk'); ?>
        </div>
      </div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cucumbers.jpeg" alt="Огурцы" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Огурцы', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_ogirki'); ?>
        </div>
      </div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tomatos.jpeg" alt="Помидоры" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Помидоры', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_tomato'); ?>
        </div>
      </div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pelengas.jpeg" alt="Пеленгас" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Пеленгас', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_pelengas'); ?>
        </div>
      </div>
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <div class="mr-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/beer.jpeg" alt="Живое пиво" class="w-8 h-8 rounded-full object-cover" loading="lazy"></div>
          <div class="opacity-75 font-semibold">
            <?php _e('Живое пиво', 'g-info'); ?>
          </div>  
        </div>
        <div>
          <?php echo carbon_get_theme_option('crb_price_product_beer'); ?>
        </div>
      </div>
    </div>
  </div>
</div>