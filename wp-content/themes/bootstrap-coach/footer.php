<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootstrap_coach
 */
?>
<footer class="footer">
    <div class="container">
      <div class="footer-widget-holder">
      <?php 
for ( $i = 1 ;  $i < 5 ;  $i++ ) {
    ?>
          <?php 
    dynamic_sidebar( 'footer-' . $i . '' );
    ?>
        <?php 
}
?>  
      </div>
      <div class="copyright">
      <?php 
esc_html_e( "Powered by", 'bootstrap-coach' );
?> <a href="<?php 
echo  esc_url( __( 'https://wordpress.org', 'bootstrap-coach' ) ) ;
?>"><?php 
esc_html_e( "WordPress", 'bootstrap-coach' );
?></a> | <?php 
esc_html_e( 'Theme by', 'bootstrap-coach' );
?> <a href="<?php 
echo  esc_url( __( 'https://thebootstrapthemes.com/', 'bootstrap-coach' ) ) ;
?>"><?php 
esc_html_e( 'TheBootstrapThemes', 'bootstrap-coach' );
?></a>
      <?php 
?>
      </div>
    </div>
  </footer>
  <?php 
wp_footer();
?>
  </body>
</html>
