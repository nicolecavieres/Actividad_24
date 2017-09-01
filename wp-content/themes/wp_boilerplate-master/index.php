<?php get_header() ?>

	   <!-- Slider
        ============================= -->
    <div id="slider" class="theme-default">
        <div class="inner">
            <div class="nivo-slider nivoSlider">
             <?php 
                 $arg = array(
                    'post_type' => 'slider',
                    'posts_per_page'=> 10
                 );
                 $get_arg = new WP_Query( $arg );

                  while ( $get_arg->have_posts() ) {
                        $get_arg->the_post(); 
            ?> 
            
            <a href=""><img src="<?php the_field('imagen_slider'); ?>" alt="#" /></a>

            <?php } wp_reset_postdata(); ?> 
            
             </div>        
        </div><!-- .inner -->
    </div><!-- #slider -->
    <!-- End Slider -->


    <!-- Services
        ============================= -->
    <div id="services">
        <div class="inner">
        
            <h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
                
                 <?php 
                 $arg = array(
                    'post_type' => 'servicios',
                    'posts_per_page'=> 6
                 );
                 $get_arg = new WP_Query( $arg );

                  while ( $get_arg->have_posts() ) {
                        $get_arg->the_post(); 
                ?> 
                <li>
                    <span class="<?php the_field('icono'); ?>"></span>
                    <h4><?php the_title()?></h4>
                    <p><?php the_excerpt()?></p>
                </li>
                <?php } wp_reset_postdata(); ?> 
                   
            </ul>
        </div><!-- .inner -->
    </div><!-- #services -->
    <!-- End Services -->

<!-- Portfolio
        ============================= -->
    <div id="portfolio">
        <div class="inner">
        
            <h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
                <li class="current all"><a href="#">All</a></li>
                <li class="webdesign"><a href="#">Diseño web</a></li>
                <li class="graphicdesign"><a href="#">Diseño gráfico</a></li>
                <li class="artwork"><a href="#">Obra de arte</a></li>
            </ul><!-- .portfolio-menu -->
            
            

<?php get_footer() ?>