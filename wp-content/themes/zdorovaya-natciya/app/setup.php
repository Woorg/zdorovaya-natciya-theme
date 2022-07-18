<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();

    // MAIN CSS DEV
    // wp_enqueue_style('main-dev', get_template_directory_uri() . '/front/dev/static/css/main.css', false, null);

    wp_enqueue_style('main-prod', get_template_directory_uri() . '/front/prod/static/css/main.min.css', false, null);

    // MAIN JS DEV
    wp_enqueue_script('yandex', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=3830ed9e-6751-48e9-8077-6fc9d82deead', null, '1.0', true);

    wp_script_add_data('yandex', 'defer', true);

    $lat     = get_field('lat', 'option' );
    $long    = get_field('long', 'option');
    $address = get_field('address', 'option');

    wp_localize_script('yandex', 'yandex_map_settings', [
        'lat'     => $lat,
        'long'    => $long,
        'address' => $address,
    ]);

    // MAIN JS DEV
    // wp_enqueue_script('main-dev', get_template_directory_uri() . '/front/dev/static/js/main.js', null, '1.0', true);

    // wp_script_add_data('main-dev', 'defer', true);

    // MAIN JS PROD
    wp_enqueue_script('main-prod', get_template_directory_uri() . '/front/prod/static/js/main.min.js', null, '1.0', true);

    wp_script_add_data('main-prod', 'defer', true);


    wp_script_add_data('eio-lazy-load', 'defer', true);
    wp_script_add_data('regenerator-runtime', 'defer', true);
    wp_script_add_data('wp-polyfill', 'defer', true);
    wp_script_add_data('contact-form-7', 'defer', true);

    wp_script_add_data('contact-form-7', 'defer', true);
    wp_script_add_data('app/0', 'defer', true);
    wp_script_add_data('app/1', 'defer', true);




    wp_add_inline_script(
        'main',
        '(function(H){H.className=H.className.replace(/\bno-js\b/,"js")})(document.documentElement)',
        'after'
    );

    // Defer to plugin scripts

    // wp_script_add_data('eio-lazy-load', 'defer', true);


}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */

add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation'   => __('Primary Navigation', 'sage'),
        'secondary_navigation' => __('Secondary Navigation', 'sage'),'third_navigation'     => __('Third Navigation', 'sage'),


    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});
