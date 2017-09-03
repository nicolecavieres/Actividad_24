<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
<!-- Footer
		============================= -->
	<div id="footer">
        <div class="inner">
        
        	<p class="left">© Copyright 2013 by <a href="">PSDchat</a></p>
            
            <ul>
                <?php wp_nav_menu(
                      array(
                          'theme_location' => 'menu2',
                          'container_class' => 'menu_sociales'
                      )); ?>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #footer -->
	<!-- End Footer -->
    
    <a href="" class="go-top">Top</a>
    
</body>
</html>