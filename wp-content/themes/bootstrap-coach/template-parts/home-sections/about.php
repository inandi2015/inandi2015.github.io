<?php
if( get_theme_mod( 'bc_about_display_option', true ) ) :
	$bc_heading_for_about       = get_theme_mod( 'bc_heading_for_about' );
	$bc_content_for_about       = get_theme_mod( 'bc_content_for_about' );
	$bc_short_desc_for_about       = get_theme_mod( 'bc_short_desc_for_about' );
	$bc_image_for_about       = get_theme_mod( 'bc_image_for_about' );
	?>
	<section class="home-section about" id="bootstrap_coach_about_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="main-title">
						<?php echo esc_html($bc_heading_for_about); ?>
					</h2>
					<p class="desc"><?php echo esc_html($bc_content_for_about); ?></p>
					<blockquote>
						<p><?php echo esc_html($bc_short_desc_for_about); ?></p>
					</blockquote>
					<div class="btn-group">
						<?php
							$abt_btns_1['label'] = get_theme_mod( 'bootstrap_coach_about_button_1_label' );
							$abt_btns_1['link'] = get_theme_mod( 'bootstrap_coach_about_button_1_link' );

							$abt_btns_2['label'] = get_theme_mod( 'bootstrap_coach_about_button_2_label' );
							$abt_btns_2['link'] = get_theme_mod( 'bootstrap_coach_about_button_2_link' );
						?>


						<?php if( $abt_btns_1['link'] ) { ?>
							<a href="<?php echo esc_url( $abt_btns_1['link'] ); ?>" class="btn btn-primary"><?php echo esc_html( $abt_btns_1['label'] ); ?></a>
						<?php } ?>

						<?php if( $abt_btns_2['link'] ) { ?>
							<a href="<?php echo esc_url( $abt_btns_2['link'] ); ?>" class="btn btn-primary"><?php echo esc_html( $abt_btns_2['label'] ); ?></a>
						<?php } ?>

					</div>
				</div>

				<div class="col-lg-6">
					<div class="img-holder">
						<img src="<?php echo esc_url($bc_image_for_about); ?>">
					</div>
				</div>

			</div>
		</div>
	</section>
			<?php endif; 