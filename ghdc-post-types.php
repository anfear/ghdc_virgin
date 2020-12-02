<?php

function ghdc_posttypes() {
	register_post_type('cyber-article', array(
		'public' => true,
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'rewrite' => array('slug' => 'cyber-articles'),
		'has_archive' => true,
		'labels' => array(
			'name' => 'Cyber-Articles',
			'add_new_item' => 'Add New Cyber-Article',
			'edit_item' => 'Edit Cyber-Article',
			'all_items' => 'All Cyber-Articles',
			'singular_name' => 'Cyber-Article'
		),
		'menu_icon' => 'dashicons-shield'
	));
}

add_action('init', 'ghdc_posttypes');