<?php 
	// setup
	
	//includes
	include(get_template_directory().'/includes/front/enqueue.php');


	//hooks
	add_action('wp_enqueue_scripts', 'mk_enqueue');
	add_action('after_setup_theme', 'mk_setup_theme');

	//shortcodes
	
