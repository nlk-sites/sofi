/**
 * sofi-custom-js.js
 *
 * Custom javascript for sofi theme.
 */

jQuery(document).ready(function($) {

	// menu hover border fixes
	$("li.top-li:not(:has(ul.sub-menu))").addClass('hover-no-sub');

	$('.sub-menu li').hover(
		function() {
			$(this).parents('li.top-li').addClass('hovered-top-menu');
		}, function() {
			$(this).parents('li.top-li').removeClass('hovered-top-menu');
		}
	);
	$('.sub-menu li').hover(
		function() {
			$(this).parents('li.top-li-grn').addClass('hovered-top-menu-green');
		}, function() {
			$(this).parents('li.top-li-grn').removeClass('hovered-top-menu-green');
		}
	);

	

	//Hero set-up
	


	// floating nav bar
	if ( $('#home-wide-navbar').length > 0 ) {
		$(window).scroll( function(){
			var Hi = $('.rev_slider_wrapper').height() - 10;
			var Borrow = $('.borrower-details').offset();
			var Invest = $('.invest-details').offset();
			var Howworks = $('.howitworks-details').offset();
			var Foot = $('footer').offset();

			var Pos = $(document).scrollTop();
			var Off = Pos + 170;
			var Jump = '#home-wide-navbar li';
			
			if ( Pos > Hi ) {
				$('#home-wide-navbar').addClass('fixedIt');
			} 
			else {
				$('#home-wide-navbar').removeClass('fixedIt');
			}
			if ( Off > Borrow.top && Off < Invest.top ) {
				$( Jump + '.borrower').addClass('active-nav');
				$( Jump + '.investor').removeClass('active-nav');
				$( Jump + '.howitworks').removeClass('active-nav');
			}
			else if ( Off > Invest.top && Off < Howworks.top ) {
				$( Jump + '.investor').addClass('active-nav');
				$( Jump + '.borrower').removeClass('active-nav');
				$( Jump + '.howitworks').removeClass('active-nav');
			}
			else if ( Off > Howworks.top && Off < Foot.top ) {
				$( Jump + '.howitworks').addClass('active-nav');
				$( Jump + '.investor').removeClass('active-nav');
				$( Jump + '.borrower').removeClass('active-nav');
			}
			else {
				$( Jump + '.borrower').removeClass('active-nav');
				$( Jump + '.investor').removeClass('active-nav');
				$( Jump + '.howitworks').removeClass('active-nav');
			}
		});

		$("#home-wide-navbar li a").click(function() {
			var Rel = $(this).prop('rel');
			var OffAt = $('.' + Rel).offset().top - $(this).attr('offsetat');
			$('html, body').animate({"scrollTop": OffAt}, 500);
		});
	}
	


	// Refi Graph tool widget thing
	$('div.refi-with').mouseover(function(){
		$(this).parent().addClass('refi-with').removeClass('refi-without');
	});
	$('div.refi-without').mouseover(function(){
		$(this).parent().addClass('refi-without').removeClass('refi-with');
	});
	$('div.refi-rates').click(function(){
		$(this).parent().addClass('refi-rates').removeClass('refi-loans');
	});
	$('div.refi-loans').click(function(){
		$(this).parent().addClass('refi-loans').removeClass('refi-rates');
	});


	// Recent News widget
	$('.recent-news-h').wrap('<div class="recent-news-h-line"><div class="recent-news-h-block"></div></div>');
	$('.page-newsfeed .srp-widget-container').addClass('first-third').wrap('<div class="srp-widget-wrapper" />');
	$('.page-newsfeed .srp-widget-wrapper').before('<div id="srp-left" class="srp-widget-nav arrow-left"></div>').after('<div id="srp-right" class="srp-widget-nav arrow-right"></div>');
	$( "#srp-right" ).click(function() {
		var len = $('.srp-widget-singlepost').length - 1;
		var n = Math.floor( len / 3 );
		var off = $( ".srp-widget-container" ).css('left');
		if ( len < 2 ) {
			return false;
		} else {
			if ( off == '-' + ( 910 * n ) + 'px' ) {
				$( ".srp-widget-container" ).animate({
					left: '0px',
				}, 500);
			} else {
				$( ".srp-widget-container" ).animate({
					left: '-=910px',
				}, 500);
			}
		}
    });
    $( "#srp-left" ).click(function() {
    	var len = $('.srp-widget-singlepost').length - 1;
		var n = Math.floor( len / 3 );
		var off = $( ".srp-widget-container" ).css('left');
		if ( len < 2 ) {
			return false;
		} else {
			if ( off == '0px' ) {
				$( ".srp-widget-container" ).animate({
					left: '-' + ( 910 * n ) + 'px',
				}, 500);
			} else {
				$( ".srp-widget-container" ).animate({
					left: '+=910px',
				}, 500);
			}
		}
    });




    /* fixes... */
    $('th').attr('valign', 'bottom');

    // make input[type=button] and div.clickable into links
    $('input[type=button]').click(function() {
    	if ( $(this).attr('url') ) {
    		var url = $(this).attr('url');
    		window.location = url;
    	}
    });
    $('div.clickable').click(function() {
    	if ( $(this).attr('url') ) {
    		var url = $(this).attr('url');
    		window.location = url;
    	}
    });

    // video fix
    $('video').click(function() {
    	$(this)[0].play();
    });

});


