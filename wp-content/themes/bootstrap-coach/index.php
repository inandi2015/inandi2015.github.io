<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootstrap_coach
 */

get_header();
?>

<?php
        global $wp_query;

        $max_pages = $wp_query->max_num_pages;
    ?>
<?php if ( have_posts() ) { ?>

    <div class="home-archive inside-page post-list" id="primary">
        <div class="container">        
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                      <!-- <h2><?php single_post_title() ?></h2> -->
                  <div class="grid-view blog-list-block">                                         
                    
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content' );
                            ?>
                        <?php endwhile; ?>      
                  </div>
                  <?php
                    if (  $wp_query->max_num_pages > 1 ) {
						the_posts_pagination();
                    }
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
                <div class="col-xl-3 col-lg-4"><?php get_sidebar(); ?></div>
            </div>
        </div>
    </div>
<?php } ?>    

<?php get_footer();
