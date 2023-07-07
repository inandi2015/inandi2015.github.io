<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Full Page
 */
get_header(); ?>
<div class="fullpage-maincontainer">
  <div class="farea">
    <?php get_sidebar('leftmenu');?>  
    <div id="fullpage-content">
<div class="container areadivide">
  <div class="page_content frontmanage">
       <div class="front-page-content">
       		<section class="site-main">
            <div class="blog-post">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title">
						<?php /* translators: %s: search term */ 
						printf( esc_attr__( 'Search Results for: %s', 'full-page' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); 
						  get_template_part( 'content', 'search' );  
						  endwhile; 
						  the_posts_pagination(); 
						  else : ?>
                    <?php get_template_part( 'no-results', 'search' );  
						  endif; ?>
            </div><!-- blog-post -->
        </section>
       </div>
    <?php get_sidebar();?>
  </div>
</div>
<?php get_footer(); ?>