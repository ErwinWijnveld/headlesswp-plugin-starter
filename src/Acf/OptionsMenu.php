<?php

namespace HeadlesswpPluginStarter\Acf;

use StoutLogic\AcfBuilder\FieldsBuilder;

class OptionsMenu {
    public static function index() {
        
        $menu_options = new FieldsBuilder('options_menu', [
            'show_in_graphql' => true
        ]);
        
        $menu_options
            ->setLocation('options_page', '==', 'options-menu');

        $menu_options


            ->addTab('Header')
                ->addGroup('header')
                    ->addImage('logo')->setWidth(20)
                    ->addRepeater('menu_items', ['layout' => 'block'])->setWidth(80)
                        ->addLink('link')
                    ->endRepeater()
                ->endGroup()

            ->addTab('Footer')
                ->addGroup('footer')
                    ->addImage('logo')
                        ->setWidth(50)

                    ->addGroup('sitemap')
                        ->setWidth(50)
                        ->addText('title')
                        ->addRepeater('links')
                            ->addLink('link')
                        ->endRepeater()
                    ->endGroup()

                    ->addGroup('contact')
                        ->setWidth(50)
                        ->addText('title')
                        ->addRepeater('links')
                            ->addLink('link')
                        ->endRepeater()
                    ->endGroup()
                    
                    ->addGroup('socials')
                        ->setWidth(50)
                        ->addText('title')
                        ->addRepeater('links')
                            ->addLink('link')
                            ->addImage('icon')
                        ->endRepeater()
                    ->endGroup()
                    
                ->endGroup()

            ->addTab('login_page')
                ->addImage('login_background_image')
                ->addImage('login_logo')

            ->addTab('404')
                ->addGroup('404')
                    ->addText('title')
                    ->addText('text')
                    ->addLink('button_left')
                        ->setWidth(50)
                    ->addLink('button_right')
                        ->setWidth(50)
                ->endGroup()

            ->addTab('General')
                ->addText('GRAPHQL_JWT_AUTH_SECRET_KEY')
                ->addText('WORDPRESS_PREVIEW_SECRET', ['default_value' => 'HeadlessPreviewSecret'])
                
        ;return $menu_options;
    }
}