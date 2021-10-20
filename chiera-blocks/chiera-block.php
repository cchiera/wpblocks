<?php
/**
 * @package Chiera BLocks
 * @version 1
 */
/*
Plugin Name: Chiera BLocks
Plugin URI: 
Description: 
Author: Chris Chiera
Version: 1
Author URI:
*/

// Get plugin Path directory
if ( !defined( 'FP_PLUGIN_PATH' ) ) {
    define( 'FP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'FP_PLUGIN_URI' ) ) {
    define( 'FP_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

// acf blocks test
add_action('acf/init', 'home_gallery_block');
function home_gallery_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Home Gallery',
            'title'             => __('Home Gallery'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/home-gallery-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'home gallery' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'services_slider');
function services_slider() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Services Slider',
            'title'             => __('Services Slider'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/services-slider-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Two Column Block' ),
        ));
    }
}
