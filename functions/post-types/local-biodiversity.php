<?php 
// Register Custom Post Type
function biodiversity_post_type() {

	$labels = array(
		'name'                  => _x( 'Local Biodiversity', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Local Biodiversity', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Local Biodiversity', 'text_domain' ),
		'name_admin_bar'        => __( 'Local Biodiversity', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Local Biodiversity', 'text_domain' ),
		'add_new_item'          => __( 'Add new Biodiversity', 'text_domain' ),
		'add_new'               => __( 'New Biodiversity', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Biodiversity', 'text_domain' ),
		'update_item'           => __( 'Update Biodiversity', 'text_domain' ),
		'view_item'             => __( 'View Biodiversity', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Biodiversity', 'text_domain' ),
		'not_found'             => __( 'No local biodiversity found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No local biodiversity found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Local Biodiversity', 'text_domain' ),
		'description'           => __( 'Local Biodiversity Posts', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-replies',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'local-biodiversity', $args );

}
add_action( 'init', 'biodiversity_post_type', 0 );