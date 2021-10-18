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

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');

// Register Custom Post Type
function services() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Services', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Services', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'text_domain' ),
		'description'           => __( 'Services', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'title', 'thumbnail', 'excerpt', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		"show_in_rest"          => true,
	);
	register_post_type( 'Services', $args );
}
add_action( 'init', 'services', 0 );

// Register Custom Post Type
function patient_education_cpt() {
	$labels = array(
		'name'                  => _x( 'Patient Education', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Patient Education', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Patient Education', 'text_domain' ),
		'name_admin_bar'        => __( 'Patient Education', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Patient Education', 'text_domain' ),
		'description'           => __( 'Patient Education', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'title', 'thumbnail', 'excerpt', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		"show_in_rest"          => true,
	);
	register_post_type( 'Patient-Education', $args );
}
add_action( 'init', 'patient_education_cpt', 0 );


// Register Custom Post Type
function staff() {
	$labels = array(
		'name'                  => _x( 'Staff', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Staff', 'text_domain' ),
		'name_admin_bar'        => __( 'Staff', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Staff', 'text_domain' ),
		'description'           => __( 'Staff', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'title', 'thumbnail', 'excerpt', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
//		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		"show_in_rest"          => true,
	);
	register_post_type( 'Staff', $args );
}
add_action( 'init', 'staff', 0 );

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

// acf blocks test
add_action('acf/init', 'top_right_header');
function top_right_header() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Top Right Header',
            'title'             => __('Top Right Header'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/top-right-header.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'top right header' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'social_widgets_block');
function social_widgets_block() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Social Widgets',
            'title'             => __('Social Widgets Block'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/social-widgets-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'social widgets block' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'request_an_appointment');
function request_an_appointment() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Request an Appointment',
            'title'             => __('Request an Appointment'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/request-an-appointment.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'request an appointment' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'footer_copyright');
function footer_copyright() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Footer Copyright',
            'title'             => __('Footer Copyright'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/footer-copyright.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'footer copyright' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'footer_locations');
function footer_locations() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Footer Locations',
            'title'             => __('Footer Locations'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/footer-locations.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'footer locations' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'two_column_block');
function two_column_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Two Column Block',
            'title'             => __('Two Column Block'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/two-column-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Two Column Block' ),
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

// acf blocks
add_action('acf/init', 'services_block');
function services_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Services Block',
            'title'             => __('Services Block'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/services-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Services Block' ),
        ));
    }
}
// acf blocks
add_action('acf/init', 'meet_dentists_block');
function meet_dentists_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Meet Dentists Block',
            'title'             => __('Meet Dentists Block'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/meet-dentists-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Meet Dentists Block' ),
        ));
    }
}

// acf blocks
add_action('acf/init', 'subpage_header_1');
function subpage_header_1() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Subpage Header 1',
            'title'             => __('Subpage Header 1'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/subpage-header-1.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Subpage Header 1' ),
        ));
    }
}
// acf blocks
add_action('acf/init', 'subpage_two_column_1');
function subpage_two_column_1() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Subpage Two Column 1',
            'title'             => __('Subpage Two Column 1'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/subpage-two-colum-1.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Subpage Two Column 1' ),
        ));
    }
}
// acf blocks
add_action('acf/init', 'subpage_one_column_1');
function subpage_one_column_1() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Subpage One Column 1',
            'title'             => __('Subpage One Column 1'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/subpage-one-colum-1.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Subpage One Column 1' ),
        ));
    }
}
// acf blocks 
add_action('acf/init', 'subpage_one_colum_gallery_1');
function subpage_one_colum_gallery_1() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Subpage One Colum Gallery 1',
            'title'             => __('Subpage One Colum Gallery 1'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/subpage-one-colum-gallery-1.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Subpage One Colum Gallery 1' ),
        ));
    }
}
// acf blocks 
add_action('acf/init', 'subpage_one_colum_map');
function subpage_one_colum_map() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Subpage One Colum Map',
            'title'             => __('Subpage One Colum Map'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/subpage-one-colum-map.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Subpage One Colum Map' ),
        ));
    }
}


// acf blocks 
add_action('acf/init', 'patient_education_right_sidebar');
function patient_education_right_sidebar() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Patient Education Right Sidebar',
            'title'             => __('Patient Education Right Sidebar'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/patient-education-latest-posts-right-sidebar.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Patient Education Right Sidebar' ),
        ));
    }
}

// acf blocks 
add_action('acf/init', 'staff_ajax_block');
function staff_ajax_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Staff Ajax Block',
            'title'             => __('Staff Ajax Block'),
            'description'       => __('Enter content here'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/staff-ajax-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Staff Ajax Block' ),
        ));
    }
}