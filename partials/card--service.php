<?php

    if( have_rows('cards__service') ): ?>
        
        <div class="card-wrapper">
        
        <?php

        while ( have_rows('cards__service') ) : the_row(); ?>
            <a class="card--service_link" href="<?php  the_sub_field('card__service_button_link');  ?>">
                <div class="card--service">
                    <header class="card-header" style="background-image: url(<?php  the_sub_field('card__service_bg');  ?>);">
                        <span class="title"><?php  the_sub_field('card__service_name');  ?></span>
                    </header>
                    <div class="card-content">
                       <p><?php  the_sub_field('card__service_content');  ?></p>
                       <span><?php  the_sub_field('card__service_button');  ?></span>
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