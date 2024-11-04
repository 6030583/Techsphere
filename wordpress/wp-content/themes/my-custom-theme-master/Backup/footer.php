<?php
/**
 * The footer template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
		wp_footer(); ?>
		    <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?> 
				<div id="footer-widget-area" class="widget-area" role="complementary"> 
					<?php dynamic_sidebar( 'footer-widget-area' ); ?> 
				</div> 
    		<?php endif; ?> 
	
		
	</body>
</html>
