<?php if(get_field('quote') != ''): ?>
<div class="panel quote"  style="background-image: url(<?php echo get_field('quote_bg'); ?>);">
	<div class="grid nopad">
		<div class="col-1-3 col-lg-1-2"></div>
		<div class="col-1-2">
			<div class="quote-wrap">
				<figure>
					<blockquote>
						<?php echo get_field('quote'); ?>
					</blockquote>
					<?php if(get_field('quote_author') != ''): ?>
						<figcaption>
							<strong><?php echo get_field('quote_author'); ?></strong><?php if(get_field('quote_author_title') != ''): ?>, <?php echo get_field('quote_author_title'); ?><?php endif; ?>
						</figcaption>
					<?php endif; ?>
				</figure>				
			</div>	
		</div>
	</div>	
</div>
<?php endif; ?>