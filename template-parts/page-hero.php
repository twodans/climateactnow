<?php if(get_field('hero_image') != ''): ?>
	<div class="hero" style="background-image: url(<?php echo get_field('hero_image'); ?>);">
<?php else: ?>
	<div class="hero">
<?php endif; ?>
	<div class="wrap">
		<div class="hero-copy">
			<?php if ( 'post' === get_post_type() ) :
			?>
			<h3>Blog</h3>
			<?php else: ?>
			<div class="circles-logo"></div>
		<?php endif; ?>		
			<?php if(get_field('hero_title') != ''): ?>
				<h2><?php echo get_field('hero_title'); ?></h2>
			<?php else: ?>
				<h2><?php the_title(); ?></h2>
			<?php endif; ?>	
			<?php if(get_field('sub_header') != ''): ?>
			<p><?php echo get_field('sub_header'); ?></p>
			<?php else: ?>
				<?php if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				climateactnow_posted_on();
				climateactnow_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

