

<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Register Custom Navigation Walker
	require_once('wp-bootstrap-navwalker.php');
	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'libertyvice' ),
	) );
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}

// 	add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
// add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

// function posts_link_attributes_1() {
//     return 'class="bc-button"';
// }
// function posts_link_attributes_2() {
//     return 'class="bc-button"';
// }
	// add_filter('acf/settings/show_admin', '__return_false');
?>