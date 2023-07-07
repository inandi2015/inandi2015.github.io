<?php
/**
 * The template for displaying search results pages.
 *
 * @package bootstrap_coach
 */

get_header(); ?>
<div class="search-page inside-page" id="primary">
  <div class="container">
    <header class="page-header">
        <h1 class="page-title">
         <?php
         /* translators: %s: search query. */
         printf( esc_html__( 'Search Results for: %s', 'bootstrap-coach' ), '<span>' . get_search_query() . '</span>' );
         ?>
       </h1>
     </header>
    <div class="row">
     <div class="col-xl-9 col-lg-8">
      <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content' ); ?>
        <?php endwhile; ?>                  
        
        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
      </div>  

      <div class="col-xl-3 col-lg-4"><?php get_sidebar(); ?></div>       

    </div>
  </div>
</div>
<?php get_footer();