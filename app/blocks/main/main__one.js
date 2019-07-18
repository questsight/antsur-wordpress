jQuery( document ).ready( function () {
  var w = jQuery( window ).width();
  if( w > 1170 ) {
    var h = jQuery( '.main__one' ).innerWidth();
    jQuery( '.main__one' ).innerHeight(h); 
  }
  else {
    var hLeft = jQuery( '.main-left' ).innerHeight();
    var hCenter= jQuery( '.main-center' ).innerHeight(); 
    var hRight = jQuery( '.main-right' ).innerHeight();
    if( hLeft >= hCenter && hLeft >= hRight) {
      jQuery( '.main__one' ).innerHeight(hLeft); 
    }
    else if( hCenter >= hLeft && hCenter >= hRight){
      jQuery( '.main__one' ).innerHeight(hCenter); 
    }
    else {
      jQuery( '.main__one' ).innerHeight(hRight);
    }
  }
  var hCenter = jQuery( '.main-center' ).height();
  var wCenter = jQuery( '.main-center' ).width();
  var hImg = jQuery( '.main-center img' ).height();
  var wImg = jQuery( '.main-center img' ).width();
  var hwImg = hImg / wImg;
  var hwCenter = hCenter / wCenter;
  
  if( hwImg >= hwCenter) {
    jQuery( '.main-center img' ).css({'width': wCenter, 'height':'auto'});
  }
  else {
    jQuery( '.main-center img' ).css({'width':'auto', 'height': hCenter});
  } 
});
jQuery( window ).resize( function() {
  jQuery( '.main__one' ).css({'height':'100%'}); 
  var w = jQuery( window ).width();
  if( w > 1170 ) {
    var h = jQuery( '.main__one' ).innerWidth();
    jQuery( '.main__one' ).innerHeight(h); 
  }
  else {
    var hLeft = jQuery( '.main-left' ).innerHeight();
    var hCenter= jQuery( '.main-center' ).innerHeight(); 
    var hRight = jQuery( '.main-right' ).innerHeight();
    if( hLeft >= hCenter && hLeft >= hRight) {
      jQuery( '.main__one' ).innerHeight(hLeft); 
    }
    else if( hCenter >= hLeft && hCenter >= hRight){
      jQuery( '.main__one' ).innerHeight(hCenter); 
    }
    else {
      jQuery( '.main__one' ).innerHeight(hRight);
    }
  }
  jQuery( '.main-center img' ).css({'width':'auto', 'height':'auto'});
    var hCenter = jQuery( '.main-center' ).height();
  var wCenter = jQuery( '.main-center' ).width();
  var hImg = jQuery( '.main-center img' ).height();
  var wImg = jQuery( '.main-center img' ).width();
  var hwImg = hImg / wImg;
  var hwCenter = hCenter / wCenter;
  
  if( hwImg >= hwCenter) {
    jQuery( '.main-center img' ).css({'width': wCenter, 'height':'auto'});
  }
  else {
    jQuery( '.main-center img' ).css({'width':'auto', 'height': hCenter});
  } 

});