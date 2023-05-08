<?php if(get_field('ca_submission_content') != ''): ?>

<div class="panel ca_submission">
	<div class="wrap">
		<div class="grid">
			<div class="col-2-3">
				<div>
					<?php echo get_field('ca_submission_content'); ?>					
				</div>
			</div>
			<div class="col-1-3">
				<div><div class="img">
					
					<?php $image = get_field('ca_submission_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo $image['sizes'][ 'large' ]; ?>" />
						<?php endif; ?>
					
					</div></div>
			</div>
		</div>	
	</div>
</div>

<?php else: ?>


<?php endif; ?>