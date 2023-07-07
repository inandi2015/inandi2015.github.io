<?php
/**
 * Expert Section
 * 
 * @package bootstrap_coach
 */

if( get_theme_mod( 'bc_teams_display_option', true ) ) :
  $bc_heading_for_teams      = get_theme_mod( 'bc_heading_for_teams' );
?> 


<section class="home-section team" id="bootstrap_coach_teams_sections">
    <div class="container">
      <div class="main-title">
        <?php if($bc_heading_for_teams){ ?>
          <h2 class="title"><?php echo esc_html($bc_heading_for_teams); ?></h2>
        <?php } ?>
      </div>       
      <div class="team-wrapper owl-carousel">
      <?php
          $args = array(
            'post_type' => 'tbtc_teams',
            'post_status'    => 'publish',
            'posts_per_page' => -1
            );
          $loop = new WP_Query( $args );
          global $post, $wp_query;
     
          if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post();
          $postID = get_the_ID();
          $custom = get_post_custom(get_the_ID());

          if (!empty($custom)){
              if(isset($custom['tbtc_designation'])){
                  $tbtc_designation = $custom['tbtc_designation'][0];
              }
          }        
        ?>
        <div class="team-holder">
        <?php
            $team_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
            if(isset($team_image[0])){
              $finalImage = $team_image[0];
            } else {
              $finalImage = get_template_directory_uri() . '/images/no-image.png';
            }
        ?>
          <div class="img-holder">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($finalImage); ?>"></a>
          </div>
          <div class="team-info">
            <h6 class="team-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <?php if($tbtc_designation){ ?>
            <span class="profession"><?php echo esc_html($tbtc_designation); ?></span>
            <?php } ?>
          </div>
        </div>
        <?php
            endwhile;
          } else {
            esc_html_e('No data found','bootstrap-coach');
          }
          wp_reset_postdata();
        ?>
        
      </div>
    </div>
</section>
<?php endif;