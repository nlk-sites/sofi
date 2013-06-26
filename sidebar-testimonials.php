<?php
/**
 * The sidebar containing the testimonials.
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */


$args = array(
	'posts_per_page'  => 4,
	'offset'          => 0,
	'category'        => '11',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '',
	'post_parent'     => '',
	'post_status'     => 'publish',
	'suppress_filters' => true
	);

$posts_array = get_posts( $args );


?>

<div class="testimonials-details">
	
	<div class="testimonials-people">
		<?php 
		foreach( $posts_array as $post ) : setup_postdata($post); ?>
			<div id="testimonial-person-<?php echo $post->ID; ?>" class="testimonial-person" rel="<?php echo $post->ID; ?>">
				<div class="testimonial-img">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( array(120,120), array('class' => 'desaturate') ); } ?>
				</div>
				<div class="testimonial-info">
					<p class="test-type"><?php echo get_post_meta( $post->ID, 'Testimonial-Borrower_Investor', true ); ?></p>
					<p class="test-name"><?php the_title(); ?></p>
					<p class="test-school"><?php echo get_post_meta( $post->ID, 'Testimonial-School', true ); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="testimonials">
		<?php foreach( $posts_array as $post ) : setup_postdata($post); ?>
			<div id="testimonial-<?php echo $post->ID; ?>" class="testimonial do-not-show" rel="<?php echo $post->ID; ?>"><?php the_content(); ?></div>
		<?php endforeach; ?>
	</div>

</div>