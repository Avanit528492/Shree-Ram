<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Pleasant Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}
?>
<?php
$disabled_slides 	  	= esc_attr( get_theme_mod('disabled_slides', false) );
?>
<a class="skip-link screen-reader-text" href="#page_content">
<?php esc_html_e( 'Skip to content', 'pleasant-lite' ); ?>
</a>
<div class="header">
  <div class="container">
    <div class="logo">     
		<?php pleasant_lite_the_custom_logo(); ?>
        
         <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>      
    </div><!-- logo -->
    <div class="toggle"> <a class="toggleMenu" href="#">
      <?php esc_html_e('Menu','pleasant-lite'); ?>
      </a> </div> <!-- toggle -->
    <div class="sitenav">
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </div>
    <!-- site-nav -->
    <div class="clear"></div>
  </div>
  <!-- container -->
</div><!--.header -->

<?php 
if ( is_front_page() && !is_home() ) {
if($disabled_slides != '') {
	for($i=7; $i<=10; $i++) {
	  if( get_theme_mod('page-setting'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('page-setting'.$i,true));
	  }
	}
?> 
<div class="slider-main">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   
</div> 
<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption"> 
     <div class="slide_info">        
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>	
         <?php
		 $slider_readmore = get_theme_mod('slider_readmore');
		 if( !empty($slider_readmore) ){ ?>
          <a class="slidemore" href="<?php the_permalink(); ?>"><?php echo esc_attr($slider_readmore); ?></a>
	  	 <?php } ?> 
         </div>	               
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
<?php } } ?>