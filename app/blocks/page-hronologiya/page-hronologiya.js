jQuery( document ).ready( function() {
  jQuery( '.page-hronologiya__arrow' ).click( function() {
      jQuery(this).parent().parent().children('.page-hronologiya__entirely').toggle();
      jQuery(this).toggleClass("page-hronologiya__arrow_transform_190");
      jQuery(this).parent().children('.page-hronologiya__instruction').toggleClass("open");
  });
  jQuery( '.page-hronologiya__entirely' ).click( function() {
      jQuery(this).hide();
      jQuery(this).parent().children('.page-hronologiya__instruction-box').children('.page-hronologiya__arrow').removeClass("page-hronologiya__arrow_transform_190");
      jQuery(this).parent().children('.page-hronologiya__instruction-box').children('.page-hronologiya__instruction').removeClass("open");
  });  
  jQuery('.page-hronologiya__instruction-box').hover(
    function(){
      var pos = jQuery(window).width() - jQuery(this).offset().left;
      if(pos < 200){
        pos = 40 - pos;
        jQuery(this).children('.page-hronologiya__instruction').css("right", pos);
      }
      jQuery(this).children('.page-hronologiya__instruction').show();
    },
    function(){
      jQuery(this).children('.page-hronologiya__instruction').hide();
    });
});