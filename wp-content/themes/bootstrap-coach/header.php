<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap_coach
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap-coach' ); ?></a>
  <header class="header">
    <?php 
    $general_section_display_option = get_theme_mod( 'general_section_display_option', true ); 
    if($general_section_display_option){
      ?>
      <div class="top-header">
        <div class="container">
          <div class="t-header-holder">
            <div class="phone-email">
              <div class="social-navigation">
                <?php
                  $social_media_array['facebook'] = get_theme_mod( 'bootstrap_coach_facebook_link' );
                  $social_media_array['twitter'] = get_theme_mod( 'bootstrap_coach_twitter_link' );
                  $social_media_array['pinterest'] = get_theme_mod( 'bootstrap_coach_pinterest_link' );
                  $social_media_array['instagram'] = get_theme_mod( 'bootstrap_coach_instagram_link' );
                  $social_media_array['linkedin'] = get_theme_mod( 'bootstrap_coach_linkedin_link' );
                  $social_media_array['youtube'] = get_theme_mod( 'bootstrap_coach_youtube_link' );

                  $social_media_array = array_filter($social_media_array);
                ?>

                <?php if ( ! empty( $social_media_array ) && is_array( $social_media_array ) ) : ?>

                <div class="social-icons">
                  <ul class="list-inline">
                    <?php
                    foreach ( $social_media_array as $key => $value ) {
                      
                      $i_tag_class = 'fa fa-' . $key;
                      ?>
                      <li class="<?php echo esc_attr( strtolower( $key ) ); ?>">
                        <a href="<?php echo esc_url( $value ); ?>" target="_blank">
                          <i class="<?php echo esc_attr( $i_tag_class ); ?>"></i>
                        </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>

              <?php endif; ?>
            </div>
              <?php 
              $bootstrap_coach_contact_number = get_theme_mod( 'bootstrap_coach_contact_number' ); 
              if($bootstrap_coach_contact_number){
                ?>
                <a href="tel:<?php echo esc_attr($bootstrap_coach_contact_number); ?>" class="phone">
                   <span class="fa fa-phone" aria-hidden="true"></span> <?php echo esc_html($bootstrap_coach_contact_number); ?></a>
                <?php } ?>  
                <?php 
                $bootstrap_coach_email_address = get_theme_mod( 'bootstrap_coach_email_address', '' ); 
                if($bootstrap_coach_email_address){
                  ?>
                  <a class="email" href="mailto:<?php echo esc_attr($bootstrap_coach_email_address); ?>">
                    <span class="fa fa-envelope"></span>
                    <?php echo esc_html($bootstrap_coach_email_address); ?>
                  </a>
                <?php } ?> 
              </div>
            <?php
                $bc_header_cta_label = get_theme_mod( 'bc_header_cta_label', '' ); 
                $bc_header_cta_link = get_theme_mod( 'bc_header_cta_link', '' ); 
                if( $bc_header_cta_label && $bc_header_cta_link ){
            ?>
              <a href="<?php echo esc_url( $bc_header_cta_link); ?>" class="btn book-btn"><?php echo esc_html( $bc_header_cta_label); ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>  

    <div class="main-header">
      <div class="container">

        <div class="header-wrapper">


          <div class="site-title-description">
          <?php
            if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
              the_custom_logo();
            } 
            $siteTitleShow = get_theme_mod('sitetitle_showhide', 'true');
            if($siteTitleShow){ 
          ?>
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <?php } ?>
            <?php 
            $siteDescShow = get_theme_mod('tagline_showhide', 'true');
            if($siteDescShow){
            $bootstrap_coach_description = get_bloginfo( 'description', 'display' );
            if ( $bootstrap_coach_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $bootstrap_coach_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
          <?php endif;
            }
          ?>
          </div>


          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <?php esc_html_e( 'Primary Menu', 'bootstrap-coach' ); ?> -->
              <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </nav><!-- #site-navigation -->

        </div>
      </div>
    </div>
  </header>


  <?php if ( class_exists( 'Breadcrumb_Trail' ) && ! is_home() && ! is_front_page() ) : ?>               
  <div class="breadcrumb-holder">
   <div class="container"><?php breadcrumb_trail(); ?></div> 
 </div>
</div>
<?php endif; ?>
