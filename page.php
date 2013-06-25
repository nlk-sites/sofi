<?php
/**
 * The template for displaying all pages.
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

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<div id="page-top" class="page hfeed">
		<?php the_post_thumbnail('full'); ?>
		
			<div class="site">
				<h1 class="title wimg"><?php echo get_the_title(); ?></h1>
				<h4 class="title wimg"><?php echo get_post_meta( get_the_ID(), 'sub-title', true ); ?></h4>
				<?php /* the school widget here */ ?>
			</div>
		</div>
	<?php } else { ?>
		<div id="page-top" class="page hfeed default-page">
			<div class="site">
				<h1 class="title"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	<?php } ?>

<div class="page" class="page hfeed">
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

<?php get_footer(); ?>