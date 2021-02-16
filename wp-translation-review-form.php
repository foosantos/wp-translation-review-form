<?php
/**
 * Plugin Name:     WP Translation Review Form
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wp-translation-review-form
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Translation_Review_Form
 */

include_once plugin_dir_path( __FILE__ ) . 'src/cpt/review-forms.php';
include_once plugin_dir_path( __FILE__ ) . 'src/taxonomy/locale.php';
include_once plugin_dir_path( __FILE__ ) . 'src/metabox/review-forms.php';

function wptrf_show_review_form() {

	if ( is_singular( 'review_forms' ) ) {
		include_once plugin_dir_path( __FILE__ ) . 'templates/review-form.php';
	}
}

add_action( 'the_content', 'wptrf_show_review_form' );

