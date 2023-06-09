<div class="panel">
    <div class="wrap">
    <div class="dm-section">
    <h2>Breakdown of Australia's emissions</h2>
        <p>Everyday use of electricity and transport, as well as manufacturing, commercial and building use,<br class="da">generates the bulk of Australia's emissions. That's why everyone needs to get involved.</p>
</div>
        <div class="grid dm-grid">

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
        <div class="grid">
            <div class="col-1 dm-text-center-emissions-footer">
                <p>*Note Land Use, Land Use Change and Forestry reduce emissions by 8.1%</p>
                <p>Total emissions by sector, Jan-March 2022</p>
                <p>Source: <a href="https://www.dcceew.gov.au/climate-change/publications/national-greenhouse-gas-inventory-quarterly-update-march-2022" target="_blank" >Department of Climate Change, Energy, the Environment and Water</a></p>
            </div>
        </div>
    </div>
</div>