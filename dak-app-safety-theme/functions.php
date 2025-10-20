<?php
/**
 * DAK App Safety Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function dak_app_safety_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'dak_app_safety_setup');

/**
 * Enqueue Styles and Scripts
 */
function dak_app_safety_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('dak-app-safety-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Enqueue Google Fonts (Inter) - already included in header.php but good to have as backup
    wp_enqueue_style('dak-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'dak_app_safety_scripts');

/**
 * Theme Customizer
 */
function dak_app_safety_customize_register($wp_customize) {
    
    // Hero Section
    $wp_customize->add_section('dak_hero_section', array(
        'title' => __('Hero Section', 'dak-app-safety'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'See Exactly Which Apps Are Putting Your Kids at Risk',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'dak-app-safety'),
        'section' => 'dak_hero_section',
        'type' => 'text',
    ));
    
    // Header Section
    $wp_customize->add_section('dak_header_section', array(
        'title' => __('Header Settings', 'dak-app-safety'),
        'priority' => 25,
    ));
    
    $wp_customize->add_setting('site_logo_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('site_logo_text', array(
        'label' => __('Logo Text (leave blank to use site title)', 'dak-app-safety'),
        'section' => 'dak_header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('login_button_text', array(
        'default' => 'Login',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('login_button_text', array(
        'label' => __('Login Button Text', 'dak-app-safety'),
        'section' => 'dak_header_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('login_url', array(
        'default' => 'https://app-safety-search-engine.streamlit.app/',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('login_url', array(
        'label' => __('Login URL', 'dak-app-safety'),
        'section' => 'dak_header_section',
        'type' => 'url',
    ));
    
    // Video Section
    $wp_customize->add_section('dak_video_section', array(
        'title' => __('Video Section', 'dak-app-safety'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('video_section_title', array(
        'default' => 'Watch the Live Demo',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('video_section_title', array(
        'label' => __('Video Section Title', 'dak-app-safety'),
        'section' => 'dak_video_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('video_section_subtitle', array(
        'default' => 'See the App Safety Search Engine in action - discover dangerous apps in under 2 minutes',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('video_section_subtitle', array(
        'label' => __('Video Section Subtitle', 'dak-app-safety'),
        'section' => 'dak_video_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('video_url', array(
        'default' => 'https://www.tella.tv/video/cmgbg6bz400dm0bl9a1u3e309/embed?b=1&title=1&a=1&loop=0&t=0&muted=0&wt=1',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('video_url', array(
        'label' => __('Video Embed URL', 'dak-app-safety'),
        'section' => 'dak_video_section',
        'type' => 'url',
    ));
    
    // Features Section
    $wp_customize->add_section('dak_features_section', array(
        'title' => __('Features Section', 'dak-app-safety'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('features_title', array(
        'default' => 'Everything You Need to Protect Your Kids',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('features_title', array(
        'label' => __('Features Title', 'dak-app-safety'),
        'section' => 'dak_features_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('features_subtitle', array(
        'default' => 'Comprehensive app safety analysis backed by real FBI data and academic research',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('features_subtitle', array(
        'label' => __('Features Subtitle', 'dak-app-safety'),
        'section' => 'dak_features_section',
        'type' => 'textarea',
    ));
    
    // Pricing Section
    $wp_customize->add_section('dak_pricing_section', array(
        'title' => __('Pricing Section', 'dak-app-safety'),
        'priority' => 45,
    ));
    
    $wp_customize->add_setting('price_amount', array(
        'default' => '$5/month',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('price_amount', array(
        'label' => __('Price Amount', 'dak-app-safety'),
        'section' => 'dak_pricing_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('purchase_url', array(
        'default' => 'https://buy.stripe.com/9B68wQcXm03vf9wc9n04801?success_url=' . urlencode('https://app-safety-search-engine.streamlit.app/'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('purchase_url', array(
        'label' => __('Purchase URL', 'dak-app-safety'),
        'section' => 'dak_pricing_section',
        'type' => 'url',
    ));
    
    $wp_customize->add_setting('cta_button_text', array(
        'default' => 'Get Started Today - $5',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('cta_button_text', array(
        'label' => __('CTA Button Text', 'dak-app-safety'),
        'section' => 'dak_pricing_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'dak_app_safety_customize_register');

/**
 * Add body classes for better styling control
 */
function dak_app_safety_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'dak_app_safety_body_classes');

/**
 * Disable WordPress admin bar for this theme (optional)
 */
// add_filter('show_admin_bar', '__return_false');

/**
 * Custom excerpt length
 */
function dak_app_safety_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'dak_app_safety_excerpt_length');

/**
 * Custom excerpt more
 */
function dak_app_safety_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'dak_app_safety_excerpt_more');

/**
 * Remove unnecessary WordPress features for this landing page theme
 */
function dak_app_safety_remove_features() {
    // Remove comment support
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
    
    // Remove trackbacks
    remove_post_type_support('post', 'trackbacks');
}
add_action('init', 'dak_app_safety_remove_features');

/**
 * Hide admin menu items that aren't needed for a landing page
 */
function dak_app_safety_remove_admin_menus() {
    if (!current_user_can('administrator')) {
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
    }
}
add_action('admin_menu', 'dak_app_safety_remove_admin_menus');

/**
 * Disable comments entirely
 */
function dak_app_safety_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'dak_app_safety_disable_comments_status', 20, 2);
add_filter('pings_open', 'dak_app_safety_disable_comments_status', 20, 2);

/**
 * Security enhancements
 */
// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Remove WP-API from head
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Remove wlwmanifest.xml
remove_action('wp_head', 'wlwmanifest_link');

// Remove RSD link
remove_action('wp_head', 'rsd_link');
