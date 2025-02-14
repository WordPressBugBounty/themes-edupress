<?php
get_header(); ?>

	<div id="site-main" class="content-home">

		<div class="wrapper wrapper-main">

			<div class="wrapper-frame">
			
				<main id="site-content" class="site-main" role="main">
				
					<div class="site-content-wrapper">
	
						<div class="ilovewp-page-intro ilovewp-archive-intro">
							<?php
								the_archive_title( '<h1 class="title-page">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</div><!-- .ilovewp-page-intro -->
	
						<?php if ( have_posts() ) : $i = 0; ?>
						
						<?php /* Start the Loop */ ?>
						<ul id="recent-posts" class="ilovewp-posts ilovewp-posts-archive">
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php
			
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content' );
							?>
			
						<?php endwhile; ?>
						
						</ul><!-- .ilovewp-posts .ilovewp-posts-archive -->
			
						<?php
						the_posts_pagination( array( 'mid_size' => 4 ) );
						?>
			
					<?php else : ?>
			
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
					<?php endif; ?>
						
					</div><!-- .site-content-wrapper -->
					
				</main><!-- #site-content -->
				
				<?php get_sidebar(); ?>
			
			</div><!-- .wrapper-frame -->
		
		</div><!-- .wrapper .wrapper-main -->

	</div><!-- #site-main -->

<?php get_footer(); ?>