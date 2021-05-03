jQuery( document ).ready( function () {
  var w = jQuery( document ).width();
  if( w > 768 ){
     var wInfo = jQuery( '.archive__info' ).innerWidth()*0.9;
      
      jQuery( '.archive__info' ).innerHeight(wInfo); 
     }
});
jQuery( window ).resize( function() {
  jQuery( '.archive__info' ).css({'height':'100%'});
  var w = jQuery( document ).width();
  if( w > 768 ){
     var wInfo = jQuery( '.archive__info' ).innerWidth()*0.9;
      jQuery( '.archive__info' ).innerHeight(wInfo); 
     }
});

jQuery( document ).ready( function() {
	jQuery( '.archive__button' ).click( function () {
        jQuery( '.archive__single-past' ).toggleClass( 'archive__hidden' );
        jQuery( '.archive__button' ).toggleClass( 'archive__button-open' );
	});
  
  jQuery('.archive-memory').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).after('<div class="clearfix"></div>'); 
    }
  });
  
});