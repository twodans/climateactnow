<?php if( have_rows('layout') ): ?>
    <?php while( have_rows('layout') ): the_row(); ?>

		<?php if( get_row_layout() == '1_column' ):?>

			<?php if(get_sub_field('full_width_background')): ?>
				<div class="panel <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?>">
				<div class="wrap <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php else: ?>
				<div class="panel">
				<div class="wrap <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?> <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php endif; ?>						
					<div class="<?php echo get_sub_field('column_width');?>">
						<?php echo get_sub_field('content');?>
					</div>
				</div>
			</div>
					
		<?php elseif( get_row_layout() == '2_column' ):?>	
					
			<?php if(get_sub_field('column_widths') == '60-40' ):
					$col1 = 'col-3-5';
					$col2 = 'col-2-5';
				  elseif(get_sub_field('column_widths') == '60-40' ):
					$col1 = 'col-2-5';
					$col2 = 'col-3-5';
				  elseif(get_sub_field('column_widths') == '75-25' ):
					$col1 = 'col-3-4';
					$col2 = 'col-1-4';
				  elseif(get_sub_field('column_widths') == '25-75' ):
					$col1 = 'col-1-4';
					$col2 = 'col-3-4';
				  else :
					$col1 = 'col-1-2';
					$col2 = 'col-1-2';
			endif; ?>			
					
			<?php if(get_sub_field('full_width_background')): ?>
				<div class="panel <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?>">
				<div class="wrap <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php else: ?>
				<div class="panel">
				<div class="wrap <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?> <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php endif; ?>	
					<div class="grid">
						<div class="<?php echo $col1; ?>">
							<div>
								<?php echo get_sub_field('column_1');?>
							</div>	
						</div> 
						<div class="<?php echo $col2; ?>">
							<div>
								<?php echo get_sub_field('column_2');?>
							</div>	
						</div> 
					</div> 
				</div>
			</div>
					
					
		<?php elseif( get_row_layout() == '3_column' ):?>			
			<?php if(get_sub_field('full_width_background')): ?>
				<div class="panel <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?>">
				<div class="wrap <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php else: ?>
				<div class="panel">
				<div class="wrap <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?> <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php endif; ?>					
					<div class="grid">
						<div class="col-1-3">
							<div> 
								<?php echo get_sub_field('column_1');?>
							</div> 
						</div> 
						<div class="col-1-3">
							<div> 
								<?php echo get_sub_field('column_2');?>
							</div> 
						</div> 
						<div class="col-1-3">
							<div> 
								<?php echo get_sub_field('column_3');?>
							</div> 
						</div> 
					</div> 
				</div>
			</div>
					
					
		<?php elseif( get_row_layout() == '4_column' ):?>			
			<?php if(get_sub_field('full_width_background')): ?>
				<div class="panel <?php if(get_sub_field('full_width_background')): ?><?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?><?php endif; ?>">
				<div class="wrap <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php else: ?>
				<div class="panel">
				<div class="wrap <?php if(get_sub_field('set_background_colour') == 1): ?><?php echo get_sub_field('background_colour');?><?php endif; ?> <?php if(get_sub_field('remove_bottom_padding')): ?>nobotpad<?php endif; ?>">
			<?php endif; ?>					
					<div class="grid">
						<div class="col-1-4">
							<div> 
								<?php echo get_sub_field('column_1');?>
							</div> 
						</div> 
						<div class="col-1-4">
							<div> 
								<?php echo get_sub_field('column_2');?>
							</div> 
						</div> 
						<div class="col-1-4">
							<div> 
								<?php echo get_sub_field('column_3');?>
							</div> 
						</div> 
						<div class="col-1-4">
							<div> 
								<?php echo get_sub_field('column_4');?>
							</div> 
						</div> 
					</div> 
				</div>
			</div>
					
			
					
			<?php elseif( get_row_layout() == 'accordion' ):?>
					<div class="panel">
						<div class="wrap">
							<ul class="accordion">
								<?php
								if( have_rows('accordion_block') ):
									while ( have_rows('accordion_block') ) : the_row();?>
									<li class="accordion_header" id="accordion_header-<?php echo get_row_index(); ?>"><strong><?php echo get_sub_field('accordion_header');?></strong><?php if(get_sub_field('accordion_header_dtl')): ?><div><?php echo get_sub_field('accordion_header_dtl');?></div><?php endif;?></li>
									<li class="accordion_content" id="accordion_content-<?php echo get_row_index(); ?>"><?php echo get_sub_field('accordion_content');?></li>
								<?php endwhile;?>
							</ul>
						</div>
					</div>
					<?php endif;?>
					
					
					
			<?php elseif( get_row_layout() == 'events' ):?>
					
					<div class="panel">
					<div class="wrap">

					<?php
					if( have_rows('event') ):
						$count = 0;
						while ( have_rows('event') ) : the_row();?>
						<div class="grid event <?php echo get_sub_field('event_audience');?>">
							<div class="col-1-5">
								<span class="event_date"><?php echo get_sub_field('event_date');?></span>
							</div>
							<div class="col-4-5">
								<h3><?php echo get_sub_field('event_title');?><span class="event_audience"><?php echo get_sub_field('event_audience');?></span></h3>								
								<?php echo get_sub_field('event_details');?>
								<?php if(get_sub_field('event_reg_link')): ?>
								<p><a href="<?php echo get_sub_field('event_reg_link');?>" class="btn">Register now</a></p>									
								<?php endif; ?>
							</div>
                            
							
						</div>
						<?php endwhile;?>
						</div>
					</div>
					<?php endif;?>
					
					
							
			<?php elseif( get_row_layout() == 'gallery' ):?>
					
					<div class="panel">
					<div class="wrap">
						<div class="grid gallery">
							
						<?php if(get_sub_field('num_cols') == '2' ):
								$colWidth = 'col-1-2';
							  elseif(get_sub_field('num_cols') == '3' ):
								$colWidth = 'col-1-3';
							  elseif(get_sub_field('num_cols') == '4' ):
								$colWidth = 'col-1-4';
							  else :
								$colWidth = 'col-1-5';
						endif; ?>

					<?php
					if( have_rows('gallery_item') ):
						$count = 0;
						while ( have_rows('gallery_item') ) : the_row();?>
									
							<div class="<?php echo $colWidth; ?>">
								<div class="<?php echo get_sub_field('item_type');?>">
									<div class="gallery-img" style="background-image: url(<?php echo get_sub_field('gallery_image'); ?>);">
										<a class="<?php echo get_sub_field('item_type');?>" data-yt="<?php echo get_sub_field('youtube_id'); ?>" href="<?php if(get_sub_field('url')): ?><?php echo get_sub_field('url'); ?><?php else: ?>#<?php endif;?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/trans.png" alt=""/></a>
									</div>
									<?php if(get_sub_field('gallery_title')): ?>
									<div class="gallery-title"><a class="<?php echo get_sub_field('item_type');?>" data-yt="<?php echo get_sub_field('youtube_id'); ?>" href="<?php if(get_sub_field('url')): ?><?php echo get_sub_field('url'); ?><?php else: ?>#<?php endif;?>" target="_blank"><?php echo get_sub_field('gallery_title'); ?></a></div>
									<?php endif;?>
									<?php if(get_sub_field('gallery_item_desc')): ?>
									<div class="gallery-item-desc"><?php echo get_sub_field('gallery_item_desc'); ?></div>
									<?php endif;?>
								</div>
							</div>
						<?php endwhile;?>
						</div>
						</div>
					</div>
					<?php endif;?>
	
					
	
					
					
					
					
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>