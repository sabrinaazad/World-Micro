<?php
/**
 * The template for displaying blog archive page
 */

get_header();

?>

<div class="header-hero" style="background-image: url(/wp-content/uploads/news-bg-1.png);">
	<h1>News</h1>
</div>


<section class="section--breadcrumbs">
    <div id ="breadcrumbs" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
</section>


<main class="main blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="news-card-wrapper">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="news-card">
						<p><?php the_date() ?></p>
                		<h3><?php  the_title();  ?></h3>
                		<?php  the_excerpt();  ?>
         				<a href="<?php echo get_permalink(); ?>">Read More</a>
         			</div>
            	<?php endwhile; ?>
				</div>
				<div class="pagination-wrapper">

	                <?php numeric_posts_nav(); ?>
            	
            	</div>
			</div>
		</div>
	</div>
</main>
<?php



get_template_part('partials/manufacturer--slider-hardcode');      

get_footer();
