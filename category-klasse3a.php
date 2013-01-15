
<?php get_header(); ?>

<!-- start outerWrapper -->
	<section id="outerWrapper" class="background-aktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="category" class="content">
		<h1 class="ueberschriftContent">Vergangene Beitr&auml;ge der Klasse 3a</h1>
	
		<div class="posts-by-category">
			<?php if(have_posts()) :?>
				<ol class="rectangle-list">
					<?php while(have_posts()) : the_post(); ?>
						<li><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>			
					<?php endwhile; ?>
				</ol>
	
			<?php else : ?>
			
				<h2>Leider haben wir keine Beitr&auml;ge gefunden.</h2>
				<p>Im <a href="<?php bloginfo('url');?>/archiv">Archiv</a> haben Sie einen Überblick aller vergangener Artikel.</p>
				<p>Im Bereich <a id="link-to-index" href="<?php echo get_option('home'); ?>">Aktuelles</a> finden Sie die letzten Beitr&auml;ge.</p>
			
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