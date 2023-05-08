<div class="center page-content">
	<div class="right blog-details">
		<?php if(has_post_thumbnail()): ?>
			<span class="featured"" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"><?php the_post_thumbnail(); ?></span>
		<?php endif; ?>
		<p>
			Posted by <?php the_author_meta('nickname'); ?>
			<span><?php the_date('jS F Y'); ?></span>
		</p>
	</div>
	<div class="left">
		<?php the_content(); ?>
	</div>
</div>
