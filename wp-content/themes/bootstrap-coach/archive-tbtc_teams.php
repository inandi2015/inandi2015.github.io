<?php
/**
 * The template for displaying teams archive pages.
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
      <h1 class="category-title"><?php esc_html_e( 'Teams', 'bootstrap-coach' ); ?></h1>
    <?php } ?>

   <div class="row">

    <div class="col-xl-9 col-lg-8">
      <div class="team"> 
        <div class="team-wrapper">
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
          <?php endwhile; ?>                  
          <?php the_posts_pagination(); ?>
        <?php endif; ?>

        </div>
      </div>
    </div>  

    <div class="col-xl-3 col-lg-4"><?php get_sidebar(); ?></div>       

  </div>
</div>
</div>
<?php get_footer(); ?>
