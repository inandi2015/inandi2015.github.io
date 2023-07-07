<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
            <header class="page-header">
				<h1 class="entry-title"><?php the_archive_title(); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() ); 
						endwhile; 
					?>
                </div>
                <?php the_posts_pagination(); 
				else : 
				get_template_part( 'no-results');  
				endif; 
				?>
       </section>
       </div>
    <?php get_sidebar();?>
  </div>
</div>
<?php get_footer(); ?>