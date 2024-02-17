<?php 
/*Template Name: 404 Template*/

get_header(); 

?>

<div class="header-hero" style="background-image: url(/wp-content/uploads/industry-1-bg.png);">
	<h1>404</h1>
</div>

<main class="main does-not-exist">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>We are sorry.</h2>
				<p class="medium-paragraph">The page you are looking for does not exist.</p>
				<p>If you need further assistance, please <a href="/contact-us">contact us</a> or fill out the form below.</p>
			</div>
		</div>
	</div>
</main>

<?php

get_template_part('partials/form--contact');  

get_template_part('partials/manufacturer--slider-hardcode');      

get_footer();