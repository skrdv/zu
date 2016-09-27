var path = Drupal.settings.pathToTheme;
(function($) {
	"use strict";

	$( 'document' ).ready(function() {

		/*	Settings	*/
		var useRTL = false,
			usePreloader = true,
			useDarkTheme = false,
			useBoxedLayout = false,
			useBoxedShadow = false,
			useTopMargin = false,
			useBottomMargin = false,
			useCustomMainMenuAnimation = false,			//	please do not change
			useStickedMainMenu = true,
//			setCustomMainMenuAnimationIn = 'fadeInLeft',
//			setCustomMainMenuAnimationOut = 'flipOutY',
			setMainMenuAnimation = 'slide',				//	slide, fade or show
			setMainMenuAnimationSpeed = 400,
			setPreloaderStyle = 2,						//	from 1 to 5
			setTopMargin = 30,
			setBottomMargin = 30,						
			/********************************/
			$rivaSiteWrapper = $( '#riva-site-wrapper');

		/* Preloader */
		if ( usePreloader ) {

			var $sitePreloaderCode = null,
				$sitePreloaderMarker = $( '#riva-preload' );

			if ( setPreloaderStyle < 1 && setPreloaderStyle > 5 ) {

				setPreloaderStyle = 1;

			}

			if ( setPreloaderStyle == 1) {

				$sitePreloaderCode = $( '<div class="windows8"><div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_3"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_4"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div></div>' );

			} else if ( setPreloaderStyle == 2 ) {

				$sitePreloaderCode = $( '<div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>' );

			} else if ( setPreloaderStyle == 3 ) {

				$sitePreloaderCode = $( '<div id="followingBallsG"><div id="followingBallsG_1" class="followingBallsG"></div><div id="followingBallsG_2" class="followingBallsG"></div><div id="followingBallsG_3" class="followingBallsG"></div><div id="followingBallsG_4" class="followingBallsG"></div></div>' );

			} else if ( setPreloaderStyle == 4 ) {

				$sitePreloaderCode = $( '<div id="fountainG"><div id="fountainG_1" class="fountainG"></div><div id="fountainG_2" class="fountainG"></div><div id="fountainG_3" class="fountainG"></div><div id="fountainG_4" class="fountainG"></div><div id="fountainG_5" class="fountainG"></div><div id="fountainG_6" class="fountainG"></div><div id="fountainG_7" class="fountainG"></div><div id="fountainG_8" class="fountainG"></div></div>' );

			} else if ( setPreloaderStyle == 5 ) {

				$sitePreloaderCode = $( '<div id="floatingCirclesG"><div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02"></div><div class="f_circleG" id="frotateG_03"></div><div class="f_circleG" id="frotateG_04"></div><div class="f_circleG" id="frotateG_05"></div><div class="f_circleG" id="frotateG_06"></div><div class="f_circleG" id="frotateG_07"></div><div class="f_circleG" id="frotateG_08"></div></div>' );

			}

			$sitePreloaderCode.appendTo( $sitePreloaderMarker );
		}

		/*	Layout*/

		if ( useBoxedLayout ) {

			$rivaSiteWrapper.addClass( 'boxed-layout' );

			if ( useBoxedShadow ) {

				$rivaSiteWrapper.addClass( 'boxed-shadow' );
			}

		}

		/*	Top Margin   */

		if ( useTopMargin ) {

			$rivaSiteWrapper.css( 'margin-top', setTopMargin + 'px' );

		}

		/*	Bottom Margin   */

		if ( useBottomMargin ) {

			$rivaSiteWrapper.css( 'margin-bottom', setBottomMargin + 'px' );

		}


		/*	Mobile menu */
		
		$('.menu-btn').on('click', function(){
			$('#nav').find('.block-menu-block').toggle();
		});



		/*	Fancybox	*/

		$('.fancybox').fancybox();

		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				openEffect : 'none',
				closeEffect : 'none',
				prevEffect : 'none',
				nextEffect : 'none',
				arrows : false,
				helpers : {
					media : {},
					buttons : {}
				}
			});

		/*	Main Navigation	*/

		$( '<span class="arrow"></span>' ).appendTo( $( 'ul.main-nav').find( '> li.active') );

		if ( useCustomMainMenuAnimation ) {

			$( 'ul.main-nav').find( 'li' ).each( function() {

				$( this ).on( 'mouseenter', function() {

				} );

				$( this ).on( 'mouseleave', function() {

				} );

			} );

		} else {

			if ( setMainMenuAnimation == 'fade' ) {

				$( 'ul.main-nav').find( 'li' ).each( function() {

					$( this ).on( 'mouseenter', function() {

						$( this ).find( '> ul' ).stop( true. true ).fadeIn();

					} );

					$( this ).on( 'mouseleave', function() {

						$( this ).find( '> ul' ).stop( true. true ).fadeOut();

					} );

				} );

			}

			if ( setMainMenuAnimation == 'slide' ) {

				$( 'ul.main-nav').find( 'li' ).each( function() {

					$( this ).on( 'mouseenter', function() {

						$( this ).find( '> ul' ).stop( true. true ).slideDown();

					} );

					$( this ).on( 'mouseleave', function() {

						$( this ).find( '> ul' ).stop( true. true ).slideUp();

					} );

				} );

			}

			if ( setMainMenuAnimation == 'show' ) {

				$( 'ul.main-nav').find( 'li' ).each( function() {

					$( this ).on( 'mouseenter', function() {

						$( this ).find( '> ul' ).stop( true. true ).show( 400 );

					} );

					$( this ).on( 'mouseleave', function() {

						$( this ).find( '> ul' ).stop( true. true ).hide( 400 );

					} );

				} );

			}

		}

		/*	Sticked menu 	*/

		if ( useStickedMainMenu ) {

			setTimeout( function() {

				$('#nav').scrollFix();

			}, 1000 );

			$(window).scroll(function () {

				if ( $( this ).scrollTop() > 165 ) {

					$( '#nav' ).addClass( 'scrolled' );

				} else {

					$( '#nav' ).removeClass( 'scrolled' );

				}

			} );

		}

		/*	To the top 	*/

		$( window ).scroll( function() {

			if ( $( this ).scrollTop() > 300 ) {

				$( '.move-to-the-top' ).addClass( 'show' );

			} else {

				$( '.move-to-the-top' ).removeClass( 'show' );

			}

		} );

		$( 'body' ).on( 'click', '.move-to-the-top', function(e) { e.preventDefault(); $('body,html').animate({scrollTop: 0}, 500); });









		/*	Post */

		$( '.post[data-style="preview"]' ).each( function() {

			var $this = $( this ),
				$f = $this.find( '> figure' ),
				$a = $f.find( '> a' ),
				$ghost = null,
				$img = $a.find( '> img' );

			$( '<span class="img-ghost"></span>' ).css( {
				'background-image' : 'url(' + $img.attr( 'src' ) + ')'
			} ).appendTo( $f ).wrap( '<a href="' + $a.attr( 'href' ) + '" title="' + $a.attr( 'title' ) + '"></a>');

			$img.remove().detach();

			$a.remove().detach();

		} );

		$( '.post[data-style="full"]').each( function() {

			$( '<i class="glyphicon glyphicon-comment"></i>' ).prependTo( $( this ).find( '.content blockquote' ) );
		} );

		/*	Testimonials */

		$( '.testimonials-item, .comment-item').each( function() {

			var $this = $( this ),
				$f = $this.find( '> figure' ),
				$ghost = null,
				$img = $f.find( '> img' );

			$( '<span class="img-ghost"></span>' ).css( {
				'background-image' : 'url(' + $img.attr( 'src' ) + ')'
			} ).appendTo( $f );

			$img.remove().detach();

		} );

		/*	Header search	*/

		$( '#header-search' ).find( 'form input' ).on( 'focus', function() {

			$( '#header-search' ).addClass( 'focused' );

		} ).on( 'blur', function() {

			$( '#header-search' ).removeClass( 'focused' );

		} );

		/*	Widget search 	*/

		$( '.widget.widget-search' ).each( function() {

			var $this = $( this );

			$this.find( 'input' ).on( 'focus', function() {

				$this.addClass( 'focused' );

			} ).on( 'blur', function() {

				$this.removeClass( 'focused' );

			} );

		} );

		/*	Widget categories	*/

		$( '.widget.widget-categories' ).each( function() {

			$( '<i class="glyphicon glyphicon-folder-open"></i>').appendTo( $( this ).find( 'li' ) );

		} );

		/*	Accordion */

		$( '.m-accordion' ).each( function() {

			var $this = $( this );

			$this.on( 'click', '> section > header', function() {

				var $s = $( this ).parent();

				if ( $s.hasClass( 'active') ) {

					$s.removeClass( 'active' );

				} else {

					$this.find( '> section' ).removeClass( 'active' ).find( '> div' ).slideUp();

					$s.addClass( 'active' );

				}

				$s.find( '> div' ).stop( true, true ).slideToggle();

			} );

		} );

		/*	Skills	*/

		$( '.m-skills' ).each( function() {

			$( this ).find( '> section' ).each( function() {

				var $this = $( this );

				$( '<span class="name"></span>' ).html( $this.attr( 'data-name' ) ).appendTo( $this );

				$( '<span class="value"></span>' ).html( $this.attr( 'data-value' ) + '%' ).css( 'width', $this.attr( 'data-value' ) + '%').appendTo( $this );

			} );

		} );

		/*	Tabs	*/

		$( '.m-tabs, .widget.widget-tabs .widget-content' ).each( function() {

			var number = 0,
				$this = $( this ),
				$active = $this.attr( 'data-active' ),
				current = parseInt( $active );

			if ( $active === undefined ) {

				number = 0;


			} else {

				if ( current > $this.find( '> section' ).length || current < 1 ) {

					number = 1;

				} else {

					number = current - 1;
				}

			}

			$this.find( '> section' ).hide().eq( number ).show();

			$this.find( '> header > span' ).on( 'click', function() {

				var index = $( this ).index();

				$this.find( '> header > span' ).removeClass( 'active' ).eq( index ).addClass( 'active' );

				$this.find( '> section' ).hide().eq( index ).fadeIn();

			} ).eq( number ).addClass( 'active' );

		} );

		/*	Tipso	*/

		$('.tipso').tipso();

		/*	Simplex Form 	*/

		setTimeout( function() {

			$( '.simplexformelements' ).find( 'button[type="submit"]' ).addClass( 'm-btn' ).attr( 'data-size', 'normal' ).attr( 'data-color', 'primary' );

		}, 4000 );

		/*	Resize	*/

		$( window ).on( 'resize', function() {

		} );

		

	});

})(jQuery);
