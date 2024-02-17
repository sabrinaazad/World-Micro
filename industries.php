<?php 
/*Template Name: Industries Template*/

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


<section class="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7">
				<?php 

				the_content();

				?> 
			</div>
			<div class="col-xs-12 col-sm-4 col-sm-offset-1">
				
				<?php  get_template_part('partials/sidebar--ribbon');  ?>

			</div>
		</div>
	</div>
</section>

<section class="card-section">
	<?php if( get_field('card__category_title') ): ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2><?php  echo the_field('card__category_title');  ?></h2>
				</div>
			</div>
		</div>
		<?php endif; ?>

	<?php get_template_part('partials/card--industry'); ?>

</section>
<?php


get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');        

get_footer();

