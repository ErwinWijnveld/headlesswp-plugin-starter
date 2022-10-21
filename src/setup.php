<?php

add_action('acf/init', function() {
    add_filter( 'graphql_jwt_auth_secret_key', function() {
        return get_field('GRAPHQL_JWT_AUTH_SECRET_KEY', 'options');
    });
});