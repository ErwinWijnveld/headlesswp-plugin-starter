<?php

namespace HeadlesswpPluginStarter\Acf;

use HeadlesswpPluginStarter\Interfaces\Hookable;

class AcfSetup implements Hookable {

    public function register_hooks(): void {
        add_action( 'init', [ $this, 'register' ] );
    }

    public function register(): void {
        if( class_exists('ACF') ) {

            // Load flexible content partials
            $fields = [
                new Post(),
                new Page(),
                new OptionsMenu(),
                new Project(),
            ];
        
            if (!empty($fields)) {
            
                array_walk($fields, function($field) {
                    acf_add_local_field_group($field->index()->build());
                });
            }
        }
    }
}