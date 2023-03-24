<?php

/**
 * Register ACF blocks
 */

function register_acf_block_types()
{

//    acf_register_block_type(array(
//        'name'            => 'home-hero',
//        'title'           => __('Home Hero'),
//        'description'     => __('Home Hero block.'),
//        'render_template' => 'partials/blocks/home-hero.php',
//        'category'        => 'common',
//        'icon'            => 'superhero',
//        'keywords'        => array('home hero'),
//        'mode'            => 'edit',
//        'supports'        => array(
//            'multiple' => true,
//        ),
//    ));

}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

// allow only these blocks
//function all_allowed_block_types($allowed_block_types, $post)
//{
//    return[
//        'acf/home-hero',
//    ];
//}
//add_filter('allowed_block_types_all', 'all_allowed_block_types', 10, 2);