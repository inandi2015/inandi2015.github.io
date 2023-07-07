<?php
/**
 * The Template for displaying all single posts.
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
                <?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'single' );
					full_page_content_nav( 'nav-below' );
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    endwhile; // end of the loop. ?>          
         </section>
       </div>
    <?php get_sidebar();?>
  </div>
</div>	
<?php get_footer(); ?>