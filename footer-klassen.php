
	<footer>
	<section id="footerInner">
		<div id="adresse">
		<h2>Adresse</h2>
		<ul>
			<li>Musterstrasse 0815</li>
			<li>90408 N&uuml;rnberg</li>
		</ul>
	</div>
		<aside>
			<h2>Kontakt</h2>
			<ul id="navlist">
				<li id="email"><a href="#">Email</a></li>
				<li id="telefon"><a href="">Telefon</a></li>
			</ul>
		</aside>

	</section>
	</footer>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://christianbrabez.com/wp-content/themes/Max-Beckmann/js/jquerypp.custom.js"></script>
        <script type="text/javascript" src="http://christianbrabez.com/wp-content/themes/Max-Beckmann/js/jquery.bookblock.js"></script>
	
		<script type="text/javascript">
					$(function() {
		
						var Page = (function() {
		
							var $grid = $( '#bb-custom-wrapper' ); //wrapper was grid
		
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