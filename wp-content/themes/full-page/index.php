<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Full Page
 */
get_header(); 
?>
<div class="fullpage-maincontainer">
  <div class="farea">
    <?php get_sidebar('leftmenu');?>  
    <div id="fullpage-content">
<div class="container areadivide">
  <div class="page_content frontmanage">
       <div class="front-page-content">
       		<section class="site-main">
        	 <div class="blog-post">
					<?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                        // Previous/next post navigation.
                        the_posts_pagination();
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results');
                    endif;
                    ?>
                    </div><!-- blog-post -->
             </section>
       </div>
       <?php get_sidebar();?>
  </div>
</div>
<?php get_footer(); ?>