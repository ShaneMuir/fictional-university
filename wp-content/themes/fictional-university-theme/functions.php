<?php 
	
function university_files() {
	wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
	if(strstr($_SERVER['SERVER_NAME'], 'localhost')) {
	wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
	} else {
	wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
	wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.291f4fbd3120f33dcc5a.js'), NULL, '1.0', true);
	wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.291f4fbd3120f33dcc5a.css'));
	}
	
	
}	
add_action('wp_enqueue_scripts', 'university_files');




function university_features() {
	add_theme_support('title-tag');
	register_nav_menu('header-menu', 'Header Menu Location');
}
add_action('after_setup_theme', 'university_features');
	


function university_adjust_queries($query) {
	$today = date('Ymd');
	if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
		$query -> set('meta_key', 'event_date');
		$query -> set('order_by', 'meta_value_num');
		$query -> set('order', 'ASC');
		$query -> set('meta_query', array(
			         array(
				         'key' => 'event_date',
				         'compare' => '>=',
				         'value' => $today,
				         'type' => 'numeric',
			         )
		));
	}
}

add_action('pre_get_posts', 'university_adjust_queries');