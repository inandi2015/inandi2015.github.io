<?php
/**
 * Expert Section
 * 
 * @package bootstrap_coach
 */

if( get_theme_mod( 'bc_testimonial_display_option', true ) ) :
  $bc_heading_for_testimonial     = get_theme_mod( 'bc_heading_for_testimonial' );
  $bc_image_for_testimonial       = get_theme_mod( 'bc_image_for_testimonial' );
  ?> 
  <section class="home-section testimonial" id="bootstrap_coach_testimonial_sections" >
    <div class="container">
      <div class="testimonial-block">
        <?php if( $bc_heading_for_testimonial ){ ?>
          <div class="main-title">
            <?php if($bc_heading_for_testimonial){ ?>
              <h2 class="title"><?php echo esc_html($bc_heading_for_testimonial); ?></h2>
            <?php } ?>
          </div>       
        <?php } ?>  
        <div class="testimonial-wrapper owl-carousel">
          <?php
          $args = array(
            'post_type' => 'tbtc_testimonials',
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
              <div class="testimonial-holder">
                <span class="fa fa-quote-left"></span>
                <div class="content-holder">
                  <?php
                  if (has_post_thumbnail()) {
                    $testimonial_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                    ?>
                    <div class="img-holder">
                      <img src="<?php echo esc_url($testimonial_image[0]); ?>">
                    </div>
                  <?php } ?>
                  <div class="content-info">
                    <h6 class="testimonial-title"><?php the_title(); ?></h6>
                    <?php if($tbtc_designation){ ?>
                      <span class="organization"><?php echo esc_html($tbtc_designation); ?></span>
                    <?php } ?>
                  </div>
                </div>
                <?php the_content(); ?>
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
    </div>
  </section>
  <?php endif; 