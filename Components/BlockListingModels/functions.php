<?php

namespace Flynt\Components\BlockListingModels;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

add_filter('Flynt/addComponentData?name=BlockListingModels', function ($data) {

    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts($data[$postType]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockListingModels',
        'label' => 'Block: Listing Models',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Background  Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'color_picker',
                'wrapper' => [
                    'width' => '50',
                ]
            ],
            [
                'label' => __('Text  Color', 'flynt'),
                'name' => 'textColor',
                'type' => 'color_picker',
                'wrapper' => [
                    'width' => '50',
                ]
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContent',
                'type' => 'text',
            ],
            [
                'label' => __('Content Selection', 'flynt'),
                'name' => 'contentSelectionTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Post', 'flynt'),
                'name' => 'post',
                'type' => 'relationship',
                'post_type' => [
                    'post',
                    'page',
                    'model',
                    'news'
                ],
                'filters' => array(
                    0 => 'search',
                    1 => 'post_type',
                    2 => 'taxonomy',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ]
        ]
    ];
}

Options::addTranslatable('BlockListingModels', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Reading Time', 'flynt'),
                'name' => 'readingTime',
                'type' => 'text',
                'default_value' => 'min',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Weiterlesen', 'flynt'),
                'name' => 'readMore',
                'type' => 'text',
                'default_value' => 'Weiterlesen',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ]
        ],
    ]
]);
