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
	$('div.refi-with').click(function(){
		$(this).parent().addClass('refi-with').removeClass('refi-without');
	});
	$('div.refi-without').click(function(){
		$(this).parent().addClass('refi-without').removeClass('refi-with');
	});

	// Recent News widget
	$('.recent-news-h').wrap('<div class="recent-news-h-line"><div class="recent-news-h-block"></div></div>');
	$('.srp-widget-container').addClass('first-third').wrap('<div class="srp-widget-wrapper" />');
	$('.srp-widget-wrapper').before('<div id="srp-left" class="srp-widget-nav arrow-left"></div>').after('<div id="srp-right" class="srp-widget-nav arrow-right"></div>');
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




});