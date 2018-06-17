<?php

error_reporting(E_ALL);

//Savoyards 80th season custom functions

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//Add CSS class to specifically target this theme
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'eightieth' ) );
} );

error_reporting(0); 
$old_error_handler = set_error_handler("userErrorHandler");

function userErrorHandler ($errno, $errmsg, $filename, $linenum,  $vars) 
{
	$time=date("d M Y H:i:s"); 
	// Get the error type from the error number 
	$errortype = array (1    => "Error",
						2    => "Warning",
						4    => "Parsing Error",
						8    => "Notice",
						16   => "Core Error",
						32   => "Core Warning",
						64   => "Compile Error",
						128  => "Compile Warning",
						256  => "User Error",
						512  => "User Warning",
						1024 => "User Notice");
	$errlevel=$errortype[$errno];

	//Write error to log file (CSV format) 
	$errfile=fopen("errors.csv","a"); 
	fputs($errfile,"\"$time\",\"$filename: 
	$linenum\",\"($errlevel) $errmsg\"\r\n"); 
	fclose($errfile);
}

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 *
 * @uses register_sidebar()
 */
function eightieth_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'twentyten-child-eigtieth' ),
		'id' => 'primary-widget-area',
		'description' => __( 'Add widgets here to appear in your sidebar.', 'twentyten-child-eigtieth' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'twentyten-child-eigtieth' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'An optional secondary widget area, displays below the primary widget area in your sidebar.', 'twentyten-child-eigtieth' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Consider all posibilities.
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentyten-child-eigtieth' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentyten-child-eigtieth' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'twentyten-child-eigtieth' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentyten-child-eigtieth' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'twentyten-child-eigtieth' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentyten-child-eigtieth' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
/** Register sidebars by running eightieth_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'eightieth_widgets_init' );
?>