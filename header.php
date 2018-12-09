<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	   <img id="main-logo"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-main.svg " width="456" height="193" class="masthead-logo" alt="Southeast CDC" />
	 </a>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>


	<?php
	//get_template_part( 'template-parts/header/header', 'image' );
	?>




	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
	          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
	          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	        </ol>
	        <div class="carousel-inner">
	          <div class="carousel-item">
	            <img class="first-slide" src="<?php echo get_stylesheet_directory_uri(); ?>/images/class_frongpage_02.jpg" alt="First slide" width="2950" height="1000">
	            <div class="container">
	              <div class="carousel-caption text-left">
	                <!-- <h1>Decision Points is an open-group cognitive-behavioral intervention program that was published in 2012 and released nationally in 2015. Decision Points has been pilot tested and implemented with youth & adult groups in a range of correctional settings. </h1>
	                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
	              </div>
	            </div>
	          </div>
	          <div class="carousel-item active">
	            <img class="second-slide" src="<?php echo get_stylesheet_directory_uri(); ?>/images/class_frontpage_01.jpg" alt="First slide" width="2950" height="1000">
	            <div class="container">
	              <div class="carousel-caption">
	                <!-- <h1>Another example headline.</h1>
	                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
	              </div>
	            </div>
	          </div>
	          <div class="carousel-item">
	            <img class="third-slide" src="<?php echo get_stylesheet_directory_uri(); ?>/images/class_frongpage_03.jpg" alt="First slide" width="2950" height="1000">
	            <div class="container">
	              <div class="carousel-caption text-right">
	                <!-- <h1>One more for good measure.</h1>
	                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
	              </div>
	            </div>
	          </div>
	        </div>
	        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>

				<h1 class="elevator-pitch">Decision Points is an open-group cognitive-behavioral intervention program, pilot tested and implemented with youth &amp; adult groups in a range of correctional settings.</h1>

			<?php endif; ?>


<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'featured' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
