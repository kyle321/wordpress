<?php 
	function mk_enqueue()
	{
		wp_register_style( 'mk_google_fonts', 
			'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
		wp_register_style( 'mk_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_register_style( 'mk_style', get_template_directory_uri() .'/assets/style.css' );
		wp_register_style( 'mk_dark', get_template_directory_uri() .'/assets/css/dark.css' );
		wp_register_style( 'mk_font_icons', get_template_directory_uri() .'/assets/css/font-icons.css' );
		wp_register_style( 'mk_animate', get_template_directory_uri() .'/assets/css/animate.css' );
		wp_register_style( 'mk_magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css' );
		wp_register_style( 'mk_responsive', get_template_directory_uri() .'/assets/css/responsive.css' );
		wp_register_style( 'mk_custom', get_template_directory_uri() .'/assets/css/custom.css' );


		wp_enqueue_style('mk_google_fonts');
		wp_enqueue_style('mk_bootstrap');
		wp_enqueue_style('mk_style');
		wp_enqueue_style('mk_dark');
		wp_enqueue_style('mk_animate');
		wp_enqueue_style('mk_magnific-popup');
		wp_enqueue_style('mk_responsive');
		wp_enqueue_style('mk_custom');
		wp_enqueue_style('mk_font_icons');


		wp_register_script( 'mk_plugins', get_template_directory_uri().'/assets/js/plugins.js', array( '' ), false, true );
		wp_register_script( 'mk_functions', get_template_directory_uri().'/assetsjs/functions.js', array( '' ), false, true );

		wp_enqueue_script('jquery.js');
		wp_enqueue_script('mk_plugins');
		wp_enqueue_script('mk_functions');
	}