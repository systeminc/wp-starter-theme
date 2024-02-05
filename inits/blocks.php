<?php

/**
 * Register ACF blocks
 */

function register_acf_block_types()
{
    acf_register_block_type(array(
        'name'            => 'simple-text',
        'title'           => __('Simple Text'),
        'description'     => __('Simple text'),
        'render_template' => 'template-parts/blocks/simple-text-block.php',
        'category'        => 'common',
        'icon'            => 'text',
        'keywords'        => array('simple text'),
        'mode'            => 'edit',
        'supports'        => array(
            'multiple' => true,
        ),
    ));

    acf_register_block_type(array(
        'name'            => 'gallery',
        'title'           => __('Gallery'),
        'description'     => __('Image slides with description'),
        'render_template' => 'template-parts/blocks/gallery.php',
        'category'        => 'common',
        'icon'            => 'format-gallery',
        'keywords'        => array('gallery'),
        'mode'            => 'edit',
        'supports'        => array(
            'multiple' => true,
        ),
    ));

}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

// allow only these blocks
function all_allowed_block_types($allowed_block_types, $post)
{
    return[
        'acf/simple-text',
        'acf/gallery',
    ];
}
add_filter('allowed_block_types_all', 'all_allowed_block_types', 10, 2);