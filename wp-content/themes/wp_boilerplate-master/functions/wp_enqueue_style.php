<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('main', get_parent_theme_file_uri('/assets/css/main.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('nivo-slider', get_parent_theme_file_uri('/assets/css/nivo-slider.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('nivotheme', get_parent_theme_file_uri('/assets/css/nivotheme.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('prettyPhoto', get_parent_theme_file_uri('/assets/css/prettyPhoto.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('main');
		wp_enqueue_style('nivo-slider');
		wp_enqueue_style('nivotheme');
		wp_enqueue_style('prettyPhoto');


	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>