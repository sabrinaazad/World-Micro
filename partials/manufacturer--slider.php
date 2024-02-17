<div class="manufacturers-slider-wrapper">
    <div class="manufacturers-slider">
        <?php

            if( have_rows('manufacturers_logo') ): 

                while ( have_rows('manufacturers_logo') ) : the_row(); ?>
                
                <div>
                    <div class="slide-wrapper">
                        <img class="home__logo" src="<?php  the_sub_field('manufacturer_logo');  ?>" alt="">
                    </div>
                </div>
                
                <?php

                endwhile;

            else :

                // no rows found

            endif;

            ?>
    </div>
    <div class="links">
        <a href="/manufacturers">VIEW ALL MANUFACTURERS</a> 
        <span class="seperator desktop-only"></span>
        <a href="/wp-content/uploads/World-Micro-Franchised-Line-Card-2020-ts.pdf" class="download-link desktop-only" download>Download Line card PDF</a>
    </div>
</div>