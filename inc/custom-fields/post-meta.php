<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'ads' )
    ->add_fields( array(
      Field::make( 'complex', 'crb_ads_phones', 'Телефоны' )->add_fields( array(
        Field::make( 'text', 'crb_ads_phone', 'Телефон' ),
      )),
      Field::make( 'media_gallery', 'crb_ads_photos', 'Фотографии' )->set_type( array( 'image' ) ),
      Field::make( 'select', 'crb_ads_location', 'Регион' )
      ->add_options( array(
        'Геническ' => 'Геническ',
        'Генгорка' => 'Генгорка',
        'Счастливцево' => 'Счастливцево',
        'Стрелковое' => 'Стрелковое',
      ) ),
  ) );
}

?>