<?php

/*------------------------------------*\
	Functions
\*------------------------------------*/

add_theme_support( 'post-thumbnails' );

function custom_logo_setup()
{

    $defaults = array(
        'height' => 77,
        'width' => 78,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

function header_main_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'container' => '',
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'depth' => 2
        )
    );
}

function food_main_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'food-menu',
            'container' => '',
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'depth' => 1
        )
    );
}
function footer_nav_services()
{
    wp_nav_menu(
        array(
            'theme_location' => 'footer-nav-services',
            'container' => '',
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'depth' => 1
        )
    );
}
function footer_nav_page()
{
    wp_nav_menu(
        array(
            'theme_location' => 'footer-nav-page',
            'container' => '',
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'depth' => 1
        )
    );
}


function register_br_custom_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'Cornerstone'), // Main Navigation
        'footer-nav-page' => __('Footer Nav Page', 'Cornerstone'),
    ));
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('after_setup_theme', 'custom_logo_setup');
add_action('init', 'register_br_custom_menu');


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));    
}