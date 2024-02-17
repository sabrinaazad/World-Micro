<?php 
/**
 * The template for displaying all manufacturers single posts and attachments
 */

get_header();

?>


<div class="header-hero" style="background-image: url(/wp-content/uploads/prod-opt-1-scaled-1.jpg);">
	<h1><?php the_title() ?></h1>
</div>


<section class="section--breadcrumbs">
	<div id ="breadcrumbs" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>
</section>


<main class="main single-post">
	<section class="single-manufacturers">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-7">
					

            		<?php while ( have_posts() ) : the_post(); ?>
                
              			<h2><?php  the_title();  ?></h2>
                		<p><?php  the_content();  ?></p>
                
         
            		<?php endwhile; ?>


				</div>
				<div class="col-xs-12 col-sm-4 col-sm-offset-1">
					<div class="qandc-wrapper">
					    <div class="ribbon">
					    <?php the_post_thumbnail() ?>
					    </div>
					    <div class="blurb">
					        <h3>Products</h3>
					        <p>
					        <?php  the_field('qandc_manufacturer');  ?>
					        </p>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<?php

get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');        

get_footer();

