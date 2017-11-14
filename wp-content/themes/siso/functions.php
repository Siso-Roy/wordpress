<?php

add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'home-small', 100, 100, true );
	add_image_size( 'home-thumb', 150, 150, true );
}

add_filter('show_admin_bar', '__return_false');

function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}
