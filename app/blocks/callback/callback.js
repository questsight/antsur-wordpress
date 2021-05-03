jQuery( document ).ready( function() {
  jQuery( '#callback' ).click( function() {
    jQuery( '#modal' ).fadeIn( 600 );
  });
  jQuery( '#modal__button, #modal__shut' ).click( function() {
    jQuery( '#modal' ).fadeOut( 600 );
  });
});