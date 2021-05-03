jQuery(document).ready(function () {
  jQuery('#close1').click(function () {
    jQuery( '#instruction1' ).hide();
  });
  jQuery('#close2').click(function () {
    jQuery( '#instruction2' ).hide();
  });
  jQuery('#question1').click(function () {
    jQuery( '#instruction1' ).show();
  });
  jQuery('#question2').click(function () {
    jQuery( '#instruction2' ).show();
  });
  jQuery('.archive-legacy__one').eq(0).addClass('archive-legacy__one-initial');
});
