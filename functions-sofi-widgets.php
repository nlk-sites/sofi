<?php
/**
 * SoFi functions
 *
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */


function sofi_calculator($render = true) 
{
	if ($render) { ?>
		<div class="savings-calculator full-width">
			<div class="calc-title full-width">
				<p>See the potential savings through refinancing with SoFi.<span class="super">3</span></p>
			</div>
			<div class="calc-form full-width">
				<form>
					<div class="col4 outstanding">
						<label>Outstanding Loan Balance</label>
						<input type="text" name="outstanding" class="outstanding-balance calculator-field" placeholder="$0.00">
					</div>
					<div class="col4 interest-rate">
						<label>Current Interest Rate</label>
						<input type="text" name="interest-rate" class="interest-rate calculator-field" placeholder="%">
					</div>
					<div class="col4 term">
						<label>Remaining Repayment Term</label>
						<input type="text" name="term" class="calculator-field term" placeholder="Number of Months">
					</div>
					<div class="col4">
						<input type="button" id="calculateButton" value="Calculate" class="btn-active" />
					</div>
				</form>
			</div>
			<div class="calc-terms clr">
				<p>This is only an estimate. Your actual payment and potential savings will depend on the actual amount for which you are approved. Usage of this calculator does not guarantee...</p>
			</div>
		</div>

		<div class="calculator-output do-not-show">
			<table>
				<thead>
					<tr>
						<th></th>
						<th><b>Your Existing<br />Student Loan</b></th>
						<th>SoFi Loan with <b>5-Year Repayment Period</b></th>
						<th>SoFi Loan with <b>10-Year Repayment Period</b></th>
						<th>SoFi Loan with <b>15-Year Repayment Period</b></th>
					</tr>
				</thead>

				<tbody>
					<tr class="output-outstanding">
						<td class="category">Outstanding Loan Balance</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td class="category">Interest Rate</td>
						<td class="output-interest"></td>
						<td>5.49%<sup>1</sup></td>
						<td>6.125%<sup>1</sup></td>
						<td>6.625%<sup>1</sup></td>
					</tr>

					<tr>
						<td class="category">Repayment Periods (Months)</td>
						<td class="output-term"></td>
						<td>60</td>
						<td>120</td>
						<td>180</td>
					</tr>

					<tr class="output-monthly">
						<td class="category">Expected Monthly Payment</td>
						<td class="output-monthly-existing"></td>
						<td class="output-monthly-sofi-5 blue"></td>
						<td class="output-monthly-sofi-10 blue"></td>
						<td class="output-monthly-sofi-15 blue"></td>
					</tr>

					<tr class="output-expected-interest">
						<td class="category">Total Expected Interest Payments</td>
						<td class="output-interest-payments-existing"></td>
						<td class="output-interest-payments-sofi-5 blue"></td>
						<td class="output-interest-payments-sofi-10 blue"></td>
						<td class="output-interest-payments-sofi-15 blue"></td>
					</tr>

					<tr class="output-expected-savings">
						<td class="category">Expected Interest Savings<br />Compared to Existing</td>
						<td> - </td>
						<td id="output-savings-sofi-5" class="output-savings-sofi-5 blue"></td>
						<td id="output-savings-sofi-10" class="output-savings-sofi-10 blue"></td>
						<td id="output-savings-sofi-10" class="output-savings-sofi-15 blue brc-fix"></td>
					</tr>
				</tbody>
			</table>
			<?php /*
			<!--<a id="applyNowButton" href="https://www.sofi.com/a/Applicant/eligibilityQuestionnaire" target="_blank">Apply Now</a>-->
			<a id="share_my_results_dialog" href="#">Share My Results</a>
			<a id="visit_sofi_button" href="http://www.sofi.com" target="_blank">Visit SoFi</a>
			<br class="clear_float">
			<div id="disclaimer">
				<!-- <p>Disclaimer - SoFi Loan Refinance Calculator displays potential savings that you may be able to achieve through refinancing with SoFi. Your actual payment and potential savings will depend on the actual amount for which you are approved. Usage of this calculator does not guarantee approval of loan application. To qualify, a borrower must be a U.S. Citizen or Permanent Resident and meet underwriting requirements. For both the SoFi and Existing results, the calculator assumes zero origination fees and equal monthly payments. The calculator also assumes that funds are disbursed on the first of the month, you begin payment one month after disbursement, you make all payments on time, and you do not enter into any deferment or forbearance periods. All calculations are based on today's date going forward and do not include any previous payments on existing loans. The SoFi product used in the calculator has a 5.99% fixed rate (5.99% APR) and requires the borrower to sign up for automatic ACH payments. A 6.24% (6.24% APR) fixed rate product is also offered that does not require sign up for automatic payments. The interest rate you enter is used as a fixed rate to calculate values for the Existing results. FOR ILLUSTRATIVE PURPOSES ONLY. This calculator provides estimates intended for use only as a planning guide. Because we cannot guarantee the calculator's accuracy or applicability to your circumstance, we would encourage you to consult a qualified professional for assistance in analyzing your personal financial situation.</p> -->
				<p>Terms and Conditions Apply. SoFi loans are currently available to students and graduates of selected schools and programs. SOFI RESERVES THE RIGHT TO MODIFY OR DISCONTINUE PRODUCTS AND BENEFITS AT ANY TIME WITHOUT NOTICE. To qualify, a borrower must be a U.S. citizen or permanent resident and meet underwriting requirements. This information is current as of September 17, 2012 and is subject to change. SoFi loans are originated by SoFi Lending Corp (dba SoFi) California Finance Lender #6054612. SoFi is not affiliated with colleges and universities listed on SoFi.com. Colleges and universities do not endorse, promote or recommend SoFi loan products.</p>
				<ol>
					<li>
						5.74% APR assumes a 5-year loan with all timely monthly payments, no grace period, no deferment, no forbearance. Does not include any discounts.<br>
						6.375% APR assumes a 10-year loan with all timely monthly payments, no grace period, no deferment, no forbearance. Does not include any discounts.<br>
						6.875% assumes a 15-year loan with all timely monthly payments, no grace period, no deferment, no forbearance. Does not include any discounts.<br>
						For comparison purposes, 7.9% APR ignores the origination fees borrowers paid to take out the federal loan and assumes all timely monthly payments, no grace period, no deferment, no forbearance. Does not include any discounts.
					</li>
					<li>
						AutoPay Discount: The 0.25% interest rate reduction requires you to agree to make monthly principal and interest payments by an automatic, monthly deduction from a savings or checking account for so long as you continue to make such automatic, electronic monthly payments.  This benefit will discontinue and be lost for periods in which you do not pay by automatic deduction from a savings or checking account.
					</li>
				</ol>
			</div>
			*/ ?>
		</div>
	<?php }
}

