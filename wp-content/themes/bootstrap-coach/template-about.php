<?php
/**
 * Template Name: About Page
 * 
 * @package bootstrap_coach
 */

get_header(); ?>
<div class="inside-page" id="primary">
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12">
            <section class="page-section">					
                        <div class="detail-content">            
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'template-parts/content', 'page' ); ?>   
                            <?php endwhile; // End of the loop. ?> 
                            <?php comments_template(); ?>         
                        </div> <!-- /.end of detail-content -->	
            </section><!-- /.end of section -->
            
	    </div>
	
	</div>
</div>
</div>
<?php get_footer();