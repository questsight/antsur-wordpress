jQuery('.features_01__clear .col-sm-4').each(function(i,e){
  if (((i+1) % 3) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});
jQuery('.features_02__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 4) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
  else if (((i+1) % 2) == 0)
     jQuery(this).after('<div class="clearfix visible-sm"></div>');
});
jQuery('.features_03__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 2) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});
jQuery('.features_04__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 2) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});