<?php
/**
 * The template for displaying 404 pages (Not Found).
  */

get_header(); ?>

			<!-- start outerWrapper -->
	<section id="outerWrapper" class="background-aktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="aktuellesContent">
		<h1 class="ueberschriftContent">Aktuelles aus der Max-Beckmann-Grundschule</h1>
		<?php get_search_form(); ?>
			<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
			<div class="widget">
				<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'twentyeleven' ); ?></h2>
				<ul>
				<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' =>'', 'umber' => 10 ) ); ?>
				</ul>
			</div>
			<?php
			/* translators: %1$s: smilie */
			$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'twentyeleven' ), convert_smilies( ')' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$chive_content ) );
			?>
				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
	

	</section>
	<!-- end content -->

	<!-- start sidebar -->

<?php get_sidebar(); ?>

	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

<?php get_footer(); ?>