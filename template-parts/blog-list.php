<ul class="center blog-list">
	<?php
		$paged = intval(get_query_var('paged'));
		$paged = ($paged) ? $paged : 1;
		$args = array(
			'paged' => $paged,
			'meta_key' => 'featured_blog',
			'orderby' => array(
				'meta_value' => 'ASC',
				'date' => 'DESC'
			),
		);
		query_posts($args);
		while(have_posts()): 
		the_post();
	?>
		<li>
			<a href="<?php the_permalink(); ?>" class="featured" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
				<?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
				<?php if(get_field('featured_blog') == '1'): ?>
					<span class="featured-blog">Featured<span> blog</span></span>
				<?php endif; ?>
				<span class="hover"></span>
			</a>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="meta"><span><?php the_date('jS F Y');?></span> by <?php the_author_meta('nickname'); ?></p>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="more">Read more</a>
		</li>
	<?php endwhile; ?>	
</ul>
<?php wp_paginate(); ?>
