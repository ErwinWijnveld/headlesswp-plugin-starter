<?php

namespace HeadlesswpPluginStarter\PostTypes;

trait PostTypeLabelUtility {
    /**
     * Generate labels for a post type.
	 *
	 * @param string $singular          Uppercase, singular label.
	 * @param string $plural            Uppercase, plural label.
	 * @param array  $additional_labels Additional labels.
	 *
	 * @return array Labels.
     */
	protected function generate_labels( string $singular, string $plural, array $additional_labels = [] ): array {
		$labels = [
			'name'                  => _x( $plural, 'post type general name', 'headlesswp-plugin-starter' ),
			'singular_name'         => _x( $singular, 'post type singular name', 'headlesswp-plugin-starter' ),
			'menu_name'             => _x( $plural, 'admin menu', 'headlesswp-plugin-starter' ),
			'name_admin_bar'        => _x( $singular, 'add new on admin bar', 'headlesswp-plugin-starter' ),
			'add_new'               => _x( 'Add New', $singular, 'headlesswp-plugin-starter' ),
			'add_new_item'          => __( "Add New {$singular}", 'headlesswp-plugin-starter' ),
			'new_item'              => __( "New {$singular}", 'headlesswp-plugin-starter' ),
			'edit_item'             => __( "Edit {$singular}", 'headlesswp-plugin-starter' ),
			'view_item'             => __( "View {$singular}", 'headlesswp-plugin-starter' ),
			'all_items'             => __( "All {$plural}", 'headlesswp-plugin-starter' ),
			'search_items'          => __( "Search {$plural}", 'headlesswp-plugin-starter' ),
			'parent_item_colon'     => __( "Parent {$plural}:", 'headlesswp-plugin-starter' ),
			'not_found'             => __( "No {$plural} found.", 'headlesswp-plugin-starter' ),
			'not_found_in_trash'    => __( "No {$plural} found in Trash.", 'headlesswp-plugin-starter' ),
			'archives'              => __( "{$singular} Archives", 'headlesswp-plugin-starter' ),
            'update_item'           => __( "Update {$singular}", 'headlesswp-plugin-starter' ),
            'insert_into_item'      => __( "Insert into {$singular}", 'headlesswp-plugin-starter' ),
            'uploaded_to_this_item' => __( "Uploaded to this {$singular}", 'headlesswp-plugin-starter' ),
            'items_list'            => __( "{$plural} list", 'headlesswp-plugin-starter' ),
            'items_list_navigation' => __( "{$plural} list navigation", 'headlesswp-plugin-starter' ),
            'filter_items_list'     => __( "Filter {$plural} list", 'headlesswp-plugin-starter' ),
		];

		return array_merge( $labels, $additional_labels );
	}
}