/* Calculator */

    /* refi_calculator.js */
	/* JS functions specifically for the refi calculator */

	jQuery(document).ready(function($) {
		
		var self = this;

		$('input#calculateButton').click(function(event) {
			event.preventDefault();
			var balance = $('input.outstanding-balance').val();
			var interest = $('input.interest-rate').val();
			var term = $('input.term').val();
			balance = balance.replace(/\$/g, '');
			interest = interest.replace(/\%/g, '');
			calculate(balance, interest, term);
		});

		// Allow only numbers and decimals
		function onKeyDown(event) {
		    if 	(event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 190 || event.keyCode == 110 || event.keyCode == 188 || event.keyCode == 13 || 
		        (event.keyCode == 65 && event.ctrlKey === true) || 
		        (event.keyCode >= 35 && event.keyCode <= 39)) {
					return;
		    } else {
		        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
		            event.preventDefault(); 
		        }   
		    }
		}
		$('input.outstanding-balance').on('keydown', onKeyDown);
		$('input.interest-rate').on('keydown', onKeyDown);
		$('input.term').on('keydown', onKeyDown);

		function cleanFloat(num) {
			return parseFloat(num.replace(/,/g, ''));
		}

		function formatFloat(num, prefix) {
			num = roundNumber(num, 2);
			prefix = prefix || '';
			return prefix + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		function roundNumber(num, dec) {
			var result = Math.round(num * Math.pow(10, dec))/Math.pow(10, dec);
			return result.toFixed(2);
		}

		function calculatePayment(principal, interest, term) {
			principal = cleanFloat(principal);
			interest = cleanFloat(interest);
			term = cleanFloat(term);
			interest = interest/100/12; // Turn interest rate into monthly interest rate percentage
			var payment = (interest + (interest / (Math.pow(1 + interest, term) - 1))) * principal;
			return roundNumber(payment, 2);
		}

		function formatResult (result) {
			var html = '';
			html = (parseInt(result) > 0)
				? '<span class="you-save">You could Save</span><span class="total-savings">' + formatFloat(result, '$') + '</span>'
				: '<span class="no-savings">No Savings</span>';
			return html;
		}


		function calculate(balance, interest, term) {
			var cleanBalance = cleanFloat(balance);
			var cleanInterest = cleanFloat(interest);
			var cleanTerm = cleanFloat(term);
			
			// If calc is already visible, slide it up, then later, slide down with new numbers.
			//if($('.calculator-output').is(':visible')) {
			//	$('.calculator-output').slideUp();
			//}

			$('.calculator-output tr.output-outstanding td').not(':first').text('$' + balance);
			$('.calculator-output td.output-interest').text(interest + '%');
			$('.calculator-output td.output-term').text(term);

			// Populate monthly payments

			var existingPayment = calculatePayment(balance, interest, term);
			var sofi5Payment = calculatePayment(balance, '5.49', '60');
			var sofi10Payment = calculatePayment(balance, '6.125', '120');
			var sofi15Payment = calculatePayment(balance, '6.625', '180');
			var sofiSavingsPayment = calculatePayment(balance, '5.99', term);

			$('.calculator-output td.output-monthly-existing').text(formatFloat(existingPayment, '$'));
			$('.calculator-output td.output-monthly-sofi-5').text(formatFloat(sofi5Payment, '$'));
			$('.calculator-output td.output-monthly-sofi-10').text(formatFloat(sofi10Payment, '$'));
			$('.calculator-output td.output-monthly-sofi-15').text(formatFloat(sofi15Payment, '$'));
			$('.calculator-output td.output-monthly-sofi-savings').text(formatFloat(sofiSavingsPayment, '$'));

			// Populate expected interest payments

			var existingInterestPayment = (existingPayment * cleanTerm) - cleanBalance;
			var sofi5InterestPayment = (sofi5Payment * 60) - cleanBalance;
			var sofi10InterestPayment = (sofi10Payment * 120) - cleanBalance;
			var sofi15InterestPayment = (sofi15Payment * 180) - cleanBalance;
			var sofiSavingsInterestPayment = (sofiSavingsPayment * cleanTerm) - cleanBalance;

			$('.calculator-output td.output-interest-payments-existing').text(formatFloat(existingInterestPayment, '$'));
			$('.calculator-output td.output-interest-payments-sofi-5').text(formatFloat(sofi5InterestPayment, '$'));
			$('.calculator-output td.output-interest-payments-sofi-10').text(formatFloat(sofi10InterestPayment, '$'));
			$('.calculator-output td.output-interest-payments-sofi-15').text(formatFloat(sofi15InterestPayment, '$'));
			$('.calculator-output td.output-interest-payments-sofi-savings').text(formatFloat(sofiSavingsInterestPayment, '$'));

			// Populate expected interest savings

			var sofi5Savings = existingInterestPayment - sofi5InterestPayment;
			var sofi10Savings = existingInterestPayment - sofi10InterestPayment;
			var sofi15Savings = existingInterestPayment - sofi15InterestPayment;
			var sofiSavings = existingInterestPayment - sofiSavingsInterestPayment;

			sofi5Savings = formatResult(sofi5Savings);
			sofi10Savings = formatResult(sofi10Savings);
			sofi15Savings = formatResult(sofi15Savings);
			sofiSavings = formatResult(sofiSavings);

			$('.calculator-output td.output-savings-sofi-5').html(sofi5Savings);
			$('.calculator-output td.output-savings-sofi-10').html(sofi10Savings);
			$('.calculator-output td.output-savings-sofi-15').html(sofi15Savings);
			$('.calculator-output td.output-savings-sofi-savings').html(sofiSavings);
			$('.savings-calculator').addClass('square-bottom');
			$('.calculator-output').slideDown();
		}

	});
	