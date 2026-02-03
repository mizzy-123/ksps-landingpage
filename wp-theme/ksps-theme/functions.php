<?php
/**
 * KSPS Theme functions
 */

if (!defined('ABSPATH')) { exit; }

// Theme setup
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'ksps'),
        'footer'  => __('Footer Menu', 'ksps'),
    ]);
});

// Register a basic widget area (optional)
add_action('widgets_init', function () {
    register_sidebar([
        'name'          => __('Sidebar', 'ksps'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
});

// Helper: asset URL and versioning via filemtime
function ksps_asset(string $path): array {
    $uri  = get_stylesheet_directory_uri() . $path;
    $file = get_stylesheet_directory() . $path;
    $ver  = file_exists($file) ? (string) filemtime($file) : null;
    return [$uri, $ver];
}

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', function () {
    // Styles
    list($css_uri, $css_ver) = ksps_asset('/assets/css/output.css');
    wp_enqueue_style('ksps-styles', $css_uri, [], $css_ver);
    // Font path overrides to ensure correct @font-face URLs inside theme
    list($ovr_uri, $ovr_ver) = ksps_asset('/assets/css/overrides.css');
    wp_enqueue_style('ksps-overrides', $ovr_uri, ['ksps-styles'], $ovr_ver);

    // Theme scripts (ScrollReveal removed as it causes responsiveness issues)
    $scripts = [
        'menu'           => '/assets/js/menu.js',
        'carousel'       => '/assets/js/carousel.js',
        'countup'        => '/assets/js/countup.js',
        'testi-carousel' => '/assets/js/testi-carousel.js',
        'trust-modal'    => '/assets/js/trust-modal.js',
        'faq'            => '/assets/js/faq.js',
    ];

    foreach ($scripts as $handle => $rel) {
        list($uri, $ver) = ksps_asset($rel);
        wp_enqueue_script('ksps-' . $handle, $uri, [], $ver, true);
    }

    // Localize/config values for frontend scripts
    $config = [
        'themeUrl'      => get_stylesheet_directory_uri(),
        'assetsUrl'     => get_stylesheet_directory_uri() . '/assets',
        'faqDataUrl'    => get_stylesheet_directory_uri() . '/assets/data/faq.json',
    ];

    // Provide global config before faq.js executes
    wp_add_inline_script('ksps-faq', 'window.KSPS_FAQ_DATA_URL = ' . wp_json_encode($config['faqDataUrl']) . ';', 'before');
});
