<?php
/**
 * @package advance-it-company
 * @subpackage advance-it-company
 * @since advance-it-company 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses advance_it_company_header_style()
*/

function advance_it_company_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'advance_it_company_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 220,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'advance_it_company_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'advance_it_company_custom_header_setup' );

if ( ! function_exists( 'advance_it_company_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see advance_it_company_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'advance_it_company_header_style' );
function advance_it_company_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$advance_it_company_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'advance-it-company-basic-style', $advance_it_company_custom_css );
	endif;
}
endif;