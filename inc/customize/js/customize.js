/**
 *
 * controlers of footer section in customize panel
 * 
 * @author AmirMasoud Sheidayi <amirmasood32@ymail.com>
 * @since 1.0
 * 
 */

jQuery(document).ready(function($){
	// logo
	if( $( "#customize-control-beautiful_logo input:checked" ).val() == "text" ) {
		$( "#customize-control-beautiful_logo_color, #customize-control-beautiful_logo_color_hover" ).show();
		$( "#customize-control-beautiful_logo_image,#customize-control-beautiful_logo_image_hover" ).hide();
	} else {
		$( "#customize-control-beautiful_logo_color, #customize-control-beautiful_logo_color_hover" ).hide();
		$( "#customize-control-beautiful_logo_image,#customize-control-beautiful_logo_image_hover" ).show();
	}
	$( "#customize-control-beautiful_logo input" ).change(function(){
		if( $( this ).val() == "text" ) {
			$( "#customize-control-beautiful_logo_color, #customize-control-beautiful_logo_color_hover" ).show();
			$( "#customize-control-beautiful_logo_image,#customize-control-beautiful_logo_image_hover" ).hide();
		} else {
			$( "#customize-control-beautiful_logo_color, #customize-control-beautiful_logo_color_hover" ).hide();
			$( "#customize-control-beautiful_logo_image,#customize-control-beautiful_logo_image_hover" ).show();
		}
	});

	// navbar
	if( $( "#customize-control-beautiful_navbar_visibilty input:checked" ).val() == "show" ) {
		$( "#customize-control-beautiful_header_navbar_bg,#customize-control-beautiful_header_navbar_color, #customize-control-beautiful_header_navbar_hover, #customize-control-beautiful_header_navbar_bg_hover" ).show();
	} else {
		$( "#customize-control-beautiful_header_navbar_bg,#customize-control-beautiful_header_navbar_color, #customize-control-beautiful_header_navbar_hover, #customize-control-beautiful_header_navbar_bg_hover" ).hide();
	}
	$( "#customize-control-beautiful_navbar_visibilty input" ).change(function(){
		if( $( this ).val() == "show" ) {
			$( "#customize-control-beautiful_header_navbar_bg,#customize-control-beautiful_header_navbar_color, #customize-control-beautiful_header_navbar_hover, #customize-control-beautiful_header_navbar_bg_hover" ).show();
		} else {
			$( "#customize-control-beautiful_header_navbar_bg,#customize-control-beautiful_header_navbar_color, #customize-control-beautiful_header_navbar_hover, #customize-control-beautiful_header_navbar_bg_hover" ).hide();
		}
	});

	// header background
	if( $( "#customize-control-beautiful_header_background input:checked" ).val() == "image" ) {
		$( "#customize-control-beautiful_header_background_image" ).show();
		$( "#customize-control-beautiful_header_background_color" ).hide();
	} else {
		$( "#customize-control-beautiful_header_background_image" ).hide();
		$( "#customize-control-beautiful_header_background_color" ).show();
	}
	$( "#customize-control-beautiful_header_background input" ).change(function(){
		if( $( this ).val() == "image" ) {
			$( "#customize-control-beautiful_header_background_image" ).show();
			$( "#customize-control-beautiful_header_background_color" ).hide();
		} else {
			$( "#customize-control-beautiful_header_background_image" ).hide();
			$( "#customize-control-beautiful_header_background_color" ).show();
		}
	});

	// header style & font color of header
	if( $( "#customize-control-beautiful_header_style select option:selected" ).val() == "style_7" ) {
		$( "#customize-control-beautiful_header_font_color,#customize-control-beautiful_header_font_color_hover" ).hide();
	} else {
		$( "#customize-control-beautiful_header_font_color,#customize-control-beautiful_header_font_color_hover" ).show();	
	}

	$( "#customize-control-beautiful_header_style select" ).change(function(){
		if( $( this ).val() == "style_7" ) {
			$( "#customize-control-beautiful_header_font_color,#customize-control-beautiful_header_font_color_hover" ).hide();
		} else {
			$( "#customize-control-beautiful_header_font_color,#customize-control-beautiful_header_font_color_hover" ).show();
		}
	});

	// home page style
	if( $( "#customize-control-beautiful_homepage_style select option:selected" ).val() == "custom" ) {
		$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).hide();
		$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).show();
	} else if ( $( "#customize-control-beautiful_homepage_style select option:selected" ).val() == "same_color" ) {
		$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
		$( "#customize-control-beautiful_same_color" ).show();
		$( "#customize-control-beautiful_spectrum_diff" ).hide();
	} else if ( $( "#customize-control-beautiful_homepage_style select option:selected" ).val() == "spectrum" ) {
		$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
		$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).show();
	} else {
		$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
		$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).hide();
	}
	$( "#customize-control-beautiful_homepage_style select" ).change(function(){
		if( $( this ).val() == "custom" ) {
			$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).hide();
			$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).show();
		} else if ( $( this ).val() == "same_color" ) {
			$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
			$( "#customize-control-beautiful_same_color" ).show();
			$( "#customize-control-beautiful_spectrum_diff" ).hide();		
		} else if ( $( this ).val() == "spectrum" ) {
			$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
			$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).show();
		} else {
			$( "#customize-control-beautiful_box_1,#customize-control-beautiful_box_2,#customize-control-beautiful_box_3,#customize-control-beautiful_box_4,#customize-control-beautiful_box_5,#customize-control-beautiful_box_6,#customize-control-beautiful_box_7,#customize-control-beautiful_box_8,#customize-control-beautiful_box_9,#customize-control-beautiful_box_10,#customize-control-beautiful_box_11,#customize-control-beautiful_box_12" ).hide();
			$( "#customize-control-beautiful_same_color,#customize-control-beautiful_spectrum_diff" ).hide();
		}
	});

	// footer style
	if( $( "#customize-control-beautiful_footer_style select option:selected" ).val() == "custom" ) {
		$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).hide();
		$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).show();
	} else if ( $( "#customize-control-beautiful_homepage_style select option:selected" ).val() == "same_color" ) {
		$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
		$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).show();		
	} else if ( $( "#customize-control-beautiful_homepage_style select option:selected" ).val() == "spectrum" ) {
		$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
		$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).show();
	} else {
		$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
		$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).hide();
	}
	$( "#customize-control-beautiful_footer_style select" ).change(function(){
		if( $( this ).val() == "custom" ) {
			$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).hide();
			$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).show();
		} else if ( $( this ).val() == "same_color" ) {
			$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
			$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).show();		
		} else if ( $( this ).val() == "spectrum" ) {
			$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
			$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).show();
		} else {
			$( "#customize-control-beautiful_list_1,#customize-control-beautiful_list_2,#customize-control-beautiful_list_3,#customize-control-beautiful_list_4,#customize-control-beautiful_list_5,#customize-control-beautiful_list_6,#customize-control-beautiful_list_7,#customize-control-beautiful_list_8,#customize-control-beautiful_list_9,#customize-control-beautiful_list_10,#customize-control-beautiful_list_11,#customize-control-beautiful_list_12" ).hide();
			$( "#customize-control-beautiful_same_color_footer,#customize-control-beautiful_spectrum_diff_footer" ).hide();
		}
	});
});