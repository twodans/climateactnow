<div class="panel ca_what">
	<div class="wrap">
		<div class="grid">
			<div class="col-1-2">
				<div>
					<h2><?php echo get_field('ca_what_heading'); ?></h2>
					<?php echo get_field('ca_what_content'); ?>
					<?php 
					$link = get_field('ca_what_cta');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>		
					<?php endif; ?>
				</div>
			</div>
			<div class="col-1-2">
				<div><div class="img">
					
					<?php $image = get_field('ca_what_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo $image['sizes'][ 'large' ]; ?>" />
						<?php endif; ?>
					
					</div></div>
			</div>
		</div>	
	</div>
</div>
