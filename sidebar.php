<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<aside class="sidebar col-xs-12 col-sm-3 col-sm-offset-1">
		
		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/*
	 * When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<div id="primary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</div>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->
		
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

<?php
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="tertiary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="first front-widgets">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="second front-widgets">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .second -->
		<?php endif; ?>

	</aside>