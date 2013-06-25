<?php
/**
 * SoFi functions
 *
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */


function sofi_calculator($render = true) {
	if ($render) { ?>
		<div class="savings-calculator full-width">
			<div class="calc-title full-width">
				<p>See the potential savings through refinancing with SoFi.<span class="super">3</span></p>
			</div>
			<div class="calc-form full-width">
				<form method="" action="#">
					<div class="col4">
						<label>Outstanding Loan Balance</label>
						<input type="text" placeholder="$0.00" />
					</div>
					<div class="col4">
						<label>Current Interest Rate</label>
						<input type="text" placeholder="%" />
					</div>
					<div class="col4">
						<label>Remaining Repayment Term</label>
						<input type="text" placeholder="Number of Months" />
					</div>
					<div class="col4">
						<input type="submit" value="Calculate" class="btn-active" />
					</div>
				</form>
			</div>
			<div class="calc-terms clr">
				<p>This is only an estimate. Your actual payment and potential savings will depend on the actual amount for which you are approved. Usage of this calculator does not guarantee...</p>
			</div>
		</div>
	<?php }
}

function sofi_homepage_nav($render = true) {
	if ($render) { ?>
		<div id="home-wide-navbar">
			<ul>
				<li class="borrower"><a href="#borrow" rel="borrower-details" offsetat="168">Simplify your student loans</a></li>
				<li class="investor"><a href="#invest" rel="invest-details" offsetat="168">Invest in student success</a></li>
				<li class="howitworks"><a href="#howworks" rel="howitworks-details" offsetat="90">How it works</a></li>
			</ul>
		</div>
	<?php }

}

function press_slider_args() {
	$args = array(
		'widget_title' => 'Recent News',
		'display_thumbnail' => 'yes',
		'widget_title_hide' => 'no',
		// Enter a space separated list of additional css classes for this widget title header.
		'widget_title_header_classes' => 'recent-news-h',
		'thumbnail_width' => 200,
		'thumbnail_height' => 80,
		'thumbnail_link' => 'no',
		'thumbnail_rotation' => 'no',
		'post_type' => 'post',
		'post_status' => 'publish',
		'post_limit' => 9,
		'post_content_type' => 'excerpt',
		// Set displayed post content length (default: 100)
		'post_content_length' => 100,
		// Set displayed post content length mode (default: 'chars')
		'post_content_length_mode' => 'chars',
		// Set displayed post title length (default 100)
		'post_title_length' => 100,
		// Set displayed post title length mode (default: 'chars')
		'post_title_length_mode' => 'chars',
		// Set post order (default: 'DESC')
		'post_order' => 'DESC',
		// Hide current post from visualization when in single post view? (default: 'yes')
		'post_current_hide' => 'yes',
		// Set layout content mode (default: 'titleexcerpt')
		'post_content_mode' => 'titleexcerpt',
		// Display post date? (default: 'yes')
		'post_date' => 'no',
		// Set allowed tags to display in the excerpt visualization.
		'allowed_tags' => '',
		// Set string break text (default: [...])
		'string_break' => 'READ MORE',
		// Link (image)string break to post?
		'string_break_link'  => 'yes',
		// Filter posts by including categories IDs. (default: none)
		'category_include' => '3',
		// When filtering by caqtegories, switch the widget title to a linked category title (default: 'no')
		'category_title' => 'no',
		// Add the 'no-follow' attribute to all widget links.
		'nofollow_links' => 'no'
		);
	return $args;
}

function show_refi_graph($render = true) {
	if ($render) { ?>
		<div class="theGraph refi-rates refi-with">
			<div class="refi-with"></div>
			<div class="refi-without"></div>
			<div class="refi-rates"></div>
			<div class="refi-loans"></div>
		</div>
	<?php }
}


function sofi_school_select($render = true) {
	if ($render) { ?>
		<div class="school-selector full-width">
			<div class="full-width">
				
				<div class="left-col">
				</div>

				<div class="right-col">
				</div>
			
			</div>
		</div>
	<?php }
}