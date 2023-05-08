<div class="panel ca_support">
		<div class="support-intro">
			
	<div class="wrap">
		<h2>Join <span><?php echo ($GLOBALS['totalSignUps'] > 0 ? number_format($GLOBALS['totalSignUps']) : 'loading...'); ?></span> people who have signed to support the act </h2>	
		<?php 
				$link = get_field('ca_support_cta');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn teal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>			
				<?php endif; ?>
		
				</div>	
	</div>
	
		<div class="support-links">
			
	<div class="wrap">
	
		<?php if( have_rows('ca_support_cols') ): ?>
			<div class="grid min">
			<?php while( have_rows('ca_support_cols') ): the_row(); ?>
				<div class="col-1-4">
					<div class="support-block">
						<div class="cols-pic">		
						<?php 
						$cta = get_sub_field('ca_support_item_cta');
						if( $cta ): 
							$cta_url = $cta['url'];
							$cta_target = $cta['target'] ? $cta['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>">
						<?php endif; ?>
								
						<?php $image = get_sub_field('ca_support_item_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo $image['url']; ?>" />
						<?php endif; ?>
							</a>
						</div>
						<div class="cols-content"><h3><?php the_sub_field('ca_support_item_heading'); ?></h3><?php the_sub_field('ca_support_item_content'); ?></div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
		</div>
		</div>
	
</div>
