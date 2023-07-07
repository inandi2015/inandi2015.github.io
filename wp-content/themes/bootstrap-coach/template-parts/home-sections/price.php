<?php
/**
 * Price Table Section
 * 
 * @package bootstrap_coach
 */

if( get_theme_mod( 'bc_tickets_display_option', true ) ) :
  $bc_tickets_heading       = get_theme_mod( 'bc_tickets_heading' );
?> 
<section class="home-section pricing" id="bootstrap_coach_pricing_table">
    <div class="container">
      <?php if( $bc_tickets_heading ){ ?>
        <div class="main-title">
            <?php if($bc_tickets_heading){ ?>
                <h2 class="title"><?php echo esc_html($bc_tickets_heading); ?></h2>
            <?php } ?>
          </div>   
      <?php } ?>
        <div class="pricing-wrapper">
        <div class="row">
        <?php
          $args = array(
            'post_type' => 'tbtc_price',
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
              if(isset($custom['tbtc_actual_price'])){
                  $tbtc_actual_price = $custom['tbtc_actual_price'][0];
              }
              if(isset($custom['tbtc_cta_button'])){
                  $tbtc_cta_button = $custom['tbtc_cta_button'][0];
              }
              if(isset($custom['tbtc_cta_link'])){
                  $tbtc_cta_link = $custom['tbtc_cta_link'][0];
              }
          }        
            ?>
          <div class="col-lg-4 col-md-6">
            <div class="pricing-holder">
              <div class="title-price">
                <h4 class="pricing-title"><?php the_title(); ?></h4>
                <?php if($tbtc_actual_price){ ?>
                  <span class="price"><?php echo esc_html($tbtc_actual_price); ?></span>
                <?php } ?>
              </div>
              <?php the_content(); ?>
              <?php  
              if( $tbtc_cta_button && $tbtc_cta_link )
                echo '<a href="' . esc_url( $tbtc_cta_link) . '" class="btn btn-primary">' . esc_html( $tbtc_cta_button ) . '</a>';
             ?>
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
    </div>
</section>

<?php endif;