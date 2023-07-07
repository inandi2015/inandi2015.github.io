<?php
/**
Template Name: Full Wide
* @package Full Page
*/
get_header(); ?>
<div class="fullpage-maincontainer">
  <div class="farea">
    <?php get_sidebar('leftmenu');?>  
    <div id="fullpage-content">
<div class="container areadivide">
  <div class="page_content frontmanage">
       <div class="fullwide-page-content">
       		<section id="sitefull">               
            		<?php if( have_posts() ) :
							while( have_posts() ) : the_post(); ?>
                            	<h1 class="entry-title"><?php the_title(); ?></h1>
                                <div class="entry-content">
<?php
                                        the_content();
                                        wp_link_pages( array(
                                            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'full-page' ) . '</span>',
                                            'after'       => '</div>',
                                            'link_before' => '<span>',
                                            'link_after'  => '</span>',
                                            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'full-page' ) . ' </span>%',
                                            'separator'   => '<span class="screen-reader-text">, </span>',
                                        ) );
												//If comments are open or we have at least one comment, load up the comment template
												if ( comments_open() || '0' != get_comments_number() )
													comments_template();
												?>
                                </div><!-- entry-content -->
                      		<?php endwhile; endif; ?>
            </section>
       </div>
  </div>
</div>
<?php get_footer(); ?>