<?php

namespace Flynt\Components\BlockLandingTemp;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockLandingTemp',
        'label' => 'Block: Landing Temporary',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png',
                'wrapper' => [
                    'width' => '50',
                ]
            ],
            [
                'label' => __('Link to Home', 'flynt'),
                'name' => 'linkHome',
                'type' => 'url',
                'wrapper' => [
                    'width' => '50',
                ]
            ]
        ]
    ];
}
