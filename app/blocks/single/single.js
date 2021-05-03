jQuery( document ).ready( function() {
	jQuery( '.single__review-title' ).click( function () {
		jQuery( '.single__review-title' ).hide();
        jQuery( '.single__review' ).show();
	});
	jQuery( '.single__review' ).click( function () {
		jQuery( '.single__review-title' ).show();
        jQuery( '.single__review' ).hide();
	});
  if(jQuery('.single__review-text').is(':empty') == true){
      jQuery( '.single__review-title' ).hide();
      jQuery( '.single__review' ).hide();
    }
jQuery( '.single__button' ).click( function () {
  jQuery( '.single__form-box' ).show();
  var t = jQuery(".single__form-box").offset()
  window.scrollTo(0, t.top);
});
jQuery( '.single__form-close' ).click( function () {
  jQuery( '.single__form-box' ).hide();
});
});