<?php
    
    if( have_rows('cards__category') ): ?>
        
        <div class="card-wrapper"> 

        <?php
        
        while ( have_rows('cards__category') ) : the_row(); ?>
        
            <div class="card--category" style="background-image: url(<?php  the_sub_field('card__category_bg');  ?>);">
                <span class="title"><?php  the_sub_field('card__category_name');  ?></span>
            </div>
        
        
        <?php  endwhile;  ?>
        
        </div>

     <?php
     
    else :

    // no rows found

    endif;

?>
