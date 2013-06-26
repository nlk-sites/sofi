<?php
/**
 * Template Name: Invest
 *
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<div id="page-top" class="page wimg hfeed">
		<?php the_post_thumbnail('full'); ?>
		
			<div class="header wimg">
				<h1 class="title wimg"><?php echo get_the_title(); ?></h1>
				<h4 class="title wimg"><?php echo get_post_meta( get_the_ID(), 'sub-title', true ); ?></h4>
				<?php /* the school widget here */ ?>
			</div>
		</div>
	<?php } else { ?>
		<div id="page-top" class="page hfeed default-page">
			<div class="header">
				<h1 class="title"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	<?php } ?>

<?php endwhile; // end of the loop. ?>


<div class="page-featured hfeed">
	<div class="site">
		<?php //get_sidebar('featured'); ?>
	</div>
</div>

<div class="page-invest-banner hfeed">
	<div class="site">
		<div>
			<h3 class="podkova">High-quality borrowers, transparency, community, and rigorous<br />
				underwriting standards help minimize default rates and<br />
				boost potential returns.</h3>
		</div>
		<img src="/wp-content/themes/sofiwp/images/invest-real-impact-banner.jpg" alt="SoFi - Real Returns" />
		<?php //get_sidebar('invest'); ?>
	</div>
</div>


<div class="page-testimonials hfeed">
	<div class="site">
		<?php get_sidebar('testimonials'); ?>
	</div>
</div>

<div class="page-testimonials hfeed">
	<div class="site">
		<?php //get_sidebar('faq'); ?>
	</div>
</div>

<div class="page hfeed">
	<div class="site">

<?php get_footer(); ?>