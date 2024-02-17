<?php 
/*Template Name: Contact Template*/

get_header(); 

?>

<main class="main contact">
    <div class="contact-form">
        <div class="heading">
            <h1>Contact Us</h1>
            <p>Give us a call <img src="/wp-content/uploads/contact-phone.png" alt="phone" style="width: 1.5em;">, send us an e-mail <img src="/wp-content/uploads/contact-email.png" alt="phone" style="width: 1.5em;">, connect with us on LinkedIn <img src="/wp-content/uploads/contact-linkedin.png" alt="phone" style="width: 1.5em;">, set up a Zoom video conference <img src="/wp-content/uploads/contact-zoom.png" alt="phone" style="width: 1.5em;">-   World Micro is here to help.</p>
            <h2><a href="tel:8004005026">800-400-5026</a></h2>
        </div>
        <?php echo do_shortcode("[contact-form-7 id='227' title='Contact form']"); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="locations-wrapper">
                    <h2>Locations</h2>
                    <div class="locations">
                        <div class="box">
                            <h4>US HEADQUARTERS</h4>
                            <span>205 Hembree Park Dr.<br/>
                            Roswell, GA 30076<br/><br/>

                            Phone: <a href="tel:7706981900">(770) 698-1900</a><br/>
                            Fax: (770) 698-1901<br/>
                            <a href="mailto:sales@worldmicro.com">sales@worldmicro.com</a></span>
                        </div>
                        <div class="box">
                            <h4>NEW JERSEY BRANCH</h4>
                            <span>400 Morris Ave<br/>
                            Suite 268<br/>
                            Denville, NJ 07834<br/><br/>
                            
                            Phone: <a href="tel:9737844421">(973) 784-4421</a><br/>
                            <a href="mailto:info@worldmicro.com">info@worldmicro.com</a></span>
                        </div>
                        <div class="box">
                            <h4>SOUTHEAST ASIA HUB</h4>
                            <span>5, Jalan Batu Maung<br/>
                            11960 Batu Maung<br/>
                            Pulau Pinang, Malaysia<br/><br/>

                            Direct Line: <a href="tel:046371283">04-6371283</a><br/>
                            <a href="mailto:asia@worldmicro.com">asia@worldmicro.com</a></span>
                        </div>
                        <div class="box">
                            <h4>MEXICO BRANCH</h4>
                            <!-- <span>Need Fist Line Here<br/>
                            Need Second Line Here<br/><br/> -->

                            Phone: <a href="tel:3338445433">333.844.54.33</a><br/>
                            <a href="mailto:mexico@worldmicro.com">mexico@worldmicro.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php

get_template_part('partials/manufacturer--slider-hardcode');     

get_footer();