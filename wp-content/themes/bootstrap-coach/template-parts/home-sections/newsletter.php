<?php if( get_theme_mod( 'bc_about_display_option', true ) ) : ?>

	<section class="home-section newsletter">
		<div class="container">
			<div class="newsletter-holder">
			<?php 
				$bc_newsletter_shortcode = get_theme_mod( 'bc_newsletter_shortcode', '' );
				if( isset( $bc_newsletter_shortcode ) ) {
					echo do_shortcode("$bc_newsletter_shortcode"); 
				}
			?>
			</div>
		</div>
	</section>
	
<?php endif;