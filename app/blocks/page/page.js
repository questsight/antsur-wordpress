jQuery(document).ready(function () {
  jQuery('#certificate-title').click(function () {
    jQuery('#articles').hide();
    jQuery('#certificate').show();
    jQuery('#articles-title').removeClass('page__subtitle-active');
    jQuery('#certificate-title').addClass('page__subtitle-active');
  });
  jQuery('#articles-title').click(function () {
    jQuery('#articles').show();
    jQuery('#certificate').hide();
    jQuery('#articles-title').addClass('page__subtitle-active');
    jQuery('#certificate-title').removeClass('page__subtitle-active');
  });
  jQuery(".page__envira .envira-gallery-item").each(function(){
    var name = jQuery(this).find(".envira-gallery-image").attr("title");
    jQuery(this).children(".envira-gallery-wrap .envira-gallery-public .envira-gallery-item-inner").after('<div class="envira-name">' + name + '</div>');
    jQuery(this).find(".envira-gallery-image").after('<div class="envira-magnifier"><i class="fa fa-search-plus" aria-hidden="true"></i></div>');
  });
});
jQuery( '.envira-gallery-item' ).click( function () { 
  jQuery(".envira-share").show();
}); 

jQuery("body").on("click", '#envirabox-close', function () { 
    jQuery(".envira-share").hide();
});