<?php 
/*Template Name: Content Page Template */

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


<main class="default">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<?php the_content(); ?>

			</div>
		</div>
	</div>

	<section class="card-section">

		<?php get_template_part('partials/card--category'); ?>
		<?php get_template_part('partials/card--industry'); ?>
		<?php get_template_part('partials/card--service'); ?>

	</section>
</main>
<?php

get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');      

get_footer();
