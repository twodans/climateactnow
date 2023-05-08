<div class="panel quote"  style="background-image: url(<?php echo get_field('quote_image'); ?>);">
	<div class="grid nopad">
		<div class="col-1-2"></div>
		<div class="col-1-2">
			<figure>
				<blockquote>
					<?php echo get_field('quote'); ?>
				</blockquote>
				<figcaption>
					<strong><?php echo get_field('quote_author'); ?></strong>
					<?php if(get_field('quote_role') != ''): ?>
					, <?php echo get_field('quote_role'); ?>
					<?php endif; ?>
				</figcaption>
			</figure>					
		</div>
	</div>	
</div>