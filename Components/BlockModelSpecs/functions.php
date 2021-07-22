<?php

namespace Flynt\Components\BlockModelSpecs;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockModelSpecs',
        'label' => 'Block: Model Specs',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Name', 'flynt'),
                'name' => 'name',
                'type' => 'text',
            ],
            [
                'label' => __('Social Icon', 'flynt'),
                'name' => 'socialIcon',
                'type' => 'image',
                'preview_size' => 'small',
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png',
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Social Link', 'flynt'),
                'name' => 'socialLink',
                'type' => 'url',
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add',
                'sub_fields' => [
                    [
                        'label' => __('Spec', 'flynt'),
                        'name' => 'spec',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Details', 'flynt'),
                        'name' => 'details',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ]
                ]
            ]
        ]
    ];
}
