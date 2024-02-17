<?php
	$args = array(
	  'post_type'   => 'manufacturers',
	  'post_status' => 'publish',
	  'supports' => array( 'thumbnail' )
	  
	 );
	 
	$manufacturers = new WP_Query( $args );
	if( $manufacturers->have_posts() ) :
	?>
	  <ul class="manufacturers-list">
	    <?php
	      while( $manufacturers->have_posts() ) :
	        $manufacturers->the_post();
	        ?>
	          <li><?php printf( '%1$s <br> %2$s <br> %3$s', the_post_thumbnail(), get_the_title(), get_the_excerpt() );  ?></li>
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