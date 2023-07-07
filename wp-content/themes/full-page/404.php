<?php
/**
 * The template for displaying 404 pages (Not Found).
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
       		<section class="site-main" id="sitemain">
            <header class="page-header">
                <h1 class="entry-title"><?php
esc_html_e('404 Not Found', 'full-page'); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php
esc_html_e('Looks like you have taken a wrong turn.....Dont worry... it happens to the best of us.', 'full-page'); ?></p>
                <?php
get_search_form(); ?>
            </div><!-- .page-content -->
        </section>
       </div>
    <?php get_sidebar();?>
  </div>
</div>
<?php
get_footer(); ?>