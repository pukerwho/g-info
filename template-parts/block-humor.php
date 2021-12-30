<div class="bg-white rounded-lg shadow p-5">
  <div class="flex items-center text-xl font-semibold mb-6">
    <div class="w-2 h-2  bg-green-500 rounded-full mr-2"></div>
    <span><?php _e('Юмор', 'q-info'); ?></span>
  </div>
  <div>
    <?php 
      $anekdots = carbon_get_theme_option('crb_anekdots'); 
      $rand_anekdots = array_rand($anekdots, 1);
    ?>
    <div class="italic">
      <?php echo $anekdots[$rand_anekdots]['crb_anekdot']; ?>  
    </div>
      
  </div>
</div>