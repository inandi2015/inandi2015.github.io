<?php
/**
 * The template for displaying testimonial archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootstrap_coach
 */

get_header(); ?>
<?php
global $wp_query;
$max_pages = $wp_query->max_num_pages;
?>



<div class="post-list inside-page" id="primary">
  <div class="container">
    <?php if( have_posts() ) { ?>
        <h1 class="category-title"><?php esc_html_e( 'Testimonials', 'bootstrap-coach' ); ?></h1>
      <?php } ?>
    <div class="row">

   <div class="row">

    <div class="col-xl-9 col-lg-8">
      <div class="testimonial">
          <?php if ( have_posts() ) : ?>
            <?php 
              while ( have_posts() ) : the_post();
              $custom = get_post_custom(get_the_ID());
              if (!empty($custom)){
                if(isset($custom['tbtc_designation'])){
                    $tbtc_designation = $custom['tbtc_designation'][0];
                }
              } 
            ?>
              <div class="testimonial-block">
                <div class="content-holder">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="img-holder">
                    <?php the_post_thumbnail( 'full' ); ?>        
                  </div>
                  <?php endif; ?>
                  <div class="content-info">
                    <h6 class="testimonial-title"><?php the_title(); ?></h6>
                    <?php if($tbtc_designation){ ?>
                      <span class="organization"><?php echo esc_html($tbtc_designation); ?></span>
                    <?php } ?>
                  </div>
                </div>
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>                  
            <?php the_posts_pagination(); ?>
          <?php endif; ?>
      </div>
    </div>  

    <div class="col-xl-3 col-lg-4"><?php get_sidebar(); ?></div>       

  </div>
</div>
</div>
<?php get_footer(); ?>
