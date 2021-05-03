jQuery( document ).ready( function() {
  jQuery('.page-sovet__cell_width_50').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).after('<div class="clearfix"></div>'); 
    }
  });
});