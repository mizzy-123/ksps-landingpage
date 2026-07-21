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

    $is_aod_page = is_page('assestment-and-organization-development');

    // Theme scripts (ScrollReveal removed as it causes responsiveness issues)
    $scripts = [
        'menu'           => '/assets/js/menu.js',
        'carousel'       => '/assets/js/carousel.js',
        'article-carousel' => '/assets/js/article-carousel.js',
        'article-search' => '/assets/js/article-search.js',
        'countup'        => '/assets/js/countup.js',
        'testi-carousel' => '/assets/js/testi-carousel.js',
        'trust-modal'    => '/assets/js/trust-modal.js',
    ];

    // The generic FAQ (uses faq.json) is used everywhere EXCEPT the AOD page,
    // which has its own FAQ dataset/script. Loading both would make them fight
    // over the same #faq-list element.
    if (!$is_aod_page) {
        $scripts['faq'] = '/assets/js/faq.js';
    }

    foreach ($scripts as $handle => $rel) {
        list($uri, $ver) = ksps_asset($rel);
        wp_enqueue_script('ksps-' . $handle, $uri, [], $ver, true);
    }

    // Assessment & OD page carousels + its dedicated FAQ
    if ($is_aod_page) {
        $aod_scripts = [
            'industry-carousel'          => '/assets/js/industry-carousel.js',
            'case-study-carousel'        => '/assets/js/case-study-carousel.js',
            'assessment-impact-carousel' => '/assets/js/assessment-impact-carousel.js',
            'testimonials-carousel'      => '/assets/js/testimonials-carousel.js',
            'faq-assestment-od'          => '/assets/js/faq-assestment-od.js',
        ];
        foreach ($aod_scripts as $handle => $rel) {
            list($uri, $ver) = ksps_asset($rel);
            wp_enqueue_script('ksps-' . $handle, $uri, [], $ver, true);
        }
    }

    // Localize/config values for frontend scripts
    $config = [
        'themeUrl'      => get_stylesheet_directory_uri(),
        'assetsUrl'     => get_stylesheet_directory_uri() . '/assets',
        'faqDataUrl'    => get_stylesheet_directory_uri() . '/assets/data/faq.json',
        'aodFaqDataUrl' => get_stylesheet_directory_uri() . '/assets/data/faq-assestment-od.json',
    ];

    // Provide global config before faq.js executes
    if (!$is_aod_page) {
        wp_add_inline_script('ksps-faq', 'window.KSPS_FAQ_DATA_URL = ' . wp_json_encode($config['faqDataUrl']) . ';', 'before');
    }

    // Provide the correct data URL for the AOD FAQ script
    if ($is_aod_page) {
        wp_add_inline_script('ksps-faq-assestment-od', 'window.KSPS_AOD_FAQ_DATA_URL = ' . wp_json_encode($config['aodFaqDataUrl']) . ';', 'before');
    }

    // Provide assets base URL for scripts that need to resolve image paths
    wp_add_inline_script('ksps-trust-modal', 'window.KSPS_ASSETS_URL = ' . wp_json_encode($config['assetsUrl']) . ';', 'before');
});

/**
 * Ensure the Assessment & OD page exists at /assestment-and-organization-development
 */
function ksps_ensure_assessment_od_page(): void {
    $slug = 'assestment-and-organization-development';
    $existing = get_page_by_path($slug);
    if ($existing) {
        return;
    }

    $page_id = wp_insert_post([
        'post_title'   => 'Assessment & Organization Development',
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '',
    ], true);

    if (!is_wp_error($page_id) && $page_id) {
        update_post_meta($page_id, '_wp_page_template', 'page-assestment-and-organization-development.php');
        flush_rewrite_rules(false);
    }
}
add_action('after_switch_theme', 'ksps_ensure_assessment_od_page');
add_action('admin_init', function () {
    if (get_option('ksps_aod_page_created')) {
        return;
    }
    ksps_ensure_assessment_od_page();
    update_option('ksps_aod_page_created', 1);
});
