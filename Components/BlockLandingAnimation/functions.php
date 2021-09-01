<?php

namespace Flynt\Components\BlockLandingAnimation;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockLandingAnimation',
        'label' => 'Block: Landing Animation',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
                'wrapper' => [
                    'width' => '100',
                ]
            ]
        ]
    ];
}
