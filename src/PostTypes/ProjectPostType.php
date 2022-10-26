<?php

namespace HeadlesswpPluginStarter\PostTypes;

use HeadlesswpPluginStarter\Interfaces\Hookable;
use HeadlesswpPluginStarter\Interfaces\CustomPostType;

class ProjectPostType implements Hookable, CustomPostType {
    use PostTypeLabelUtility;

    const KEY = 'project';
    const GRAPHQL_SINGLE_NAME = 'Project';

    public function register_hooks(): void {
        add_action( 'init', [ $this, 'register' ] );
    }

    public function register(): void {
        register_post_type( self::KEY, [
			'labels'              => $this->generate_labels( 'Project', 'Projects' ),
            'public'              => true,
            'menu_icon'           => 'dashicons-portfolio',
            'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
            'rewrite'             => ['slug' => 'projects'],
            'show_in_graphql'     => true,
            'graphql_single_name' => self::GRAPHQL_SINGLE_NAME,
            'graphql_plural_name' => 'Projects',
		] );

        register_taxonomy( 'project_category', [ self::KEY ], [
            'labels'              => $this->generate_labels( 'Project Category', 'Project Categories' ),
            'public'              => true,
            'show_in_graphql'     => true,
            'hierarchical' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'projectcategories' ),
            'graphql_single_name' => 'ProjectCategory',
            'graphql_plural_name' => 'ProjectCategories',
        ] );

    }
}