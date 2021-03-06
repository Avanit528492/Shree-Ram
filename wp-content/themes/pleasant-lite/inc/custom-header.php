<?php
/**
 * @package Pleasant Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses pleasant_lite_header_style()
 */
function pleasant_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'pleasant_lite_custom_header_args', array(	
		'default-text-color'     => 'ffffff',
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'pleasant_lite_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'pleasant_lite_custom_header_setup' );

if ( ! function_exists( 'pleasant_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see pleasant_lite_custom_header_setup().
 */
function pleasant_lite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php 
} 
endif; // pleasant_lite_header_style