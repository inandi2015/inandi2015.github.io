<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                   <?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				  ?>
                </header><!-- .page-header -->
				<div class="blog-post">
					<?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() ); 
						endwhile;
					?>
                </div>
                <?php  
				// Previous/next post navigation.
				the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'full-page' ),
							'next_text' => esc_html__( 'Next', 'full-page' ),
							'screen_reader_text' => esc_html__( 'Posts navigation', 'full-page' )
				) );
			    else : 
				get_template_part( 'no-results'); 
				endif; ?>
        </section>
       </div>
    <?php get_sidebar();?>
  </div>
</div>
<?php get_footer(); ?>