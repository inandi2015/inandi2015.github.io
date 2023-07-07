<?php get_header(); ?>

<?php
$custom = get_post_custom( get_the_ID() );

$designation = "";
$social_links = array();

if ( ! empty( $custom ) ) {
	if( isset( $custom['tbtc_designation'] ) ) {
		$designation = $custom['tbtc_designation'][0];
	}

	if( isset( $custom['tbtc_facebook_link'] ) ) {
		$social_links['facebook'] = $custom['tbtc_facebook_link'][0];
	}
	if( isset( $custom['tbtc_instagram_link'] ) ) {
		$social_links['instagram'] = $custom['tbtc_instagram_link'][0];
	}
	if( isset( $custom['tbtc_twitter_link'] ) ) {
		$social_links['twitter'] = $custom['tbtc_twitter_link'][0];
	}
	if( isset( $custom['tbtc_linkedIn_link'] ) ) {
		$social_links['linkedin'] = $custom['tbtc_linkedIn_link'][0];
	}
}



?>


<section class="inside-page content-area team-inner" id="primary">
	<div class="container">

		<div class="team-inner-content">
			<div class="left-content">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>


				<div class="img-holder">
					<img src="<?php echo esc_url( $image[0] ); ?>">
				</div>
			</div>

			<div class="right-content">
				<h2 class="main-title"><?php the_title() ?></h2>
				<?php if ( ! empty( $custom ) ) { ?>

					<div class="team-info">
						<?php if( $designation ) { ?>
							<span class="profession"><?php echo esc_html( $designation ); ?></span>
						<?php } ?>

						<?php if( ! empty( array_filter( $social_links ) ) ) { ?>
							<div class="social-icons">
								<ul class="list-inline">
									<?php foreach( $social_links as $key => $value ) { ?>
										<li class="<?php echo esc_attr( $key ); ?>">
											<a target="_blank" href="<?php echo esc_url( $value ); ?>">
												<i class="fa fa-<?php echo esc_attr( $key ); ?>"></i>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						<?php } ?>

					</div>

				<?php } ?>
				<p class="desc"><?php the_content(); ?></p>
			</div>
		</div>
		
	</div>
</section>



<?php get_footer();