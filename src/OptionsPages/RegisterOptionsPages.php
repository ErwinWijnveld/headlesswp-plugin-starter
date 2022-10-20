<?php

namespace HeadlesswpPluginStarter\OptionsPages;

use HeadlesswpPluginStarter\Interfaces\Hookable;

class RegisterOptionsPages implements Hookable {

    public function register_hooks(): void {
        add_action( 'init', [ $this, 'register' ] );
    }

    public function register(): void {
        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page(array(
                'page_title'        => __('Menu'),
                'menu_title'        => __('Menu'),
                'menu_slug'         => 'options-menu',
                'update_button'     => 'Bewaar Menu',
                'updated_message'   => 'Menu opgeslagen',
                'position'          => '4',
                'capability'        => 'edit_posts',
                'redirect'          => false
            ));
        }
    }
}