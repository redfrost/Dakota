<?php

// Custom post types: Portfolio
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'portfolio', 
		array(			
			'labels' => array(
			'name' => __( 'Portfolios' ),
			'singular_name' => __( 'Portfolio' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit' ),
			'new_item' => __( 'New' ),
			'view' => __( 'View' ),
			'view_item' => __( 'View' ),
			'search_items' => __( 'Search' ),
			'not_found' => __( 'Nothing found' ),
			'not_found_in_trash' => __( 'Nothing found in Trash' ),
		),

			'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/admin_icon_portfolio.png',
			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail' ),
			'taxonomies' => array( 'post_tag' ),
			'public' => true,
			'menu_position' => 20,
		)
	);
	
	register_taxonomy('portfolio_category',
		array(
			'portfolio', 'post'), array(
		    'hierarchical' => true,
		    'labels' => array(
                'name' => __( 'Project Categories' ),
                'singular_name' => __( 'Project Category' )
            ),
		    'show_ui' => true,
		    'query_var' => true,
		    'show_in_nav_menus' => true,
		    'rewrite' => array('slug' => 'portfolio-category', 'with_front' => false), 
     	)     	     
    );
 
}





/*
// Custom post types: Product
add_action( 'init', 'create_my_post_types_02' );

function create_my_post_types_02() {
	register_post_type( 'product', 
		array(			
			'labels' => array(
			'name' => __( 'Products' ),
			'singular_name' => __( 'Product' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit' ),
			'new_item' => __( 'New' ),
			'view' => __( 'View' ),
			'view_item' => __( 'View' ),
			'search_items' => __( 'Search' ),
			'not_found' => __( 'Nothing found' ),
			'not_found_in_trash' => __( 'Nothing found in Trash' ),
		),

			'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/admin_icon_portfolio.png',
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
			'taxonomies' => array( 'post_tag' ),
			'public' => true,
			'menu_position' => 20,
		)
	);
	
	register_taxonomy('product_category',
		array(
			'product'), array(
		    'hierarchical' => true,
		    'labels' => $labels,
		    'show_ui' => true,
		    'query_var' => true,
		    'show_in_nav_menus' => true,
		     'rewrite' => array('slug' => 'product-category', 'with_front' => false), 
     	)     	     
    );
     
}
*/

?>