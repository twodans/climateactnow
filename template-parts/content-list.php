<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ClimateActNow
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="article-wrap">
		
		
	<div class="article-pic" style="<?php if(get_field('hero_image')):?>
			background-image: url(<?php echo get_field('hero_image');?>)
		<?php elseif(has_post_thumbnail()):?>	 
			background-image: url(<?php echo the_post_thumbnail_url();?>)
		<?php else:?>	 
		<?php endif; ?>">
	</div>
	<div class="article-content">
		
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_date( '', '<span class="date">', '</span>' );
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	
			the_excerpt();
		endif;?>
	</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
