<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ClimateActNow
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();
?>

<div class="dm-sign-scroll scroll-box">
	<a href="https://join.climateactnow.com.au/" target="_blank">
	<div class="wrap-scroll">
		<div class="dm-text-sign-scroll">
			<p>SIGN UP</p>
			<p>to show your <br class="dm-br-scroll">support</p>
		</div>
		<div class="dm-sign-scroll-image">
			<img src="<?php bloginfo('template_url'); ?>/images/arrow-btn-1.svg" class="hidde-1024">
			<img src="<?php bloginfo('template_url'); ?>/images/arrow-btn.svg" class="display-1024">
		</div>
	</div>
	</a>
</div>

			<?php if( is_front_page() ) { ?>
			<!-- <?php get_template_part( 'template-parts/ca-submissions', 'page' ); ?> -->
			<?php get_template_part( 'template-parts/hero-quote', 'page' ); ?>
			<!-- <?php get_template_part( 'template-parts/ca-what', 'page' ); ?> -->
			<?php get_template_part( 'template-parts/ca-circles', 'page' ); ?>
			<?php get_template_part( 'template-parts/ca-how', 'page' ); ?>
			<?php get_template_part( 'template-parts/ca-help', 'page' ); ?>
			<?php get_template_part( 'template-parts/ca-performance', 'page' ); ?>
			<!-- <?php get_template_part( 'template-parts/ca-committed', 'page' ); ?> -->
			
			<?php get_template_part( 'template-parts/ca-support', 'page' ); ?>
			<?php get_template_part( 'template-parts/ca-stats', 'page' ); ?>
			<?php get_template_part( 'template-parts/ca-resources', 'page' ); ?>
		<?php } else { ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php } ?>

		<?php	


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


<?php
get_footer();
