<?php
/**
 * Template part for displaying posts.
 *
 * @package bootstrap_coach
 */
?>

<?php $post_details = array( 'date', 'categories', 'tags' ) ; ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="news-snippet">        
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
          <?php the_post_thumbnail( 'full' ); ?>
        </a>            
      <?php endif; ?>         
    <div class="summary">
    <?php if( in_array( 'categories', $post_details ) ) { ?>
      <?php $categories = get_the_category();
        if( ! empty( $categories ) ) :
          foreach ( $categories as $category ) { ?>
             <h6 class="category"><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a></h6>
          <?php }
        endif; ?>
      <?php } ?>       
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
