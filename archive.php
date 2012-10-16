<?php /* Template Name: Archive */ ?>
<?php get_header(); ?>

<!-- start outerWrapper -->
	<section id="outerWrapper" class="bgAktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="aktuellesContent">
		<h1 class="ueberschriftContent">Zur&uuml;ckliegende Beiträge</h1>
	
		<?php if ( have_posts() ) the_post(); ?>
	          <h1>

<?php if ( is_day() ) : ?>

                <?php printf( __( 'Archiv nach Tagen: %s', 'deinthemename' ), get_the_date() ); ?>

<?php elseif ( is_month() ) : ?>

                <?php printf( __( 'Archiv nach Monate: %s', 'deinthemename' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
                <?php printf( __( 'Archiv nach Jahren: %s', 'deinthemename' ), get_the_date('Y') ); ?>
<?php else : ?>
                <?php _e( 'Blog-Archiv', 'deinthemename' ); ?>
<?php endif; ?>
            </h1>

<?php rewind_posts(); get_template_part( 'loop', 'archive' );?>


	</section>
	<!-- end content -->

	

<?php get_sidebar(); ?>

	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

<?php get_footer(); ?>