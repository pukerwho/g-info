// Меняем значение КОЛ-ВО при клике на кнопки + и -
$( 'body' ).on( 'click', 'button.quantity-up, button.quantity-down', function() { 
  var qty = $(this).parent().find( 'input' ),
      val = parseInt( qty.val() ),
      min = parseInt( qty.attr( 'min' ) ),
      max = parseInt( qty.attr( 'max' ) ),
      step = parseInt( qty.attr( 'step' ) );
  // дальше меняем значение количества в зависимости от нажатия кнопки
  if ( $( this ).is( '.quantity-up' ) ) {
    if ( max && ( max <= val ) ) {
      // qty.val( max );
      qty.val( max ).change();
      $( '[name="update_cart"]' ).trigger( 'click' );
    } else {
      // qty.val( val + step );
      qty.val( val + step ).change();
      $( '[name="update_cart"]' ).trigger( 'click' );
    }
  } else {
    if ( min && ( min >= val ) ) {
      // qty.val( min );
      qty.val( min ).change();
      $( '[name="update_cart"]' ).trigger( 'click' );
    } else if ( val > 1 ) {
      // qty.val( val - step );
      qty.val( val - step ).change();
      $( '[name="update_cart"]' ).trigger( 'click' );
    }
  }
});
$( 'body' ).on( 'change', '.qty', function() {
  $( '[name="update_cart"]' ).trigger( 'click' );
});