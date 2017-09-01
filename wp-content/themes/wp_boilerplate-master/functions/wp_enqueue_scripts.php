<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		//wp_register_script('jQuery1', get_parent_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		//wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.2.1', true);
		//wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		//wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.min.js'), array('jQuery_migrate'), null, true);
		//wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);

		wp_register_script('jQuery3', get_parent_theme_file_uri() . '/assets/js/jquery-1.7.2.js', null, null, true);

		wp_register_script('nivo', get_parent_theme_file_uri('/assets/js/jquery.nivo.slider.pack.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		wp_register_script('quicksand', get_parent_theme_file_uri('/assets/js/jquery.quicksand.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		wp_register_script('prettyPhoto', get_parent_theme_file_uri('/assets/js/jquery.prettyPhoto.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		wp_register_script('easing', get_parent_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		wp_register_script('script', get_parent_theme_file_uri('/assets/js/script.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);
		wp_register_script('custom', get_parent_theme_file_uri('/assets/js/custom.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);


				
		/* Enqueue Scripts */

		wp_enqueue_script('nivo');
		wp_enqueue_script('quicksand');
		wp_enqueue_script('prettyPhoto');
		wp_enqueue_script('easing');
		wp_enqueue_script('script');
		wp_enqueue_script('custom');

	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>