<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

?></title>
	
<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
<![endif]-->
<!-- Normalize CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Google Fonts  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC|Norican|Philosopher:400,700|Spectral">
<!-- Blog Styles   -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta name="google-site-verification" content="Gr_nO8JWlsq-79_jh4uMw2PFappJBdDeSoAygWwK-QE" />
</head>

<body <?php body_class(); ?> id="savoyards-eightieth">
	<div id="wrapper" class="hfeed">
		<header id="header" class="container">
			<div id="masthead">
				<div id="branding">
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					<<?php echo $heading_tag; ?> id="site-title" class="row">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<span id="wordmark-pgh" class="col-xs-8 col-sm-5 wordmark">Pittsburgh</span>
								<span id="savoyards-logo" class="col-xs-4 col-sm-2"><img src="http://www.pittsburghsavoyards.org/wordpress/wp-content/uploads/2017/08/ps-logo-sm.png" /></span>
								<span id="wordmark-svy" class="col-xs-8 col-sm-5 wordmark">Savoyards</span>
							</a>
					</<?php echo $heading_tag; ?>>
				</div><!-- #branding -->
			</div><!-- #masthead -->
		</header><!-- #header -->

		<div id="banner" class="container banner-container">
		
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		
			<div class="row">
				<div class="banner col-xs-12">
					<!--<img src="/wordpress/wp-content/uploads/2013/04/ps_logo_mini_100.png" style="position:absolute;margin-top:.2rem;margin-left:.2rem;z-index:100;max-width:10%">-->
					<?php
					  $static_header_image = get_post_meta(get_the_ID(), "static_header_image", true);
					  echo "<!-- header image: $static_header_image -->";
					  if ($static_header_image != '') {
						echo "<img class=\"wp-post-image\" src=\"$static_header_image\">";
					  } else if (function_exists('meteor_slideshow')) {
							meteor_slideshow();
					  }
					?>
				</div>
			</div>
		</div>
		
		<nav id="main-nav" class="container">
			<div id="access" role="navigation">
				<h3 class="menu-toggle"><span>MENU</span></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
		</nav>

		<div id="main" class="main container">
			<div class="row">