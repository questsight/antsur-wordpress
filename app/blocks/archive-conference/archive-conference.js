jQuery( document ).ready( function() {

  jQuery( '#button-authors' ).click( function() {
    jQuery("#button-authors").hide();
    jQuery("#box-authors").show();
  });
  jQuery( '#exit-authors' ).click( function() {
    jQuery("#button-authors").show();
    jQuery("#box-authors").hide();
  });
  jQuery( '#button-tags' ).click( function() {
    jQuery("#button-tags").hide();
    jQuery("#box-tags").show();
  });
  jQuery( '#exit-tags' ).click( function() {
    jQuery("#button-tags").show();
    jQuery("#box-tags").hide();
  });

});
