<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		</div><!-- row -->
	</div><!-- #main -->

	<footer id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/*
	 * A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a> -->
				&copy;2017 The Pittsburgh Savoyards, Inc.
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php
				/**
				 * Fires before the Twenty Ten credits in the footer.
				 *
				 * @since Twenty Ten 1.0
				 */
				do_action( 'twentyten_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>-->
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- jQueryUI -->
<!-- <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> -->

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Bootstrap Responsive Toolkit -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap-toolkit.min.js"></script>

<!-- Theme Specific -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/savoyards80.js"></script>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
