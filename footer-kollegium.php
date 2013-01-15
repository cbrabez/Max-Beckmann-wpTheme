
	<footer>
	<section id="footerInner">
		<div id="adresse">
		<h2>Adresse</h2>
		<ul>
			<li>Beckmannstraße 2</li>
			<li>90455 N&uuml;rnberg</li>
		</ul>
	</div>
		<aside>
			<h2>Kontakt</h2>
			<ul id="navlist">
				<li id="email"><a href="mailto:max-beckmann-gs@online.de">max-beckmann-gs@online.de</a></li>
				<li id="telefon"><a href="tel:+0911882584">0911/882584</a></li>
			</ul>
		</aside>

	</section>
	</footer>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquerypp.custom.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bookblock.js"></script>

		<script type="text/javascript">
					$(function() {

						var Page = (function() {

							var $grid = $( '#bb-custom-grid' ); //wrapper was grid

							return {

								init : function() {

									$grid.find( 'div.bb-bookblock' ).each( function( i ) {

										var $bookBlock		= $( this ),
											$nav			= $bookBlock.next().children( 'span' ),
											bb				= $bookBlock.bookblock( {
												perspective	: 900,
												speed		: 600,
												shadows		: false
											} );

										// add navigation events
										$nav.each( function( i ) {

											$( this ).on( 'click', function( event ) {

												var $dot = $( this );
												if( !bb.isActive() ) {
													$nav.removeClass( 'bb-current' );
													$dot.addClass( 'bb-current' );
												}
												bb.jump( i + 1 );
												return false;

											} );

										} );

										// add swipe events
										$bookBlock.children().on( {

											'swipeleft' : function( event ) {

												bb.next();
												return false;

											},
											'swiperight' : function( event ) {

												bb.prev();
												return false;

											}

										} );

									} );

								}

							};

						})();

						Page.init();

					});
		</script>


	</body>
</html>