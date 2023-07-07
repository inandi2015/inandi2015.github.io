<?php
 // Template Name: Fullwidth Page
?>
<?php get_header(); ?>

<div class="fullwidth-block" id="primary">
	<div class="container">
		<div class="fullwidth-holder">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	</div>
</div>

<?php get_footer();