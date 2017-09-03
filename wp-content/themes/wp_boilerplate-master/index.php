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
                    <p><?php the_field('texto_services')?></p>
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
                <li class="current all"><a href="#">Todos</a></li>
                <li class="webdesign"><a href="#">Diseño web</a></li>
                <li class="graphicdesign"><a href="#">Diseño gráfico</a></li>
                <li class="artwork"><a href="#">Obra de arte</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">
                <?php 
                     $arg = array(
                        'post_type' => 'portafolio',
                        'posts_per_page'=> -1
                     );
                     $get_arg = new WP_Query( $arg );

                      while ( $get_arg->have_posts() ) {
                            $get_arg->the_post(); 
                ?> 
                
                <li data-id="<?php the_field('nombre'); ?>" data-type="<?php the_field('clasificacion'); ?>">
                     <a href="<?php the_field('imagen_completa')?> " rel="prettyPhoto[portfolio]">
                    <img src="<?php the_field('miniatura')?> " width="220" height="187" alt="Imagen portafolio" />

                    </a>
                </li>

                <?php } wp_reset_postdata(); ?> 
                        
            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
    </div><!-- #portfolio -->
    <!-- End Portfolio -->
    
<!-- About
        ============================= -->
    <div id="about">
        <div class="inner">
        
            <!-- Title -->
            <h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
           <!-- Profile -->
            <ul>
                
                <?php 
                     $arg = array(
                        'post_type' => 'about',
                        'posts_per_page'=> -1
                     );
                     $get_arg = new WP_Query( $arg );

                      while ( $get_arg->have_posts() ) {
                            $get_arg->the_post(); 
                ?> 
                <li>    
                    <img src="<?php the_field('foto')?> " width="300" height="300" alt="#" />
                    <h4><?php the_title()?></h4>
                    <p><?php the_field('descripcion')?></p>
                    <?php

                    // vars 
                    $red = get_field('redes');
                    $fb = get_field('facebook_url');
                    $gl = get_field('google_url');
                    $tw = get_field('twitter_url');
                    $ln = get_field('linkedin_url');

                    // check
                    if( $red && in_array('facebook', $red)){ 

                    echo '<a href= "'.$fb.'" target="_blank"><span class="icon-facebook"></span></a>';
                    } 

                    if( $red && in_array('google', $red)){ 
                    echo '<a href= "'.$gl.'" target="_blank"><span class="icon-gplus"></span></a>';
                    } 

                    if( $red && in_array('twitter', $red)){ 
                    echo '<a href= "'.$tw.'" target="_blank"><span class="icon-twitter"></span></a>';
                    }

                    if( $red && in_array('linkedin', $red)){ 
                    echo '<a href= "'.$ln.'" target="_blank"><span class="icon-linkedin"></span></a>';
                    }
                
                    ?>

                     <?php } wp_reset_postdata(); ?> 
                    
                </li>                
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
    </div><!-- #about -->
    <!-- End About -->

 <!-- Contact
        ============================= -->

    <div id="contact">
        <div class="inner">
        
            <!-- Title -->
            <h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
                <li>
                   <?php if(is_active_sidebar('contact_widget')):?>
                    <?php dynamic_sidebar('contact_widget');?>
                <?php endif; ?>
               
                </li>
                
                <li>
                    <h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
    </div><!-- #contact -->
    <!-- End Contact -->   
<?php get_footer() ?>