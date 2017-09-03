<?php
	
	// Agrega los tamaños personalizados en la lista de tamaños disponibles en el administrador
	function add_image_sizes($sizes) {
		$addsizes = array(
			"slideshow" => __( "Tamaño del slideshow"),
			"miniatura" => __( "Tamaño personalizado de miniatura"),
			"custom_logo" => __( "Tamaño del logo")
		);

		return array_merge($sizes, $addsizes);
	}

	// Agrega tamaños de imágenes personalizadas en posts
	if ( function_exists( 'add_theme_support' ) ) { 
		add_image_size( 'slideshow', 800, 600, true);		// Personalización del tamaño del slideshow
		add_image_size( 'custom_logo', 115, 20, true);		// Personalización del tamaño del logo

		add_image_size( 'miniatura', 2, 2, true);		// Personalización del tamaño del miniatura

		add_filter('image_size_names_choose', 'add_image_sizes');
	}

?>