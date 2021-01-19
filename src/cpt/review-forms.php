<?php

/**
 * Create CPT 'review_forms'
 *
 * @return void
 */
function review_forms() {

	$labels = array(
		'name'                  => _x( 'Review Forms', 'Post Type General Name', 'wp-translation-review-form' ),
		'singular_name'         => _x( 'Review Form', 'Post Type Singular Name', 'wp-translation-review-form' ),
		'menu_name'             => __( 'Review Forms', 'wp-translation-review-form' ),
		'name_admin_bar'        => __( 'Review Form', 'wp-translation-review-form' ),
		'archives'              => __( 'Item Archives', 'wp-translation-review-form' ),
		'attributes'            => __( 'Item Attributes', 'wp-translation-review-form' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wp-translation-review-form' ),
		'all_items'             => __( 'All Items', 'wp-translation-review-form' ),
		'add_new_item'          => __( 'Add New Item', 'wp-translation-review-form' ),
		'add_new'               => __( 'Add New', 'wp-translation-review-form' ),
		'new_item'              => __( 'New Item', 'wp-translation-review-form' ),
		'edit_item'             => __( 'Edit Item', 'wp-translation-review-form' ),
		'update_item'           => __( 'Update Item', 'wp-translation-review-form' ),
		'view_item'             => __( 'View Item', 'wp-translation-review-form' ),
		'view_items'            => __( 'View Items', 'wp-translation-review-form' ),
		'search_items'          => __( 'Search Item', 'wp-translation-review-form' ),
		'not_found'             => __( 'Not found', 'wp-translation-review-form' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wp-translation-review-form' ),
		'featured_image'        => __( 'Featured Image', 'wp-translation-review-form' ),
		'set_featured_image'    => __( 'Set featured image', 'wp-translation-review-form' ),
		'remove_featured_image' => __( 'Remove featured image', 'wp-translation-review-form' ),
		'use_featured_image'    => __( 'Use as featured image', 'wp-translation-review-form' ),
		'insert_into_item'      => __( 'Insert into item', 'wp-translation-review-form' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-translation-review-form' ),
		'items_list'            => __( 'Items list', 'wp-translation-review-form' ),
		'items_list_navigation' => __( 'Items list navigation', 'wp-translation-review-form' ),
		'filter_items_list'     => __( 'Filter items list', 'wp-translation-review-form' ),
	);
	$args = array(
		'label'                 => __( 'Review Form', 'wp-translation-review-form' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'comments', 'revisions' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-strikethrough',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'review_forms', $args );

}
add_action( 'init', 'review_forms', 0 );
