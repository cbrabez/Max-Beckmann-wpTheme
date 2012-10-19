
<?php get_header(); ?>

<!-- start outerWrapper -->
	<section id="outerWrapper" class="bgAktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="aktuellesContent">
		<h1 class="ueberschriftContent">Vergangene Beitr&auml;ge der Klasse 4b</h1>
	
		<div class="posts-by-category">
			<?php if(have_posts()) :?>
				<ol class="rectangle-list">
					<?php while(have_posts()) : the_post(); ?>
						<li><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>			
					<?php endwhile; ?>
				</ol>
	
			<?php else : ?>
			
				<h2>Nothing FOUND</h2>
				<p>You are looking for something that isn't here!?!</p>
				<p><a id="link-to-index" href="<?php echo get_option('home'); ?>">Return to the Homepage</a></p>
			
			<?php endif; ?>
		</div>
	</section>
	<!-- end content -->

	

<?php get_sidebar(); ?>

	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

<?php get_footer(); ?>