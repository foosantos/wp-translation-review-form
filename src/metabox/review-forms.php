<?php

/**
 * Adding 'cmb2' vendor
 */
if ( file_exists( dirname( __FILE__ ) . '/../../vendors/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/../../vendors/cmb2/init.php';
}

/**
 * Define the metabox and field configurations.
 */
function wptrf_review_issues() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'wptrf_review_issues_metabox',
		'title'         => __( 'Review Form', 'wp-translation-review-form' ),
		'object_types'  => array( 'review_forms', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$group_field_id = $cmb->add_field( array(
		'id'          => 'wptrf_review_issues_group',
		'type'        => 'group',
		'description' => __( 'Issues with translations', 'wp-translation-review-form' ),
		'options'     => array(
			'group_title'       => __( 'Issue {#}', 'wp-translation-review-form' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => __( 'Add issue', 'wp-translation-review-form' ),
			'remove_button'     => __( 'Remove issue', 'wp-translation-review-form' ),
			'sortable'          => true,
			'closed'         => true, // true to have the groups closed by default
		),
) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Issue title', 'wp-translation-review-form' ) ,
		'id'   => 'title',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => __( 'Description', 'wp-translation-review-form' ),
		'description' => __( 'Write a short description of the issue', 'wp-translation-review-form' ),
		'id'   => 'description',
		'type' => 'wysiwyg',
		'options' => array(
			'wpautop' => true, // use wpautop?
			'media_buttons' => false, // show insert/upload button(s)
			'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
			'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			'tabindex' => '',
			'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			'editor_class' => '', // add extra class(es) to the editor textarea
			'teeny' => true, // output the minimal editor config used in Press This
			'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			'quicktags' => false // load Quicktags, can be used to pass settings directly to Quicktags using an array()
		),
	) );

	}

add_action( 'cmb2_admin_init', 'wptrf_review_issues' );
