jQuery( document ).ready( function() {
  jQuery( '.popup-img' ).click( function() {
    jQuery(this).attr("hidden","true")
  });
  jQuery( '.popup-open' ).click( function() {
    var popupimg = jQuery(this).attr('src');
    jQuery( '.popup-img img' ).attr('src',popupimg);
    jQuery( '.popup-img' ).removeAttr("hidden");
  });
});
