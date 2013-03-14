<?php /* Template Name:Leitbild */ ?>

<?php get_header(); ?>

			<!-- start outerWrapper -->
	<section id="outerWrapper" class="background-aktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="content">
		<h1>Leitbild der Max-Beckmann-Grundschule</h1>
	
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