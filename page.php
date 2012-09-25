<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<!-- start outerWrapper -->
	<section id="outerWrapper" class="bgAktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="aktuellesContent">
		<h1 class="ueberschriftContent">Aktuelles aus der Max-Beckmann-Grundschule</h1>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	
		<article <?php post_class() ?>>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			
			<span class="date">
				<?php the_time('j') ?><br />
				<span><?php the_time('M') ?></span>
			</span>
			<span class="year"><?php the_time('Y') ?></span>
			</h2>
			
			<p><?php the_content(''); ?> </p>
		</article>
		
	<?php endwhile; ?>


<?php else : ?>

	<h2>Nothing FOUND</h2>
	<p>You are looking for something that isn't here!?!</p>
	<p><a href="<?php echo get_option('home'); ?>">Return to the Homepage</a></p>

<?php endif; ?>

	</section>
	<!-- end content -->

	<!-- start sidebar -->

<?php get_sidebar(); ?>

	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

<?php get_footer(); ?>