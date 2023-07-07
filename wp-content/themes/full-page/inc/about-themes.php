<?php
//about theme info
add_action( 'admin_menu', 'full_page_abouttheme' );
function full_page_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'full-page'), esc_html__('About Theme', 'full-page'), 'edit_theme_options', 'full_page_guide', 'full_page_mostrar_guide');   
} 
//guidline for about theme
function full_page_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'full-page'); ?>
		   </div>
          <p><?php esc_html_e('SKT Full Page is full wide page slider which is simple, flexible, easy to use, WooCommerce friendly. Industries like food, recipe, chef, restaurant, bistro, cafe, model, portfolio, resume, IT software computers, maintenance, events, concerts, hotel, resort, motel, health, fitness, yoga and gym. WordPress 5.0 gutenberg editor friendly.','full-page'); ?></p>
		  <a href="<?php echo esc_url(FULL_PAGE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(FULL_PAGE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'full-page'); ?></a> | 
				<a href="<?php echo esc_url(FULL_PAGE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'full-page'); ?></a> | 
				<a href="<?php echo esc_url(FULL_PAGE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'full-page'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(FULL_PAGE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>