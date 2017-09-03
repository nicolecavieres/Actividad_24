<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

	<title>Singolo</title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="" />


<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' />


</head>

	<body>

		<!-- Header
			============================= -->
		<div id="header">
	        <div class="inner">
	        
	            <!-- Logo -->
	            <a href="<?php the_permalink()?>">
	            <?php the_custom_logo(); ?>
	            </a>
	            <!-- .logo-->
	            
	            <!-- Nav Menu -->
	            <ul class="nav-menu right">
				  	<?php wp_nav_menu(
				      array(
				          'theme_location' => 'menu',
				          'container_class' => 'menu_principal'
				      )); ?>      
	            </ul><!-- .nav-menu-->
	        
	        </div><!-- .inner -->
		</div><!-- #header -->
		<!-- End Header -->

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>