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

<div id="page-top" class="page hfeed default-page">
	<div class="site">
		<h1 class="title"><?php echo get_the_title(); ?></h1>
	</div>
</div>

<div class="page" class="page hfeed">
	<div class="site">
		<div class="site-content">

				<?php the_content(); ?>
			
		</div>
	</div>
</div>

<?php endwhile; // end of the loop. ?>

<div class="page hfeed">
	<div class="site">

<?php get_sidebar(); ?>
<?php get_footer(); ?>