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
    <?php 
	if ( 'posts' == get_option( 'show_on_front' ) ) {
    ?>
<div class="container areadivide">
  <div class="page_content frontmanage">
      <div class="blog-post front-page-content">
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
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'full-page' ),
							'next_text' => esc_html__( 'Next', 'full-page' ),
						) );
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    
                    endif;
                    ?>
      </div>
      <!-- blog-post --> 
    <?php get_sidebar();?>
  </div>
</div>
<?php
} else {
    ?>
<?php 
$hideslide = get_theme_mod('hide_slides', 1);
if( $hideslide == '1') {
?>    
<div class="container areadivide">
  <div class="page_content frontmanage">
      <div class="blog-post front-page-content">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							 ?> 
                            <header class="entry-header">           
            				<h1><?php the_title(); ?></h1>
                    		</header>
                            <?php the_content();  
							wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'full-page' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'full-page' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							?>
                            <div class="clear"></div>
                            <?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
							comments_template();
							endif;
					
                        	endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'full-page' ),
							'next_text' => esc_html__( 'Next', 'full-page' ),
						) );
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    
                    endif;
                    ?>
      </div>
    <?php get_sidebar();?>
  </div>
</div>     
<?php } else {?>
<?php
$hidehmcontent = get_theme_mod('hide_homecontent', 1);
?>
<?php if($hidehmcontent ==''){?>
<div class="laycontentover">
<div class="page_content frontmanage">
      <div class="blog-post front-page-content">
        <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							 ?> 
                            <header class="entry-header">           
            				<h1><?php the_title(); ?></h1>
                    		</header>
                            <?php the_content();  
							wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'full-page' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'full-page' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							?>
                            <div class="clear"></div>
                            <?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
							comments_template();
							endif;
					
                        	endwhile;
                        // Previous/next post navigation.
						the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'full-page' ),
							'next_text' => esc_html__( 'Next', 'full-page' ),
						) );
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    
                    endif;
                    ?>
      </div> 
  </div>
</div>  
<?php } ?>
<?php wp_reset_postdata(); ?>
<?php
while ( have_posts() ) : the_post();
?>
<div class="contentovl">
<?php the_content(); ?>
</div>
<?php endwhile;?> 
<div class="contentslidedesc">
<div class="cslideinner">
<!--Thumbnail Navigation-->
<div id="slidecaption"></div>
<!--Arrow Navigation-->
<a id="prevslide" class="load-item"></a>
<a id="nextslide" class="load-item"></a>
<!--Time Bar-->
</div>
</div> 
<?php } ?>      
<?php
}
?>     
<?php get_footer(); ?>