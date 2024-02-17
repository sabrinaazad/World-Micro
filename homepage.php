<?php 
/*Template Name: Homepage Template*/

get_header();

?>
<main class="homepage">
    <section class="hero">
        <div class="home-hero-slider">
            <div>
                <div class="hero-wrapper" style="background-image: url(<?php echo the_field('hero__image1'); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                               <div class="text-container">
                                    <h1>
                                        <?php echo the_field('hero__heading1'); ?>
                                    </h1>
                                    <p class="medium-paragraph"><?php echo the_field('hero__subheading1'); ?></p>
                                    <span class="spacer"></span>
                                    <a href="/industries/defense-space/" class="button-primary inverse"><?php echo the_field('hero__button1'); ?></a>
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div>
                <div class="hero-wrapper" style="background-image: url(<?php echo the_field('hero__image2'); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                               <div class="text-container">
                                    <h1>
                                        <?php echo the_field('hero__heading2'); ?>
                                    </h1>
                                    <p class="medium-paragraph"><?php echo the_field('hero__subheading2'); ?></p>
                                    <span class="spacer"></span>
                                    <a href="/industries/aerospace/" class="button-primary inverse"><?php echo the_field('hero__button2'); ?></a>
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div>
                <div class="hero-wrapper" style="background-image: url(<?php echo the_field('hero__image3'); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                               <div class="text-container">
                                    <h1>
                                        <?php echo the_field('hero__heading3'); ?>
                                    </h1>
                                    <p class="medium-paragraph"><?php echo the_field('hero__subheading3'); ?></p>
                                    <span class="spacer"></span>
                                    <a href="/industries/commercial-industrial/" class="button-primary inverse"><?php echo the_field('hero__button3'); ?></a>
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>  
    </section>
    <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-image"></div>
                    <div class="home-slider-1">
                        <div>
                            <div class="slide-wrapper">
                                <span class="desktop-underline">Defense & Space</span>
                            </div>
                        </div>
                        <div>
                            <div class="slide-wrapper">
                                <span class="desktop-underline">Aerospace</span>
                            </div>
                        </div>
                        <div>
                            <div class="slide-wrapper">
                                <span class="desktop-underline">Commercial & Industrial</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="home-slider-2">
                        <div>
                            <div class="heading">
                                <h3>Defense & Space Product Categories</h3>
                                <a href="/industries/defense-space/">Learn More</a>
                            </div>
                            <div class="slide-wrapper">
                                
                                <?php

                                if( have_rows('cards__category1') ): 

                                    while ( have_rows('cards__category1') ) : the_row(); ?>
                                    
                                    <div class="card-wrapper">
                                        <div class="card--category" style="background-image: url(<?php  the_sub_field('card__category_bg');  ?>);">
                                            <span class="title"><?php  the_sub_field('card__category_name');  ?></span>
                                        </div>
                                    </div>
                                    
                                    <?php

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>
                                
                            </div>
                        </div>
                        <div>
                            <div class="heading">
                                <h3>Aerospace Product Categories</h3>
                                <a href="/industries/aerospace/">Learn More</a>
                            </div>
                            <div class="slide-wrapper">
                                <?php

                                if( have_rows('cards__category2') ): 

                                    while ( have_rows('cards__category2') ) : the_row(); ?>
                                    
                                    <div class="card-wrapper">
                                        <div class="card--category" style="background-image: url(<?php  the_sub_field('card__category_bg');  ?>);">
                                            <span class="title"><?php  the_sub_field('card__category_name');  ?></span>
                                        </div>
                                    </div>
                                                                
                                    <?php

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>
                            </div>
                        </div>
                        <div>
                            <div class="heading">
                                <h3>Commercial & Industrial Product Categories</h3>
                                <a href="/industries/commercial-industrial/">Learn More</a>
                            </div>
                            <div class="slide-wrapper">
                                <?php

                                if( have_rows('cards__category3') ): 

                                    while ( have_rows('cards__category3') ) : the_row(); ?>
                                    
                                    <div class="card-wrapper">
                                        <div class="card--category" style="background-image: url(<?php  the_sub_field('card__category_bg');  ?>);">
                                            <span class="title"><?php  the_sub_field('card__category_name');  ?></span>
                                        </div>
                                    </div>
                                    
                                    <?php

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    <section class="sec3">

        <?php  get_template_part('partials/manufacturer--slider-hardcode');  ?>

    </section>
    <section class="sec4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="side-by-side">
                        <div class="side-by-side__blurb">
                            <span class="subhead">About Us</span>
                            <h2><?php echo the_field('sec4__heading'); ?></h2>
                            <p><?php echo the_field('sec4__blurb'); ?></p>
                            <span class="spacer"></span>
                            <a href="/about-us" class="button-secondary"><?php echo the_field('sec4__button'); ?></a>
                        </div>         
                        <div class="side-by-side__image">
                            <img class="image" src="/wp-content/uploads/home-img-1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>How We Can Help</h2>
                        <a href="/services" class="more">More About our services</a>
                    </div>
                    <div class="home-slider-4">
                        
                            <?php

                                if( have_rows('cards__service') ): 

                                    while ( have_rows('cards__service') ) : the_row(); ?>
                                    <div class="slide-wrapper">
                                     <div class="card--service">
                                        <header class="card-header" style="background-image: url(<?php  the_sub_field('card__service_bg');  ?>);">
                                            <span class="title"><?php  the_sub_field('card__service_name');  ?></span>
                                        </header>
                                        <div class="card-content">
                                           <p><?php  the_sub_field('card__service_content');  ?></p>
                                           <a href="<?php  the_sub_field('card__service_button_link');  ?>"><?php  the_sub_field('card__service_button');  ?></a>
                                       </div>
                                    </div> 
                                    </div>
                                    <?php

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>
                                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec6">
        <div class="container">
            <div class="row">
                <div class=" side-by-side">
                    <div class="side-by-side__image">
                        <img class="image" src="/wp-content/uploads/home-img-2.png" alt="image">
                    </div>
                    <div class="side-by-side__blurb">
                        <!-- <span class="subhead">Quality</span> -->
                        <h2><?php echo the_field('sec6__heading'); ?></h2>
                        <ul class="side-by-side__blurb-list">
                            <li>
                                <img src="/wp-content/uploads/Icon-Quality-Bullet.svg">
                                <p><?php echo the_field('sec6__li1'); ?></p>
                            </li>
                            <li>
                                <img src="/wp-content/uploads/Icon-Quality-Bullet.svg">
                                <p><?php echo the_field('sec6__li2'); ?></p>
                            </li>
                            <li>
                                <img src="/wp-content/uploads/Icon-Quality-Bullet.svg">
                                <p><?php echo the_field('sec6__li3'); ?></p>
                            </li>
                        </ul>
                    </div>       
                </div>
            </div>
        </div>
    </section>
    <section class="sec7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>World Micro By The Numbers</h2>
                    <div class="wm__numbers-wrapper">   
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-1.png" alt="image"></div>
                                <span class="large-font"><span id="counter1">27</span></span> 
                                <span class="blurb">Years in<br>Business
                            </span>
                        </div>
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-2.png" alt="image"></div>
                                <span class="large-font"><span id="counter2">99.9</span>%</span> 
                                <span class="blurb">Average<br>Quality Rating
                            </span>
                        </div>
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-3.png" alt="image"></div>
                                <span class="large-font"><span id="counter3">5</span></span> 
                                <span class="blurb">Global<br>Locations
                            </span>
                        </div>
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-4.png" alt="image"></div>
                                <span class="large-font"><span id="counter4">90</span>+</span> 
                                <span class="blurb">Franchise<br>Lines
                            </span>
                        </div>
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-5.png" alt="image"></div>
                                <span class="large-font"><span id="counter5">7</span>K+</span> 
                                <span class="blurb">Global<br>Suppliers
                            </span>
                        </div>
                        <div class="number">
                                <div class="img-wrap"><img class="image" src="/wp-content/uploads/counter-icon-6.png" alt="image"></div>
                                <span class="large-font"><span id="counter6">8</span></span> 
                                <span class="blurb">Quality<br>Certifications
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 

get_footer();

?>