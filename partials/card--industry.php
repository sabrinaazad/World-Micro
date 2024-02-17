<?php

    if( have_rows('cards__industry') ): ?>
        
        <div class="card-wrapper">
        
        <?php
        
        while ( have_rows('cards__industry') ) : the_row(); ?>
            <a class="card--industry_link" href="<?php  the_sub_field('card__industry_button_link');  ?>">        
                <div class="card--industry">
                    <header class="card-header" style="background-image: url(<?php  the_sub_field('card__industry_bg');  ?>);">
                        <span class="title"><?php  the_sub_field('card__industry_name');  ?></span>
                    </header>
                    <div class="card-content">
                       <p><?php  the_sub_field('card__industry_content');  ?></p>
                       <span><?php  the_sub_field('card__industry_button');  ?></span>
                   </div>
                </div> 
            </a>
        <?php  endwhile;  ?>

        </div> 

    <?php

    else :

        // no rows found

    endif;

?>