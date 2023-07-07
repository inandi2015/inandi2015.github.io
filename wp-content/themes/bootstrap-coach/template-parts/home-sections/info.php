<?php

if ( get_theme_mod( 'bc_cta_blocks_show_hide', true)){
    $bc_title_for_cta_block_1 = get_theme_mod( 'bc_title_for_cta_block_1', '' );
    $bc_content_for_cta_block_1 = get_theme_mod( 'bc_content_for_cta_block_1', '' );
    $cta_block_1_link_label = get_theme_mod( 'cta_block_1_link_label', '' );
    $cta_block_1_link = get_theme_mod( 'cta_block_1_link', '' );
    $bc_cta_block_contact1 = get_theme_mod( 'bc_cta_block_contact1', '' );

    $bc_title_for_cta_block_2 = get_theme_mod( 'bc_title_for_cta_block_2', '' );
    $bc_content_for_cta_block_2 = get_theme_mod( 'bc_content_for_cta_block_2', '' );
    $bc_cta_block_2_link_label = get_theme_mod( 'bc_cta_block_2_link_label', '' );
    $bc_cta_block_2_link = get_theme_mod( 'bc_cta_block_2_link', '' );
    $bc_cta_block_contact2 = get_theme_mod( 'bc_cta_block_contact2', '' );
?>
<section class="home-section info-block" id="bootstrap_coach_info_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="call-block">
                    <?php if($bc_title_for_cta_block_1){ ?>
					<h5 class="title"><?php echo esc_html($bc_title_for_cta_block_1); ?></h5>
                    <?php } ?>
                    <?php if($bc_content_for_cta_block_1){ ?>
					<p><?php echo esc_html($bc_content_for_cta_block_1); ?></p>
                    <?php } ?>
					<?php if( $cta_block_1_link_label && $cta_block_1_link ){ ?>
                    <a href="<?php echo esc_url( $cta_block_1_link); ?>" class="btn-link"><?php echo esc_html( $cta_block_1_link_label); ?></a>
                    <?php } ?>
                    <?php if($bc_cta_block_contact1){ ?>
					<div class="number-block">
						<div class="icon">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png' ); ?>">
						</div>
						<div class="number-holder">
							<span class="text"><?php echo esc_html( get_theme_mod( 'bc_cta_block_contact1_text', __( 'Dial Now', 'bootstrap-coach' ) ) ); ?></span>
						<a href="tel:<?php echo esc_attr($bc_cta_block_contact1); ?>" class="number"><?php echo esc_html($bc_cta_block_contact1); ?></a>
						</div>
					</div>
                    <?php } ?>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="help-block">
                    <?php if($bc_title_for_cta_block_2){ ?>
					<h5 class="title"><?php echo esc_html($bc_title_for_cta_block_2); ?></h5>
                    <?php } ?>
					<?php if($bc_content_for_cta_block_2){ ?>
					<p><?php echo esc_html($bc_content_for_cta_block_2); ?></p>
                    <?php } ?>
                    <?php if( $bc_cta_block_2_link_label && $bc_cta_block_2_link ){ ?>
                    <a href="<?php echo esc_url( $bc_cta_block_2_link); ?>" class="btn-link"><?php echo esc_html( $bc_cta_block_2_link_label); ?></a>
                    <?php } ?>
					<?php if($bc_cta_block_contact2){ ?>
					<span class="text">Dail Now</span>
						<a href="tel:<?php echo esc_attr($bc_cta_block_contact2); ?>" class="number"><?php echo esc_html($bc_cta_block_contact2); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php }