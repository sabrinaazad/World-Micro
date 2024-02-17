<?php
/* MENUS */
function register_my_menus() {
    register_nav_menus(
        array(
        'primary-nav' => __( 'Primary Nav' )
        )
    );
    register_nav_menus(
        array(
        'secondary-mobile-nav' => __( 'secondary Mobile Nav' )
        )
    );
    register_nav_menus(
        array(
        'footer-nav' => __( 'Footer Nav' )
        )
    );
    register_nav_menus(
        array(
        'footer-secondary-nav' => __( 'Footer Secondary Nav' )
        )
    );
}

add_action( 'init', 'register_my_menus' );



class custom_primary_nav_walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

      $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
 
      if( $permalink && $permalink != '#' ) {
        $output .= '<a href="' . $permalink . '">';
      } else {
        $output .= '<span class="">';
      }
       
      $output .= $title;

      if( $description != '' && $depth == 0 ) {
        $output .= '<small class="description">' . $description . '</small>';
      }

      if( $permalink && $permalink != '#' ) {
        $output .= '
        <div class="icon"><div class="horizontal"></div>
        <div class="vertical"></div></div></a>';
      } else {
        $output .= '
        <div class="icon"><div class="horizontal"></div>
        <div class="vertical"></div></div></span>';
      }
    }
}

class custom_footer_nav_walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

      $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
 
      if( $permalink && $permalink != '#' ) {
        $output .= '<a href="' . $permalink . '">';
      } else {
        $output .= '<span class="">';
      }
       
      $output .= $title;

      if( $description != '' && $depth == 0 ) {
        $output .= '<small class="description">' . $description . '</small>';
      }

      if( $permalink && $permalink != '#' ) {
        $output .= '
        </a>';
      } else {
        $output .= '
        </span>';
      }
    }
}

/* SCRIPTS & STYLES */
function custom_scripts() {
    /* styles */
    wp_enqueue_style( 'typekit-fonts', '//use.typekit.net/vsc6nlx.css' );

    wp_enqueue_style( 'slick-slider-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '1.0.0', true );

    wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() . "/css/bootstrap.min.css"  );

    wp_enqueue_style( 'bootstrap-theme-styles', get_stylesheet_directory_uri() . "/css/bootstrap-theme.min.css"  );

    wp_enqueue_style( 'site-styles', get_stylesheet_uri() );

    /* scripts */
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js', '1.0.0', true );

    wp_enqueue_script( 'svg-inject', get_template_directory_uri() . '/lib/svg-inject.js', '1.0.0', true );

    wp_enqueue_script( 'slick-slider-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '1.0.0', true );

    wp_enqueue_script( 'CountifyJS', get_template_directory_uri() . '/scripts/countify.js', array(), '1.0.0', true );
    
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/df25481738.js', '1.0.0', true );

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts/scripts.js', array(), '1.0.0', true );

     wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );




/* WIDGETS */
function footer_widget() {

    register_sidebar(array(
        'name' => 'Footer Locations Widget',
        'id' => 'footer_widget',
        'before_widget' => '<div class="footer-widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'footer_widget' );


function topbar_widget() {

    register_sidebar(array(
        'name' => 'Topbar Widget',
        'id' => 'topbar_widget',
        'before_widget' => '<div class="topbar-widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'topbar_widget' );



// ADD THUMBNAIL SUPPORT
add_theme_support('post-thumbnails'); 

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => 'Categories',
		'singular_name'              => 'Category',
        'menu_name'                  => 'Categories',
        'all_items'                  => 'Categories',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'orderby'                    => 'title',
        'order'                      => 'ASC',
        'show_tagcloud'              => false,
        'rewrite'                    => array('slug' => 'manufacturers'),
	);
	register_taxonomy( 'mcategory', array( 'manufacturer' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

/* CUSTOM POST TYPES */
function custom_posttype() {

    register_post_type( 'manufacturers',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Manufacturers' ),
                'singular_name' => __( 'Manufacturer' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'manufacturers/%mcategory%', "with_front" => true ),
            'show_in_rest' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
            'taxonomies' => array('mcategory' ),
         )
    );


    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );

    register_post_type( 'industries',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Industries' ),
                'singular_name' => __( 'Industry' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'industries'),
            'show_in_rest' => true,
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'custom_posttype' );


// Allow for nested manufacturer/category URL structure
add_filter('post_type_link', 'cj_update_permalink_structure', 10, 2);
function cj_update_permalink_structure( $post_link, $post )
{
    if ( false !== strpos( $post_link, '%mcategory%' ) ) {
        $taxonomy_terms = get_the_terms( $post->ID, 'mcategory' );
        if(!empty( $taxonomy_terms ) && !is_wp_error( $taxonomy_terms )){
            foreach ( $taxonomy_terms as $term ) {
                if ( ! $term->parent ) {
                    $post_link = str_replace( '%mcategory%', $term->slug, $post_link );
                }
            }
        }
    }
    return $post_link;
}

// Change the number of posts that show up on the taxonomy template for Manufacturers
function custom_tax_post_count ( $query ) {
    if (($query->is_tax(array('mcategory')) ))
    $query->set( 'posts_per_page', '100' );
}
 add_action( 'pre_get_posts', 'custom_tax_post_count' );



add_theme_support( 'title-tag' );



function numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link( '<img src="/wp-content/uploads/left-arrow-dark.png">' ) );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link( '<img src="/wp-content/uploads/right-arrow-dark.png">' ) );
 
    echo '</ul></div>' . "\n";
 
}