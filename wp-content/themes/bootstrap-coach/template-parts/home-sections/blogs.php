<?php 
    if( get_theme_mod( 'blog_post_display_option', true ) ) :
    $blog_section_title = get_theme_mod( 'blog_post_section_title', '' );
    $post_details = array( 'date', 'categories', 'tags' ) ;

    $blog_paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    $blog_cat = get_theme_mod( 'blog_post_category' ) ;
        $args = array(
            'post_type' => 'post',
            'category_name'       =>  $blog_cat ,
            'posts_per_page'    =>  '3',
            'ignore_sticky_posts' => 1 ,
            'paged'     => $blog_paged
        );
        $query = new WP_Query( $args );
        $max_pages = $query->max_num_pages;
        if ( $query->have_posts() ) {
?>
<section class="home-section blogs" id="bootstrap_coach_blog_post_section">
    <div class="container">
      <div class="main-title">
      <?php if(! empty($blog_section_title)){ ?>
        <h2 class="title"><?php echo esc_html($blog_section_title); ?></h2>
      <?php } ?>
      </div>
     <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-4">
        <div class="news-snippet">        
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
          <?php the_post_thumbnail( 'full' ); ?>
        </a>            
      <?php endif; ?>         
    <div class="summary">
         
      <h5 class="news-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
          <?php if( is_array( $post_details ) && ! empty( $post_details ) ) : ?>
            <div class="info">
              <ul class="list-inline">

                <?php if( in_array( 'date', $post_details ) ) { ?>
                  <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                  <li><span class="fa fa-clock-o"></span> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a></li>
                <?php } ?>

                <?php if( in_array( 'tags', $post_details ) ) { ?>
                  <?php $tags = get_the_tags();
                    if( ! empty( $tags ) ) :
                      foreach ( $tags as $value ) { ?>
                        <li><a href="<?php echo esc_url( get_category_link( $value->term_id ) ); ?>"><?php echo esc_html( $value->name ); ?></a></li>
                      <?php }
                    endif; ?>
                <?php } ?>
                

                <?php if( in_array( 'number_of_comments', $post_details ) ) { ?>
                  <li><span class="fa fa-comment-o"></span> <?php comments_popup_link( __( 'zero comment', 'bootstrap-coach' ), __( 'one comment', 'bootstrap-coach' ), __( '% comments', 'bootstrap-coach' ) ); ?></li>
                <?php } ?>
                
              </ul>
            </div>
          <?php endif; ?>        
        <?php the_excerpt(); ?>
        
        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="" class="btn-link"><?php esc_html_e('Read More','bootstrap-coach'); ?> </a>

    </div>
</div>
        </div>
        <?php endwhile; ?>                                       
	    <?php wp_reset_postdata(); ?>
    </div>
    </div>
  </section>
  <?php } endif; 