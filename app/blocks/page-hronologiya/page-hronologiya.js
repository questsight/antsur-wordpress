jQuery( document ).ready( function() {
  jQuery( '.page-hronologiya__arrow' ).click( function() {
      jQuery(this).next().toggle();
      jQuery(this).toggleClass("page-hronologiya__arrow_transform_190");
  });
  jQuery( '.page-hronologiya__entirely' ).click( function() {
      jQuery(this).hide();
  });
});