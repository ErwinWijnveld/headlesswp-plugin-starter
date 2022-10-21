<?php

namespace HeadlesswpPluginStarter\Acf;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Project {
    public static function index() {
        $flexibleProject = new FieldsBuilder('flexibleProject', [ 
            'position' => 'acf_after_title',
            'hide_on_screen'    => [
                'the_content'
            ],
            'show_in_graphql' => true,
            'graphql_field_name' => 'flexibleProject'
        ]);
        
        $flexibleProject
            ->setLocation('post_type', '==', 'project');
        
        
        // Load content partials
        $flexible_layout = get_field_partial('flexible-layout');   
        
        $flexibleProject
            ->addFields($flexible_layout)
            
        ;return $flexibleProject;
    }
}