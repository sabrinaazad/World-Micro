<?php
/**
 * The template for displaying all single blog posts and attachments
 */
  
get_header(); 

$thumb = get_the_post_thumbnail_url();  

?>


<div class="header-hero" style="background-image: url('<?php echo $thumb;?>'), url(/wp-content/uploads/news-bg-1.png)">
	<h1><?php echo get_the_title() ?></h1>
</div>


<section class="section--breadcrumbs">
	<div id ="breadcrumbs" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>
</section>


<main class="main single-blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</main>


<section class="next-prev-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="prev-next-wrapper">
					<h3>You May Also Like</h3>
					<div class="news-card-wrapper">

					<!--START - - - THIS IS WHERE I STARTED IMPLEMENTING MY CODE TO PULL 2 LATEST-->
						<?php
						   // the query
						   $the_query = new WP_Query( array(
							  'posts_per_page' => 2,
							  'post__not_in' => array(get_the_ID()) //Exclude current post
						   ));
						?>

						<?php if ( $the_query->have_posts() ) : ?>
							
						  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						  	<div class="news-card">
						    <h3><?php the_title(); ?></h3>
						    <?php the_excerpt(); ?>
						    <div class="thumb">
					      	<a href="<?php echo get_permalink(); ?>">Read More</a>
					      </div>
						    </div>
						  <?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>

						<?php else : ?>

						  <p><?php __('No News'); ?></p>

						<?php endif; ?>
					<!--END - - - THIS IS WHERE I STARTED IMPLEMENTING MY CODE TO PULL 2 LATEST-->
					
				</div>
			</div>
		</div>
	</div>
</section>


<?php



get_template_part('partials/manufacturer--slider-hardcode');      

get_footer();
