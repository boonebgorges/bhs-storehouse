<?php

namespace BHS\Storehouse;

/**
 * Schema.
 *
 * @since 1.0.0
 */
class Schema {
	/**
	 * Hook into WP.
	 *
	 * @since 1.0.0
	 */
	public function set_up_hooks() {
		add_action( 'init', array( $this, 'register_post_types' ) );
	}

	/**
	 * Register post types.
	 *
	 * - bhssh_record is a record.
	 *
	 * @since 1.0.0
	 */
	public function register_post_types() {
		register_post_type( 'bhssh_record', array(
			'label' => __( 'PastPerfect Records', 'webwork' ),
			'labels' => array(
				'name' => __( 'PastPerfect Records', 'webwork' ),
				'all_items' => __( 'Manage Records', 'webwork' ),
				'singular_name' => __( 'PastPerfect Record', 'webwork' ),
				'add_new_item' => __( 'Add New PastPerfect Record', 'webwork' ),
				'edit_item' => __( 'Edit PastPerfect Record', 'webwork' ),
				'new_item' => __( 'New PastPerfect Record', 'webwork' ),
				'view_item' => __( 'View PastPerfect Record', 'webwork' ),
				'search_items' => __( 'Search PastPerfect Records', 'webwork' ),
				'not_found' => __( 'No PastPerfect Records found', 'webwork' ),
				'not_found_in_trash' => __( 'No PastPerfect Records found in Trash.', 'webwork' ),
			),
			'menu_icon' => 'dashicons-book-alt',
			'public' => true,
		) );
	}
}
