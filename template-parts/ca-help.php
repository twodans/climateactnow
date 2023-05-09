<div class="panel ca_help">
	<div class="wrap">
		<h2><?php echo get_field('ca_help_heading'); ?></h2>	
		
		<?php if( have_rows('ca_help_cols') ): ?>
			<div class="grid">
			<?php while( have_rows('ca_help_cols') ): the_row(); ?>		
				<div class="col-1-5">
					<div class="cols-pic">	
						<?php $image = get_sub_field('ca_help_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo $image['url']; ?>" />
						<?php endif; ?>
					</div>
					<div class="cols-content"><?php the_sub_field('ca_help_content'); ?></div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
