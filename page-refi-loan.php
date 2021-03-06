<?php
/**
 * Template Name: Refinance Loan
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */

get_header(); 

?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<div id="page-top" class="page wimg hfeed">
		<?php the_post_thumbnail('full'); ?>
		
			<div class="header wimg">
				<h1 class="title wimg"><?php echo get_the_title(); ?></h1>
				<h4 class="title wimg"><?php echo get_post_meta( get_the_ID(), 'sub-title', true ); ?></h4>
			</div>
		</div>
	<?php } else { ?>
		<div id="page-top" class="page hfeed default-page">
			<div class="header">
				<h1 class="title"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	<?php } ?>

<div class="school-select-widget hfeed">
	<div class="site">
		<?php sofi_school_select(); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">

		<div class="site-content">

				<?php the_content(); ?>
				
		</div>
			
			<?php get_sidebar(); ?>

	</div>
</div>

<?php endwhile; // end of the loop. ?>

<div class="page hfeed">
	<div class="site">
				<?php sofi_calculator(); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">
				<?php get_sidebar('testimonials'); ?>
	</div>
</div>

<div class="page page-howitworks hfeed">
	<div class="site">
				<?php get_sidebar('howitworks'); ?>
	</div>
</div>

<div class="page page-community hfeed">
	<div class="site">
				<?php get_sidebar('community'); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">

	
	<?php get_footer(); ?>