<?php get_header(); ?>
	
	<div class="container">
		<article class="page">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h3><?php the_title(); ?></h3>
			<div class="line-niveles2"></div>
			
			<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</article>
	</div>

<?php get_footer(); ?>