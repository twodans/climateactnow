<div class="panel ca_resources">
	<div class="wrap">
		<div class="resources-intro" id="research">
		<h2><?php echo get_field('resources_heading'); ?></h2>
			<h3><?php echo get_field('resources_sub'); ?></h3>		
		<?php if( have_rows('resources') ): ?>
			<div class="resources-slider slider">
			<?php while( have_rows('resources') ): the_row(); ?>
				<div>
				<div class="resource-wrap">
					<?php $image = get_sub_field('resource_image');
						  $size = 'medium';
						if( !empty( $image ) ): ?>
					<a href="<?php the_sub_field('resource_cta'); ?>" class="resources-pic" target="_blank"><img src="<?php echo esc_url($image['sizes'][ $size ]); ?>" alt="<?php the_sub_field('resource_title'); ?>" /></a>
						<?php endif; ?>
					
					<div class="resources-body">							
						<div class="resources-desc"><?php the_sub_field('resource_description'); ?></div>				
						<div class="resources-attr"><?php the_sub_field('resource_title'); ?></div>
						<a href="<?php the_sub_field('resource_cta'); ?>" target="_blank">Read report</a>
					</div>
				</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
		</div>
</div>
