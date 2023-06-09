<div class="panel ca_how dm-how">
	<div class="wrap">
		<div class="grid header">
			<div class="dm-section">
				<h2><?php echo get_field('ca_how_heading'); ?></h2>
				<!-- <p>Clear ambition and plans for each sector aligned with a target of 75 by 35,<br class="da">will deliver jobs and growth across the whole Australian economy.</p> -->
				<p>Clear ambition and plans for each sector aligned with a target of 75 by 35, <br class="da">will deliver jobs and growth across the whole Australian economy. </p>
			</div>
					<?php 
				$link = get_field('ca_how_cta');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>			
				<?php endif; ?>
		</div>	
		
		<?php if( have_rows('hover_blocks') ): ?>
			<div class="grid min">
			<?php while( have_rows('hover_blocks') ): the_row(); ?>
				<div class="col-1-5">
					<div class="hover-wrap">
						<div class="hover-pic" style="background-image: url(<?php the_sub_field('hover_block_bg'); ?>)"></div>
						<div class="hover-hd"><h3><?php the_sub_field('hover_block_heading'); ?></h3></div>
						<div class="hover-copy"><div><?php the_sub_field('hover_block_content'); ?></div></div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
		
		<?php if(get_field('ca_how_extra') != ''): ?>
			<div><?//php echo get_field('ca_how_extra'); ?></div>		
		<?php endif; ?>
		
	</div>
</div>
