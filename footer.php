<?php wp_footer(); ?>




<footer id="footer" class="footer">
<div class="footer-wrapper">
    

    <div class="footer-bar">
        <a href="/">
            <img class="footer-bar__logo" src="/wp-content/uploads/WM-logo-full-inverse.png" alt="World Micro logo">
        </a>
        <span class="separator"></span>
        <a href="tel:8004005026">
            <span class="footer-bar__number">800-400-5026</span>
        </a>
    </div>



    <nav class="footer-nav-container" id="footerNavContainer">

        <div class="footer-nav__drawer">
            <?php wp_nav_menu( array( 
                'theme_location' => 'footer-nav', 
                'container'=> '', 
                'items_wrap' => '
                    <ul class="footer-nav" id="footerNav">
                        %3$s
                    </ul>', 
                'menu_id' => '',
                'walker' => new custom_footer_nav_walker
            ) ); 
            ?>

        </div>

        <div class="footer-nav__drawer">
            <?php wp_nav_menu( array( 
                'theme_location' => 'footer-secondary-nav', 
                'container'=> '', 
                'items_wrap' => '
                    <ul class="footer-secondary-nav" id="footerSecodaryNav">
                        %3$s
                    </ul>', 
                'menu_id' => '',
                'walker' => new custom_footer_nav_walker
            ) ); 
            ?>

        </div>
        
        <hr>

        <div class="footer-nav__drawer">
            <?php
                if (is_active_sidebar( 'footer_widget' ) ) : ?>

                <?php dynamic_sidebar( 'footer_widget' ); ?>

            <?php endif; ?>

        </div>

        <hr>

    </nav>

    <div class="footer-nav__drawer">
        <div class="footer-nav__logo-wrapper">
            <img class="footer-bar__logo" src="/wp-content/uploads/NQA_AC0056_bw@2x.png" alt="Aerospace Industry Distributor">
            <img class="footer-bar__logo" src="/wp-content/uploads/NQA_AS9120_BW@2x.png" alt="Aerospace & Defense">
            <img class="footer-bar__logo" src="/wp-content/uploads/NQA_ISO9001_bw@2x.png" alt="Quality Management">
            <img class="footer-bar__logo" src="/wp-content/uploads/itar-bw@2x.png" alt="ITAR">
            <img class="footer-bar__logo" src="/wp-content/uploads/gidep-logo-white@2x.png" alt="GIDEP">
            <img class="footer-bar__logo" src="/wp-content/uploads/Group-232@2x.png" alt="ESD Association">
            <img class="footer-bar__logo" src="/wp-content/uploads/footer-logo-7.png" alt="ecia member">
        </div>
    </div>
    
    <hr>

    <div class="footer-nav__drawer">
        <div class="footer-nav__social-wrapper">
            <p>Copyright &copy; <?php echo date("Y"); ?>. All rights reserved, World Micro.</p>
            <!-- <span class="title mobile">Social</span>
            <div class="social-icons">
                <span class="title desktop">Social</span>
                <a href="https://www.facebook.com/WorldMicro">
                    <img class="footer-bar__logo" src="/wp-content/uploads/social-facebook.png" alt="facebook">
                </a>
                <a href="https://twitter.com/worldmicro">
                    <img class="footer-bar__logo" src="/wp-content/uploads/social-twitter.png" alt="twitter">
                </a>
                <a href="https://www.linkedin.com/company/world-micro-components">
                    <img class="footer-bar__logo" src="/wp-content/uploads/social-linkedin.png" alt="linkedin">
                </a>
            </div> -->
        </div>  
    </div>
</div>
</footer>


</body>
</html>