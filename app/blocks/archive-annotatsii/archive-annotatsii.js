jQuery( document ).ready( function() {
  jQuery('.archive-annotatsii__cell_width_50').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).css("border-left", "none");
      jQuery(this).after('<div class="clearfix"></div>');
    }
    if ((i+1) != 1 && (i+1) != 2){
      jQuery(this).css("border-top", "none"); 
    }
  });
});