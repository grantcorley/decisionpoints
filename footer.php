<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">



				<div class="container footer-details">


					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							 <img id="logo-footer"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.svg " width="456" height="193" class="masthead-logo" alt="Southeast CDC" />
						 </a>


		<!-- <div class="row"> -->

			<!-- <div class="col-md"></div>
	    <div class="col-md"></div> -->
	    <!-- </div> -->


	  </div>

		<div class="footer-social-icons">
			 <a href="https://www.facebook.com/Decision-Points-CBT-1601296003455451/?ref=aymt_homepage_panel">
				<i class="icon fab fa-facebook-square"></i>
			</a>

			<a href="https://twitter.com/DecisionPointsP">
			 <i class="icon fab fa-twitter-square"></i>
		 </a>
	 </div> <!-- end footer social icons -->

	 <br/>

		 <?php get_search_form( true ) ?>

		 <p class="legal">&copy; <?php echo date("Y"); ?> Decision Points Authors LLC &nbsp; &nbsp; <span style="color:#333333">|</span> &nbsp; &nbsp; <a href="http://www.new.decisionpointsprogram.com/privacy-policy/">Privacy Policy</a></p>

	</div>

				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
