<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flexible_layout = new FieldsBuilder('flexible_layout');

// Load header partials

// Load content partials
$spacer = get_field_partial('partials.spacer');
$wysiwyg = get_field_partial('partials.wysiwyg');
$section__image_text = get_field_partial('partials.section__image-text');
$section__image_banner = get_field_partial('partials.section__image-banner');
$section__image_slider = get_field_partial('partials.section__image-slider');

$flexible_layout

    ->addFlexibleContent('flex_content', ['button_label' => 'Add Content Row'])

    // Load layouts
    ->addLayout($spacer)
    ->addLayout($wysiwyg)
    ->addLayout($section__image_text)
    ->addLayout($section__image_banner)
    ->addLayout($section__image_slider)

    ->endFlexibleContent();
return $flexible_layout;
