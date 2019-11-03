
( function( $ ) {

	wp.customize( 'beautiful_logo_animation', function( value ) {
		value.bind( function( newval ) {
			if (newval == '') {
				$(".logo").css("animation-name", 'none');
			} else {
				$(".logo").mouseenter(function() {
					$(this).css("animation-name", newval);
				}).mouseleave(function() {
					$(this).css("animation-name", 'none');
				});
			}
		} );
	} );

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );

	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'mytheme_options[link_textcolor]', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );

} )( jQuery );