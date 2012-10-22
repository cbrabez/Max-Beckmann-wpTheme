<?php /* Template Name: Archive */ ?>
<?php get_header(); ?>

<!-- start outerWrapper -->
	<section id="outerWrapper" class="bgAktuelles">
	<!-- start innerWrapper -->
	<section id="innerWrapper">
	
	<!-- start content -->
	<section id="aktuelles" class="aktuellesContent">
		<h1 class="ueberschriftContent">Archiv vergangener Beitr&auml;ge</h1>
		<div class="posts-by-category">
		<?php
			     $args = array(
			         'cat'                 => 4,
			         'orderby'                  => 'id',
			         'order'                    => 'ASC'
			         );
			     $categories = get_categories( $args );
			?>
			<?php foreach ($categories as $cat_id) { ?>
				<h3>Beitr&auml;ge der <?php echo $cat_id->name; ?></h3>
				<?php
			         $args = array(
			          'post_type' => 'post',
			          'cat' => $cat_id->cat_ID,
			          'orderby' => 'date',
			          'order' => DSC
			        );
			        $article_query = new WP_Query( $args ); ?>
				
				<ol class="rectangle-list">
			        <?php if ( $article_query->have_posts() ) : while ( $article_query->have_posts() ) : $article_query->the_post(); $more = 0; ?>		        		<li><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>			
				<?php endwhile; ?>
				</ol>
			   
			        <?php endif; ?>
			
			        <?php wp_reset_postdata(); ?>
			
		<?php }; ?>
		</div>
	</section>
	<!-- end content -->

	

<?php get_sidebar(); ?>

	</section>
	<!-- end innerWrapper -->
	
	</section>
	<!-- end outerWrapper -->

<?php get_footer(); ?>