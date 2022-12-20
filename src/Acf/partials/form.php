<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$form = new FieldsBuilder('form');
 
$form
    ->addGroup('form')
        ->addNumber('form_id', ['label' => 'ID van het gravityforms formulier'])
    ->endGroup();

return $form;
