<?php
/**
 * Counter Section
 * 
 * @package bootstrap_coach
 */

if( get_theme_mod( 'bc_counter_show_hide_option', true ) ) :
	$bc_heading_for_counter = get_theme_mod('bc_heading_for_counter');
	$bc_content_for_counter = get_theme_mod('bc_content_for_counter');
	$bc_image_for_counter = get_theme_mod('bc_image_for_counter');
	$bc_counter_video_link = get_theme_mod('bc_counter_video_link');
	?>

	<section class="home-section session-counter" id="bootstrap_coach_counter_sections">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="session-block" style="background-image: url(<?php echo esc_url( $bc_image_for_counter ); ?>);">
						<?php if($bc_counter_video_link){ ?>
							<a href="<?php echo esc_url($bc_counter_video_link); ?>" class="icon"><img src="wp-content/themes/bootstrap-coach/images/video.png" alt="#"></a>
						<?php } ?>
						<?php if($bc_heading_for_counter){ ?>
							<h5 class="title"><?php echo esc_html($bc_heading_for_counter); ?></h5>
						<?php } ?>
						<span class="offer"><?php echo esc_html($bc_content_for_counter); ?>
					</span>
					
				</div>
			</div>
			<div class="col-lg-6">
				<div class="counter-block">
					<div class="counter-holder">


						<?php
							$counter_1['label'] = get_theme_mod( 'bootstrap_coach_counter_1_label' );
							$counter_1['value'] = get_theme_mod( 'bootstrap_coach_counter_1_number' );

							$counter_2['label'] = get_theme_mod( 'bootstrap_coach_counter_2_label' );
							$counter_2['value'] = get_theme_mod( 'bootstrap_coach_counter_2_number' );

							$counter_3['label'] = get_theme_mod( 'bootstrap_coach_counter_3_label' );
							$counter_3['value'] = get_theme_mod( 'bootstrap_coach_counter_3_number' );

							$counter_4['label'] = get_theme_mod( 'bootstrap_coach_counter_4_label' );
							$counter_4['value'] = get_theme_mod( 'bootstrap_coach_counter_4_number' );
						?>


						<?php if( $counter_1['value'] ) { ?>
							<div class="counter-info">
								<h2 class="counter"><?php echo absint( $counter_1['value'] ); ?></h2>
								<span class="title"><?php echo esc_html( $counter_1['label'] ); ?></span>
							</div>
						<?php } ?>

						<?php if( $counter_2['value'] ) { ?>
							<div class="counter-info">
								<h2 class="counter"><?php echo absint( $counter_2['value'] ); ?></h2>
								<span class="title"><?php echo esc_html( $counter_2['label'] ); ?></span>
							</div>
						<?php } ?>

						<?php if( $counter_3['value'] ) { ?>
							<div class="counter-info">
								<h2 class="counter"><?php echo absint( $counter_3['value'] ); ?></h2>
								<span class="title"><?php echo esc_html( $counter_3['label'] ); ?></span>
							</div>
						<?php } ?>

						<?php if( $counter_4['value'] ) { ?>
							<div class="counter-info">
								<h2 class="counter"><?php echo absint( $counter_4['value'] ); ?></h2>
								<span class="title"><?php echo esc_html( $counter_4['label'] ); ?></span>
							</div>
						<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;