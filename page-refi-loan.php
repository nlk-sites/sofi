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

<div id="page-top" class="page hfeed">
	<div class="site">
	<?php /* header image, refi/find school widget */ ?>
		<h1 class="title">Student Loan<br />Refinancing</h1>
		<h4 class="title">Trusted Alumni Community. Better Rates.<br />SoFi Student &amp; Graduate Loans.</h4>
		<?php /* the school widget here */ ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">
		<div class="site-content">
			<div class="left-col">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
			<div class="right-col">
				<?php show_refi_graph(); ?>
			</div>
		</div>
	</div>
</div>


<div class="page hfeed">
	<div class="site">
				<?php sofi_calculator(); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">
				<?php /* SoFi testimonials */ ?>
	</div>
</div>

<div class="page page-howitworks hfeed">
	<div class="site">
				<?php get_sidebar('howitworks'); ?>
	</div>
</div>

<div class="page page-community hfeed">
	<div class="site">
				<?php //get_sidebar('community'); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>