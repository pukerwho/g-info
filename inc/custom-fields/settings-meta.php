<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', __('Штаб') )
  ->add_tab( __('Оформление'), array(
    Field::make( 'image', 'crb_sidebar_youtube_cover', 'Обложка для ютуба (в сайдбаре)' ),
  ))
  ->add_tab( __('Цены на продукты'), array(
    Field::make( 'text', 'crb_price_product_date', 'Дата' ),
    Field::make( 'text', 'crb_price_product_potato', 'Картофель' ),
    Field::make( 'text', 'crb_price_product_luk', 'Лук' ),
    Field::make( 'text', 'crb_price_product_ogirki', 'Огурцы' ),
    Field::make( 'text', 'crb_price_product_tomato', 'Помидоры' ),
    Field::make( 'text', 'crb_price_product_pelengas', 'Пеленгас' ),
    Field::make( 'text', 'crb_price_product_beer', 'Живое пиво' ),
  ))
  ->add_tab( __('Голосование'), array(
    Field::make( 'image', 'crb_vote_cover', 'Фотография' ),
    Field::make( 'text', 'crb_vote_question', 'Вопрос' ),
    Field::make( 'text', 'crb_vote_like', 'Лайк' ),
    Field::make( 'text', 'crb_vote_dislike', 'Дизлайк' ),
  ))
  ->add_tab( __('Юмор'), array(
    Field::make( 'complex', 'crb_anekdots', 'Анектоды' )->set_layout( 'tabbed-vertical' )
      ->add_fields( array(
        Field::make( 'textarea', 'crb_anekdot', 'Анекдот' ),
    )),
  ))
  ->add_tab( __('Скрипты'), array(
    Field::make( 'textarea', 'crb_adsense_code', 'Код Google Adsense' ),
    Field::make( 'textarea', 'crb_google_analytics', 'Google Analytics' ),
    Field::make( 'textarea', 'crb_footer_count', 'Счетчики в футере' ),
    Field::make( 'footer_scripts', 'crb_footer_scripts', 'Скрипты в футере' )
  ));
}

?>