function sofi_homepage_nav($render = true) 
{
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

function press_slider_args($id = NULL) 
{

	// for usage/array details: http://wordpress.org/plugins/special-recent-posts/installation/

	if ( $id == 1 ) {
		$args = array(
			'widget_title' => 'Recent News',
			'display_thumbnail' => 'yes',
			'widget_title_hide' => 'no',
			'widget_title_header_classes' => 'recent-news-h',
			'thumbnail_width' => 200,
			'thumbnail_height' => 80,
			'thumbnail_link' => 'no',
			'thumbnail_rotation' => 'no',
			'post_type' => 'post',
			'post_status' => 'publish',
			'post_limit' => 9,
			'post_content_type' => 'excerpt',
			'post_content_length' => 100,
			'post_content_length_mode' => 'chars',
			'post_title_length' => 100,
			'post_title_length_mode' => 'chars',
			'post_order' => 'DESC',
			'post_current_hide' => 'yes',
			'post_content_mode' => 'titleexcerpt',
			'post_date' => 'no',
			'allowed_tags' => '',
			'string_break' => 'READ MORE',
			'string_break_link'  => 'yes',
			'category_include' => '3',
			'category_title' => 'no',
			'nofollow_links' => 'no'
			);
	}
	if ( $id == 2 ) {
		$args = array(
			'widget_title' => 'Testimonials',
			'display_thumbnail' => 'yes',
			'widget_title_hide' => 'yes',
			'widget_title_header_classes' => 'testimonial-header',
			'thumbnail_width' => 130,
			'thumbnail_height' => 130,
			'thumbnail_link' => 'no',
			'thumbnail_rotation' => 'no',
			'post_type' => 'post',
			'post_status' => 'publish',
			'post_limit' => 4,
			'post_content_type' => 'content',
			'post_content_length' => 100,
			'post_content_length_mode' => 'fullcontent',
			'post_title_length' => 100,
			'post_title_length_mode' => 'chars',
			'post_order' => 'DESC',
			'post_current_hide' => 'yes',
			'post_date' => 'no',
			'allowed_tags' => '',
			'string_break' => 'READ MORE',
			'string_break_link'  => 'yes',
			'category_include' => '11',
			'category_title' => 'no',
			'nofollow_links' => 'no'
			);
	}
	return $args;
}

function show_refi_graph($render = true) 
{
	if ($render) { ?>
		<div class="theGraph refi-rates refi-with">
			<div class="refi-with"></div>
			<div class="refi-without"></div>
			<div class="refi-rates"></div>
			<div class="refi-loans"></div>
		</div>
	<?php }
}

function parse_schools_json( $asOptList = true ) 
{
	$json_file = get_site_url();
	$json_file .= '/wp-content/themes/sofiwp/json-includes/universityWebInfo2.json';
	$json_content = file_get_contents( $json_file );
	$json = json_decode( $json_content, true );
	if ( $asOptList ) 
	{
		$str = '<option value=""></option>';
		foreach ( $json as $j )
		{
			$str .= '<option value="' . $j['slug'] . '">' . $j['schoolName'] . '</option>';
		}
		return $str;
	}
}

function sofi_school_select($render = true) 
{
	if ($render) { ?>
		<div class="school-selector full-width">
				
				<div class="bg-grey w620">
					<div class="small-text fleft">Rates as<br />low as</div>
					<div class="big-text fleft">5.74%<span>APR<sup>1</sup></span></div>
					<div class="small-text fleft">Rates with<br />AutoPay<sup>2</sup></div>
					<div class="big-text fleft">5.49%<span>APR<sup>1</sup></span></div>
					<div class="sub-text clr"><b>Refinance Your Loans Today?</b> Find your school.</div>
				</div>
				<div class="bg-blue w340">
					<div class="heading">Refinance your loan from multiple schools or programs</div>
					<div class="select">
						<form>
							<select name="select-school" id="combobox" class="select-school">
								<?php echo parse_schools_json(); ?>
							</select>
						</form>
					</div>
					<div class="suggestion"><small>Don't see your school? <a href="#">Suggest a Program</a></small></div>
				</div>
			
				<div class="school-selector-contents do-not-show">
				</div>
		</div>
	<?php }
}

