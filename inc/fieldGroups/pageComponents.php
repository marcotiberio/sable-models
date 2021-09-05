<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockListingModels\getACFLayout(),
                    Components\BlockModelBio\getACFLayout(),
                    Components\BlockModelSpecs\getACFLayout(),
                    Components\BlockNewsRepeater\getACFLayout(),
                    Components\BlockSticker\getACFLayout(),
                    Components\BlockLandingAnimation\getACFLayout(),
                    Components\BlockLandingPage\getACFLayout(),
                    Components\BlockLandingTemp\getACFLayout(),
                    Components\FormContactForm7\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockVideoOembedModel\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockModelGalleryMobile\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'model'
                ]
            ]
        ]
    ]);
});
