<?php
get_header(); ?>

	<div id="site-main" class="content-home">

		<div class="wrapper wrapper-main">
		
			<div class="wrapper-frame">
			
				<main id="site-content" class="site-main" role="main">
				
					<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="site-content-wrapper">
	
						<?php if ( has_post_thumbnail() && 1 == get_theme_mod( 'edupress_single_featured_image', 1 ) ) { ?>
						<div class="thumbnail-post-intro">
							<?php the_post_thumbnail('edupress-large-thumbnail'); ?>
						</div><!-- .thumbnail-post-intro -->
						<?php } ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>
						
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) {
								comments_template();
							}
						?>
						
					</div><!-- .site-content-wrapper -->
					
					<?php endwhile; // End of the loop. ?>
				
				</main><!-- #site-content -->
				
				<?php get_sidebar(); ?>
			
			</div><!-- .wrapper-frame -->
		
		</div><!-- .wrapper .wrapper-main -->

	</div><!-- #site-main -->

<?php get_footer(); ?>