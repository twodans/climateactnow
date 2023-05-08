<?php
/*
 * Template Name: Wide Post
 * Template Post Type: post, page, product
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();  ?>
			<div class="topbar">
				<div class="wrap"><h3><a href="/blog">Blog</a></h3></div>
			</div>

				<div class="wrap">
						<?php the_date( '', '<span class="date">', '</span>' );?>
						<?php the_title( '<h1>', '</h1>' );?>
						<div class="featured-img"><?php the_post_thumbnail(); ?></div>
						<?php get_template_part( 'template-parts/content-post', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
						
						<?php get_sidebar();?>
					</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
