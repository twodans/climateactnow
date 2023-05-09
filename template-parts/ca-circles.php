<div class="panel">
    <div class="wrap">
        <div class="grid">

        <?php if( have_rows('emissions_container') ){
            while( have_rows('emissions_container') ){
                the_row();
                $icon_emissions = get_sub_field('icon_emissions');
                $emissions_percentage = get_sub_field('emissions_percentage');
                $emissions_title = get_sub_field('emissions_title');
        ?>

        <div class="col-1-4 dm-column-circle">
            <div class="dm-circle-container">
                <div class="dm-center-circle">
                    <img src="<?php echo $icon_emissions;  ?>">
                    <p><?php echo $emissions_percentage;  ?></p>
                </div>
            </div>
            <p class="dm-sub"><?php echo $emissions_title;  ?></p>
        </div>

        <?php
            }
        } ?>
            
            
        </div>
    </div>
</div>