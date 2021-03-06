<?php
/**
 * Template Name: Home Page
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

<div id="page-top" class="page hfeed">
	<div class="site">
	<?php echo sofi_homepage_nav(); ?>
	</div>
</div>

<div class="page page-borrow hfeed">
	<div class="site">
		<?php 
			get_sidebar('borrower');
			echo sofi_calculator();
		?>
	</div>
</div>


<div class="page page-invest hfeed">
	<div class="site">
		<?php get_sidebar('invest'); ?>
	</div>
</div>

<div class="page page-howitworks hfeed">
	<div class="site">
		<?php get_sidebar('howitworks'); ?>
	</div>
</div>

<div class="page-testimonials hfeed">
	<div class="site">
		<?php get_sidebar('testimonials'); ?>
	</div>
</div>


<div class="page-newsfeed hfeed">
	<div class="site">
		<?php special_recent_posts( press_slider_args(1) ); ?>
	</div>
</div>

<div class="hfeed">
	<div class="site">

	<?php get_footer(); ?>