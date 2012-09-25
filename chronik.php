<?php /* Template Name:Chronik */ ?>

<?php include("header-chronik.php"); ?>	

	<!-- start outerWrapper -->
	<section id="outerWrapper" class="bgAktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="chronik" class="chronikContent">
		
<?php echo do_shortcode('[timeline src="https://docs.google.com/spreadsheet/pub?key=0AvJI14JT3D30dGw4WGZCYjFWOURjVDFQckx2MlQxcWc&output=html"]'); ?>
		
	</section>
	<!-- end content -->
	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

	
<?php get_footer(); ?>