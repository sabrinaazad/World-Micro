<?php 
/*Template Name: Manufacturers Template*/

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
					            <li>
					            	<a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a>
					            </li>
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
					<a href="/wp-content/uploads/World-Micro-Franchised-Line-Card-2020-ts.pdf" class="button-secondary" download>Download Line CARD PDF</a>
				</div>
				<div class="content-wrapper">

					<?php
					$args = array(
					  'post_type'   => 'manufacturers',
					  'post_status' => 'publish',
					  'orderby' => 'title',
    				  'order'   => 'ASC',
					  'supports' => array( 'thumbnail' ),
					  'nopaging' => true
					  
					 );
					 
					$manufacturers = new WP_Query( $args );
					if( $manufacturers->have_posts() ) :
					?>
					  <ul class="manufacturers-list">
					    <?php
					      while( $manufacturers->have_posts() ) :
					        $manufacturers->the_post();
					        ?>
					          <a href="<?php the_permalink(); ?>">
					          	<li>
									<div><?php printf( '%1$s', the_post_thumbnail() );  ?></div>
					          		<?php printf( '<h3>%1$s</h3> <p>%2$s</p>', get_the_title(), get_the_excerpt() );  ?>
					         	</li>
					          </a>
					        <?php
					      endwhile;
					      wp_reset_postdata();
					    ?>
					  </ul>
					<?php
					else :
					  esc_html_e( 'No manufacturers in this category!', 'text-domain' );
					endif;
				?>

				</div>
			</div>
		</div>
	</div>
</section>


<?php

get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');  

get_footer();
