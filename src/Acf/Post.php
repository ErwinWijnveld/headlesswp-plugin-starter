<?php

namespace HeadlesswpPluginStarter\Acf;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Post {
    public static function index() {
        $flexiblePost = new FieldsBuilder('flexiblePost', [ 
            'position' => 'acf_after_title',
            'hide_on_screen'    => [
                'the_content'
            ],
            'show_in_graphql' => true,
            'graphql_field_name' => 'flexiblePost'
        ]);
        
        $flexiblePost
            ->setLocation('post_type', '==', 'post');
        
        
        // Load content partials
        $flexible_layout = get_field_partial('flexible-layout');   
        
        $flexiblePost
            ->addFields($flexible_layout)
            
        ;return $flexiblePost;
    }
}