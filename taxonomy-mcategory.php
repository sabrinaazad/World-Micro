<?php
/**
 * The template for displaying manufacturers archive page
 */

get_header(); 

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

?>


<div class="header-hero" style="background-image: url(/wp-content/uploads/prod-opt-1-scaled-1.jpg);">
	<h1><?php echo  $term->name ; ?></h1>
</div>


<section class="section--breadcrumbs">
    <div id ="breadcrumbs" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
</section>


<section class="manufacturer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<div class="sidebar-wrapper">
					<h3>Categories</h3>
					<?php

					$taxonomy = 'mcategory';
					$terms = get_terms($taxonomy); // Get all terms of a taxonomy

					if ( $terms && !is_wp_error( $terms ) ) :
					?>
					    <ul class="desktop-only">
					        <?php foreach ( $terms as $term ) { ?>
					            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
					        <?php } ?>
					    </ul>
					    <select class="mobile-only manufacturers-list">
					        <?php foreach ( $terms as $term ) { ?>
					            <option value="<?php echo get_term_link($term->slug, $taxonomy); ?>">
					            	<?php echo $term->name; ?>
					            </option>
					        <?php } ?>
					    </select>
					<?php endif;?>


				</div>
			</div>


			<div class="col-xs-12 col-sm-9">
				<div class="header-wrapper">
					<h3 class="desktop-only">Manufacturers</h3>
				</div>
				<div class="content-wrapper">
					
				<ul class="manufacturers-list">
				<?php query_posts($query_string . '&orderby=title&order=ASC');?>
					<?php
						if(have_posts()) : while(have_posts()) : the_post();
						?>
						<a href="<?php the_permalink(); ?>">
						 	<li>
								<div><?php printf( '%1$s', the_post_thumbnail() );  ?></div>
					          	<?php printf( '<h3>%1$s</h3> <p>%2$s</p>', get_the_title(), get_the_excerpt() );  ?>
					          </li>
					      </a>
					  	<?php
						endwhile; endif;
						?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<?php

get_template_part('partials/form--contact'); 

get_template_part('partials/manufacturer--slider-hardcode');      

get_footer();
