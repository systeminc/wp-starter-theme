<?php
/**
 * The theme includes file
 *
 * @package starter_wp_theme
 */

// THEME CONSTANTS
define('BASE_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('THEME_ASSETS', get_template_directory_uri() . '/assets/');

// THEME ASSETS
function enqueueStylesAndScripts() {

    // STYLES
    wp_register_style('main', THEME_ASSETS . 'styles/main.css', [], filemtime(get_theme_file_path('assets/styles/main.css')));
    wp_enqueue_style('main');

    // HEADER SCRIPTS
    // wp_register_script('modernizr', THEME_ASSETS . 'js/libs/modernizr.js');
    // wp_enqueue_script('modernizr');

    // FOOTER SCRIPTS
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', FALSE, '1.11.0', TRUE);
    wp_enqueue_script('jquery');

    wp_register_script('tselectbox', THEME_ASSETS . 'js/libs/t.selectbox.js', array(), filemtime(get_theme_file_path('assets/js/libs/t.selectbox.js')), true);
    wp_enqueue_script('tselectbox');

    wp_register_script('init', THEME_ASSETS . 'js/init.js', array(), filemtime(get_theme_file_path('assets/js/init.js')), true);
    wp_enqueue_script('init');

}
add_action('wp_enqueue_scripts', 'enqueueStylesAndScripts');