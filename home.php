<?php // Template Name: Blog Page ?>
<?php get_header();?>

	<div class="hero">
	<div class="wrap">
		<div class="hero-copy">
			<div class="circles-logo"></div>	
				<h2>Blog</h2>
		</div>
	</div>
</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			
			//get_template_part( 'template-parts/page-hero', 'page' );

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-list', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
			
			//get_template_part( 'template-parts/join-donate', 'page' );
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .wrap -->
<?php
get_footer();
