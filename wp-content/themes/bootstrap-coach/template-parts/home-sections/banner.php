<?php
/**
 * Counter Section
 * 
 * @package bootstrap_coach
 */
    if( get_theme_mod( 'banner_section_display_option', true ) ) :
        $banner_title = get_theme_mod( 'banner_section_title' );
        $banner_desc = get_theme_mod( 'banner_section_description' );
        $banner_cta_label = get_theme_mod( 'banner_section_cta_label' );
        $banner_cta_link = get_theme_mod( 'banner_section_cta_link' );
        $bs_bg_image = get_theme_mod( 'bs_bg_image' );
?>
<section class="home-section banner" id="bootstrap_coach_banner_section" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">

	<div class="container">
		<div class="caption">
      <?php if ($banner_title){ ?>
			<h1 class="banner-title"><?php echo esc_html( $banner_title ); ?></h1>
      <?php } ?>
      <?php if ($banner_desc){ ?>
			<p><?php echo esc_html( $banner_desc ); ?></p>
      <?php } ?>
      <?php if($banner_cta_link && $banner_cta_label ){ ?>
			<a href="<?php echo esc_url( $banner_cta_link ); ?>" class="btn btn-primary"><?php echo esc_html( $banner_cta_label ); ?></a>
      <?php } ?>
		</div>
	</div>
</section>
<?php 
  endif;
?>