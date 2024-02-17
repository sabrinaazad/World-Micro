<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>



<nav class="main-nav" id="mainNav">

    <div class="main-nav__bar">
        
        <div id="hamburgerButton" aria-label="mobile-nav" aria-label="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
        </div>

        <div class="main-nav__logo-container">
            <a href="/" class="main-nav__logo-wrapper first-logo-wrapper">
                
                <img class="main-nav__logo first-logo active-state" src="/wp-content/uploads/WorldMicro-Logo-TransparentNav-1.svg" onload="SVGInject(this)" alt="World Micro Logo">
                
                <img class="main-nav__logo first-logo sticky-state hide" src="/wp-content/uploads/WorldMicro-Logo-color-1.svg" onload="SVGInject(this)" alt="World Micro Logo">
            
            </a>

            <a href="/" class="main-nav__logo-wrapper second-logo-wrapper">
                
                <img class="main-nav__logo second-logo inactive-state" src="/wp-content/uploads/MIT-Logo-Color-Transparent.svg" onload="SVGInject(this)" alt="MIT Logo">
                
                <img class="main-nav__logo second-logo sticky-state hide" src="/wp-content/uploads/MIT-Logo-TransparentNav.svg" onload="SVGInject(this)" alt="MIT Logo">
                
            </a>
        </div>
        <div class="main-nav__drawer">
            
            <div class="main-nav-mobile__logo-container mobile-only">
                <a href="/" class="main-nav__logo-wrapper">
                    
                    <img class="main-nav__logo first-logo" src="/wp-content/uploads/WorldMicro-Logo-color-1.svg" onload="SVGInject(this)" alt="World Micro Logo">
                
                </a>

                <a href="/" class="main-nav__logo-wrapper">
                    
                    <img class="main-nav__logo second-logo" src="/wp-content/uploads/MIT-Logo-TransparentNav.svg" onload="SVGInject(this)" alt="MIT Logo">
                    
                </a>
            </div>

            <?php wp_nav_menu( array( 
                'theme_location' => 'primary-nav', 
                'container'=> '', 
                'items_wrap' => '
                    <ul class="primary-nav" id="primaryNav">
                        %3$s
                    </ul>', 
                'menu_id' => '',
                'walker' => new custom_primary_nav_walker
            ) ); 
            ?>

            <hr>

            <div class="secondary-mobile-nav__drawer">
                
                <?php wp_nav_menu( array( 
                    'theme_location' => 'secondary-mobile-nav', 
                    'container'=> '', 
                    'items_wrap' => '
                        <ul class="secondary-mobile-nav" id="secondaryMobileNav">
                            %3$s
                        </ul>', 
                    'menu_id' => ''
                ) ); 
                ?>

            </div>

            <hr>
            
            <div class="mobile-blue-button">
                <a href="/contact-us" class="button-secondary">Request Information</a>
            </div>

        </div>

    </div>

</nav>