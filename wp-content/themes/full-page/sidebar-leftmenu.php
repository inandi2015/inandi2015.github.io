<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Full Page
 */
?>
<!-- sidebar -->
<div id="fullpage-sidebar">
      <div class="fullpage-logo">
		<?php full_page_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <span class="desc"><?php echo esc_html($description); ?></span>                          
        <?php endif; ?>
        </a>
      </div>
      <div id="content-1" class="navig-area">
      <div class="mobmenu">	
        <a href="<?php echo esc_url('#');?>" class="show_hide togmenu"><?php esc_html_e('Menu', 'full-page');?></a>	
        <a href="<?php echo esc_url('#');?>" class="show_hide1 togmenu"><?php esc_html_e('Menu', 'full-page');?></a>
      </div>
      	<?php
        	if ( has_nav_menu( 'primary' ) ){ wp_nav_menu(array('theme_location' => 'primary', 'container_id' => 'lensmenu', 'walker' => new full_page_CSS_Menu_Lens())); } else { wp_nav_menu(array('container_id' => 'lensmenu', 'fallback_cb' => false));}
		?>
      </div>
      <div class="clear"></div>
		<?php
            $fb_link = get_theme_mod('fb_link'); 
            $twitt_link = get_theme_mod('twitt_link');
            $gplus_link = get_theme_mod('gplus_link');
            $pinterest_link = get_theme_mod('pinterest_link');
            $youtube_link = get_theme_mod('youtube_link');
            $vimeo_link = get_theme_mod('vimeo_link');
            $instagram_link = get_theme_mod('instagram_link');
            $flickr_link = get_theme_mod('flickr_link');
            $dribble_link = get_theme_mod('dribble_link');
            $foursquare_link = get_theme_mod('foursquare_link');
            $behance_link = get_theme_mod('behance_link');
            $linkedin_link = get_theme_mod('linkedin_link'); 
        ?>  
      <div class="top-social-box">
        <div class="left-social-icons">
			<?php 
            if (!empty($fb_link)) { ?>
            <a title="<?php esc_attr__('Facebook','full-page'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
            <?php }  
            if (!empty($twitt_link)) { ?>
            <a title="<?php esc_attr__('Twitter','full-page'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a> 
            <?php }  
            if (!empty($gplus_link)) { ?>
            <a title="<?php esc_attr__('Google Plus','full-page'); ?>" class="gp" target="_blank" href="<?php echo esc_url($gplus_link); ?>"></a> 
            <?php }  
            if (!empty($pinterest_link)) { ?>
            <a title="<?php esc_attr__('Pinterest','full-page'); ?>" class="pin" target="_blank" href="<?php echo esc_url($pinterest_link); ?>"></a> 
            <?php }  
            if (!empty($youtube_link)) { ?>
            <a title="<?php esc_attr__('Youtube','full-page'); ?>" class="tube" target="_blank" href="<?php echo esc_url($youtube_link); ?>"></a> 
            <?php }  
            if (!empty($vimeo_link)) { ?>
            <a title="<?php esc_attr__('Vimeo','full-page'); ?>" class="vim" target="_blank" href="<?php echo esc_url($vimeo_link); ?>"></a> 
            <?php } 
            if (!empty($instagram_link)) { ?>
            <a title="<?php esc_attr__('Instagram','full-page'); ?>" class="insta" target="_blank" href="<?php echo esc_url($instagram_link); ?>"></a> 
            <?php }  
            if (!empty($flickr_link)) { ?>
            <a title="<?php esc_attr__('Flickr','full-page'); ?>" class="flickr" target="_blank" href="<?php echo esc_url($flickr_link); ?>"></a> 
            <?php }  
            if (!empty($dribble_link)) { ?>
            <a title="<?php esc_attr__('Dribble','full-page'); ?>" class="dribble" target="_blank" href="<?php echo esc_url($dribble_link); ?>"></a> 
            <?php }  
            if (!empty($foursquare_link)) { ?>
            <a title="<?php esc_attr__('Foursquare','full-page'); ?>" class="foursquare" target="_blank" href="<?php echo esc_url($foursquare_link); ?>"></a> 
            <?php }  
            if (!empty($behance_link)) { ?>
            <a title="<?php esc_attr__('Behance','full-page'); ?>" class="behance" target="_blank" href="<?php echo esc_url($behance_link); ?>"></a> 
            <?php } 
            if (!empty($linkedin_link)) { ?>
            <a title="<?php esc_attr__('Linkedin','full-page'); ?>" class="linkedin" target="_blank" href="<?php echo esc_url($linkedin_link); ?>"></a> 
            <?php } ?>                                                                  
        </div>
      </div>
    </div>