<?php

/**
 * This is an example file showcasing how you can add custom post types to your Flynt theme.
 *
 * For a full list of parameters see https://developer.wordpress.org/reference/functions/register_post_type/ or use https://generatewp.com/post-type/ to generate the code for you.
 */

namespace Flynt\CustomPostTypes;

function registerNewsPostType()
{
    $labels = [
        'name'                  => _x('News', 'Post Type General Name', 'flynt'),
        'singular_name'         => _x('News', 'Post Type Singular Name', 'flynt'),
        'menu_name'             => __('News', 'flynt'),
        'name_admin_bar'        => __('News', 'flynt'),
        'archives'              => __('News Archives', 'flynt'),
        'attributes'            => __('News Attributes', 'flynt'),
        'parent_item_colon'     => __('Parent News:', 'flynt'),
        'all_items'             => __('All News', 'flynt'),
        'add_new_item'          => __('Add New News', 'flynt'),
        'add_new'               => __('Add New', 'flynt'),
        'new_item'              => __('New News', 'flynt'),
        'edit_item'             => __('Edit News', 'flynt'),
        'update_item'           => __('Update News', 'flynt'),
        'view_item'             => __('View News', 'flynt'),
        'view_items'            => __('View News', 'flynt'),
        'search_items'          => __('Search News', 'flynt'),
        'not_found'             => __('Not found', 'flynt'),
        'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
        'featured_image'        => __('Featured Image', 'flynt'),
        'set_featured_image'    => __('Set featured image', 'flynt'),
        'remove_featured_image' => __('Remove featured image', 'flynt'),
        'use_featured_image'    => __('Use as featured image', 'flynt'),
        'insert_into_item'      => __('Insert into item', 'flynt'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'flynt'),
        'items_list'            => __('News list', 'flynt'),
        'items_list_navigation' => __('News list navigation', 'flynt'),
        'filter_items_list'     => __('Filter news list', 'flynt'),
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
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ];
    register_post_type('news', $args);
}

add_action('init', '\\Flynt\\CustomPostTypes\\registerNewsPostType');