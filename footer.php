<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

<footer id="colophon" role="contentinfo">
	<div class="footer-contact full-width">
		<div class="page-width">
			<h3 id="footer-need-assistance"><span>Need assistance?</span> Talk to a SoFi advisor today!</h3>
			<h3 id="footer-phone">Call: 866.357.6342</h3>
		</div>
	</div>
	<div class="footer-social full-width">
		<div class="page-width">
			<div class="col4 footer-icon-twitter">
				<div class="click-me-twitter" url="#">
					<a href="#" target="_blank" title="SoFi - Follow Us on Twitter" alt="SoFi - Follow Us on Twitter" class="click-me-a"></a>
				</div>
			</div>
			<div class="col4 footer-icon-facebook">
				<div class="click-me-facebook" url="https://www.facebook.com/SoFiLoan">
					<a href="https://www.facebook.com/SoFiLoan" target="_blank" title="SoFi - Like Us on Facebook" alt="SoFi - Like Us on Facebook" class="click-me-a"></a>
				</div>
			</div>
		</div>
	</div>
	<div id="were-hiring" class="full-width">
		<div class="page-width">
			<div id="were-hiring-text"><a href="https://sofi.resumetracker.com/public" target="_blank"><p><span class="caps">We're Hiring:</span> View Current Opportunities</p></a></div>
			<div id="receive-updates">
				<label for="email"><span class="caps">Receive Updates</span></label>
				<input type="text" name="email" class="input email txt req" placeholder="Enter your Email" />
				<input type="submit" value=" " class="submit inline-arrow" />
			</div>
			<div id="footer-social-small-icons">
			</div>
		</div>
	</div>
	<div class="footer-sitemap full-width">
		<div class="page-width">
			<div class="col4 firstcol">
				<ul>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'loan-refinance' ) ); ?>">Refinance Loan</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'schools' ) ); ?>">In-School Loan</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'invest' ) ); ?>">Invest</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'community' ) ); ?>">Community</a></li>
				</ul>
			</div>
			<div class="col4">
				<ul>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'how-it-works' ) ); ?>">About SoFi</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'category/blog' ) ); ?>">Company Blog</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'category/blog/mike' ) ); ?>">Mike's Blog</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'faq' ) ); ?>">FAQ</a></li>
				</ul>
			</div>
			<div class="col4">
				<ul>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'refer-a-friend' ) ); ?>">Referral Program</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'financial-aid-office' ) ); ?>">Financial Aid Office</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'eligible-schools' ) ); ?>">Eligible Schools</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'category/blog/mike' ) ); ?>">Events</a></li>
				</ul>
			</div>
			<div class="col4 lastcol">
				<ul>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'management-team' ) ); ?>">Management Team</a></li>
					<li><a href="https://sofi.resumetracker.com/public">Careers</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'press' ) ); ?>">Press</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-terms page-width">
		<p>SoFi is not affiliated with colleges and universities listed on SoFi.com. Colleges and universities do not endorse, promote or recommend SoFi loan products.</p>
		<p class="footer-title">Borrowing</p>
		<p>Terms and Conditions Apply. SoFi loans are currently available to students and graduates of selected schools and programs. SOFI RESERVES THE RIGHT TO MODIFY OR DISCONTINUE PRODUCTS AND BENEFITS AT ANY TIME WITHOUT NOTICE. To qualify, a borrower must be a U.S. citizen or permanent resident and meet underwriting requirements. This information is current as of September 17, 2012 and is subject to change. SoFi loans are originated by SoFi Lending Corp (dba SoFi) California Finance Lender #6054612.</p>
		<p class="footer-title">Investing</p>
		<p>The information contained herein does not constitute an offer to sell securities or a solicitation of an offer to buy securities. Buying or selling the SoFi Private Investment Funds (the “Funds”) can only be made by private placement memorandum and related subscription documents, which will be provided to accredited investors on a confidential basis at their request for their consideration in connection with such offering. Investment in the Funds will involve significant risks, including loss of principal. The Funds will have limited liquidity options, as there is a limited secondary market for the Funds. None of the information contained in this release is a recommendation for investment in any securities. SoFi is not affiliated with or officially endorsed by listed universities.</p>
	</div>
	<div class="site-info page-width">
		<?php //do_action( 'sofi_credits' ); ?>
		&copy;&nbsp;<?php echo date( 'Y', time() ); ?>, Social Finance, Inc.
		&nbsp;|&nbsp;<a href="<?php echo get_permalink( 26 ); ?>" title="<?php echo get_the_title( 26 ); ?>"><?php echo get_the_title( 26 ); ?></a>
		&nbsp;|&nbsp;<a href="<?php echo get_permalink( 28 ); ?>" title="<?php echo get_the_title( 28 ); ?>"><?php echo get_the_title( 28 ); ?></a>
		&nbsp;|&nbsp;<a href="<?php echo get_permalink( 30 ); ?>" title="<?php echo get_the_title( 30 ); ?>"><?php echo get_the_title( 30 ); ?></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>