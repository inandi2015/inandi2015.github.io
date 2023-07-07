<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Full Page
 */
?>
<div class="fullpage-footer">
<div id="colclose">
        	<div class="close-pnl">
				<?php echo esc_attr_e('ClOSE SIDEBAR', 'full-page');?>
            </div>
            <div class="open-pnl">
				<?php echo esc_attr_e('OPEN SIDEBAR', 'full-page');?>            
            </div>
        </div>
<div class="copyright-txt"><?php echo esc_html('Full Page');?></div>        
</div>
    </div>
  </div>
</div>   
<?php wp_footer(); ?>
</body>
</html>