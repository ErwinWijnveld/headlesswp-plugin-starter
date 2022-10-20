<?php

namespace HeadlesswpPluginStarter\Acf;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Page {
    public static function index() {
        $flexiblePage = new FieldsBuilder('flexiblePage', [ 
            'position' => 'acf_after_title',
            'hide_on_screen'    => [
                'the_content'
            ],
            'show_in_graphql' => true,
            'graphql_field_name' => 'flexiblePage'
        ]);
        
        $flexiblePage
            ->setLocation('post_type', '==', 'page');
        
        
        // Load content partials
        $flexible_layout = get_field_partial('flexible-layout');   
        
        $flexiblePage
            ->addFields($flexible_layout)
            
        ;return $flexiblePage;
    }
}