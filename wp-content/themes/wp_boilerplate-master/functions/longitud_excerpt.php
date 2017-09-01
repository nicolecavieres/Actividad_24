<?php 
	function longitud_excerpt($length) {
	    return 116;
	}
	add_filter('excerpt_length', 'longitud_excerpt');
?>