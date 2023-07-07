<section class="home-section testimonial testimonial-shortcode">
  <div class="container">
    <div class="testimonial-block">
      <div class="main-title">
      <h2 class="title"><?php esc_html_e('Testimonials', 'bootstrap-coach'); ?></h2>
      </div>  
      <div class="testimonial-wrapper owl-carousel">
        <?php
        $testimonial_per_page = get_query_var('testimonial_per_page');
        $args = array(
          'post_type' => 'tbtc_testimonials',
          'post_status'    => 'publish',
          'posts_per_page' => $testimonial_per_page
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
              <span class="fa fa-quote-left" aria-hidden="true"></span>
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