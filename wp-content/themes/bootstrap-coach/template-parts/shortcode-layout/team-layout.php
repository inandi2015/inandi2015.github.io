<section class="home-section team">
    <div class="container">
      <div class="main-title">
        <h2 class="title"><?php esc_html_e('Teams', 'bootstrap-coach'); ?></h2>
      </div>       
      <div class="team-wrapper owl-carousel">
      <?php
      $teams_per_page = get_query_var('team_per_page');
      
          $args = array(
            'post_type' => 'tbtc_teams',
            'post_status'    => 'publish',
            'posts_per_page' => $teams_per_page
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
            <img src="<?php echo esc_url($finalImage); ?>">
          </div>
          <div class="team-info">
            <h6 class="team-title"><?php the_title(); ?></h6>
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