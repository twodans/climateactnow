<?php
/*
 * Template Name: Flexible Post
 * Template Post Type: post, page, product
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); 
			
			get_template_part( 'template-parts/page-hero', 'page' );
			 get_template_part( 'template-parts/flex-content', 'page' );
			?>

				<div class="wrap">
			<?php 

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
					</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
