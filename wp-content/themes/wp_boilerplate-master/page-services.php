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