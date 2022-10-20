<?php

/**
 * Simple function to pretty up our field partial includes.
 *
 * @param  mixed $partial
 * @return mixed
 */
 function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);
    return include(plugin_dir_path(__DIR__)."src/Acf/{$partial}.php");
}
