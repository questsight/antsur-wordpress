jQuery(window).load( function() {
  jQuery( '.mejs-button button' ).addClass("mejs-content-play");
  jQuery( '.mejs-button button' ).click( function () {
		jQuery( '.mejs-button button' ).toggleClass("mejs-content-play");
    jQuery( '.mejs-button button' ).toggleClass("mejs-content-pause");
	});
});