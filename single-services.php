<?php 
/**
 * The template for displaying all services single posts and attachments
 */
get_header();

get_template_part('partials/header--hero');  

?>

<section class="section--breadcrumbs">
	<div id ="breadcrumbs" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>
</section>


<main class="main single-post">
	<section class="single-services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-7">
					

            		<?php while ( have_posts() ) : the_post(); ?>
                
                		<?php  the_content();  ?>
                
         
            		<?php endwhile; ?>


				</div>
				<div class="col-xs-12 col-sm-4 col-sm-offset-1">
					
					<?php  get_template_part('partials/sidebar--ribbon');  ?>

				</div>
			</div>
		</div>
	</section>

	<section class="card-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2><?php  echo the_field('card__category_title');  ?></h2>
				</div>
			</div>
		</div>
		
		<?php get_template_part('partials/card--service'); ?>

	</section>
</main>

<?php

get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');        

get_footer();

