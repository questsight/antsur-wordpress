jQuery( document ).ready( function() {
	jQuery( '.switcher__box' ).click( function () {
		jQuery( '.switcher__title' ).toggleClass( 'switcher__title-active' );
    jQuery( '.page__title_font_italic' ).toggleClass( 'page__title-active_font_italic' );
    jQuery( '.switcher__link' ).toggleClass( 'switcher__link-active' );
	}); 
});
