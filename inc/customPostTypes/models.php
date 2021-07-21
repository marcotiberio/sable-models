<?php

/**
 * This is an example file showcasing how you can add custom post types to your Flynt theme.
 *
 * For a full list of parameters see https://developer.wordpress.org/reference/functions/register_post_type/ or use https://generatewp.com/post-type/ to generate the code for you.
 */

namespace Flynt\CustomPostTypes;

function registerModelsPostType()
{
    $labels = [
        'name'                  => _x('Models', 'Post Type General Name', 'flynt'),
        'singular_name'         => _x('Model', 'Post Type Singular Name', 'flynt'),
        'menu_name'             => __('Models', 'flynt'),
        'name_admin_bar'        => __('Models', 'flynt'),
        'archives'              => __('Model Archives', 'flynt'),
        'attributes'            => __('Model Attributes', 'flynt'),
        'parent_item_colon'     => __('Parent Model:', 'flynt'),
        'all_items'             => __('All Models', 'flynt'),
        'add_new_item'          => __('Add New Model', 'flynt'),
        'add_new'               => __('Add New', 'flynt'),
        'new_item'              => __('New Model', 'flynt'),
        'edit_item'             => __('Edit Model', 'flynt'),
        'update_item'           => __('Update Model', 'flynt'),
        'view_item'             => __('View Model', 'flynt'),
        'view_items'            => __('View Models', 'flynt'),
        'search_items'          => __('Search Model', 'flynt'),
        'not_found'             => __('Not found', 'flynt'),
        'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
        'featured_image'        => __('Featured Image', 'flynt'),
        'set_featured_image'    => __('Set featured image', 'flynt'),
        'remove_featured_image' => __('Remove featured image', 'flynt'),
        'use_featured_image'    => __('Use as featured image', 'flynt'),
        'insert_into_item'      => __('Insert into item', 'flynt'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'flynt'),
        'items_list'            => __('Models list', 'flynt'),
        'items_list_navigation' => __('Models list navigation', 'flynt'),
        'filter_items_list'     => __('Filter models list', 'flynt'),
    ];
    $args = [
        'label'                 => __('Post Type', 'flynt'),
        'description'           => __('Post Type Description', 'flynt'),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'thumbnail'],
        'taxonomies'            => ['category', 'post_tag'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-id',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ];
    register_post_type('model', $args);
}

add_action('init', '\\Flynt\\CustomPostTypes\\registerModelsPostType');
