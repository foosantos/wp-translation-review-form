<?php

/**
 * Create taxonomy 'locale'
 *
 * @return void
 */
function wptrf_locale() {

	$labels = array(
		'name'                       => _x( 'Locales', 'Taxonomy General Name', 'wp-translation-review-form' ),
		'singular_name'              => _x( 'Locale', 'Taxonomy Singular Name', 'wp-translation-review-form' ),
		'menu_name'                  => __( 'Locale', 'wp-translation-review-form' ),
		'all_items'                  => __( 'All Items', 'wp-translation-review-form' ),
		'parent_item'                => __( 'Parent Item', 'wp-translation-review-form' ),
		'parent_item_colon'          => __( 'Parent Item:', 'wp-translation-review-form' ),
		'new_item_name'              => __( 'New Item Name', 'wp-translation-review-form' ),
		'add_new_item'               => __( 'Add New Item', 'wp-translation-review-form' ),
		'edit_item'                  => __( 'Edit Item', 'wp-translation-review-form' ),
		'update_item'                => __( 'Update Item', 'wp-translation-review-form' ),
		'view_item'                  => __( 'View Item', 'wp-translation-review-form' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'wp-translation-review-form' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'wp-translation-review-form' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wp-translation-review-form' ),
		'popular_items'              => __( 'Popular Items', 'wp-translation-review-form' ),
		'search_items'               => __( 'Search Items', 'wp-translation-review-form' ),
		'not_found'                  => __( 'Not Found', 'wp-translation-review-form' ),
		'no_terms'                   => __( 'No items', 'wp-translation-review-form' ),
		'items_list'                 => __( 'Items list', 'wp-translation-review-form' ),
		'items_list_navigation'      => __( 'Items list navigation', 'wp-translation-review-form' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'wptrf_locale', array( 'review_forms' ), $args );

}
add_action( 'init', 'wptrf_locale', 0 );
