<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

require get_template_directory() . '/inc/product-custom-fields.php';

function my_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'woocommerce' );
}
add_action('after_setup_theme', 'my_custom_theme_setup');


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function mytheme_enqueue_woocommerce_assets() {
    if ( is_woocommerce() ) {
        wp_enqueue_style( 'woocommerce-general' );
        wp_enqueue_style( 'woocommerce-layout' );
        wp_enqueue_style( 'woocommerce-smallscreen' );
        wp_enqueue_script( 'wc-single-product' );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_woocommerce_assets' );

function add_custom_role_with_no_capabilities() {
    add_role(
        'Inactive user', 
        'Inactive user', 
        array() 
    );
}
add_action('init', 'add_custom_role_with_no_capabilities');


function my_custom_theme_assets() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('tiny-slider', get_template_directory_uri() . '/assets/css/tiny-slider.css');
    wp_enqueue_style('material-icons', get_template_directory_uri() . '/assets/css/materialdesignicons.min.css');
    wp_enqueue_style('unicons', 'https://unicons.iconscout.com/release/v4.0.0/css/line.css'); 
    wp_enqueue_style('choices-css', get_template_directory_uri() . '/assets/css/choices.min.css');
    wp_enqueue_style('style-dark', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('default-color', get_template_directory_uri() . '/assets/css/colors/default.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());  
}
add_action('wp_enqueue_scripts', 'my_custom_theme_assets');

function my_custom_theme_scripts() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), null, true);
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'feather-icons', get_template_directory_uri() . '/assets/js/feather.min.js', array(), null, true );
    wp_enqueue_script( 'choices-js', get_template_directory_uri() . '/assets/js/choices.min.js', array(), null, true );
    wp_enqueue_script( 'plugins-init', get_template_directory_uri() . '/assets/js/plugins.init.js', array(), null, true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array(), null, true );
    wp_enqueue_script('stock-content', get_template_directory_uri() . '/assets/js/stock-photos.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function enqueue_script_on_specific_page() {
    if ( is_page('account') ) {
        wp_enqueue_script( 'account', get_template_directory_uri() . '/assets/js/account.js', array(), null, true );
        wp_localize_script( 'account', 'ajax_object', array( 'ajax_url' => admin_url('admin-ajax.php') ));
    }
    if ( is_page('upload-product') ) {
        wp_enqueue_script( 'upload-product-js', get_template_directory_uri() . '/assets/js/upload-product.js', array('jquery'), null, true );
        wp_localize_script( 'upload-product-js', 'ajax_object', array( 'ajax_url' => admin_url('admin-ajax.php') ));
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_script_on_specific_page' );




function my_custom_404_template($template) {
    if (is_404()) {
        $custom_404_template = get_template_directory() . '/templates/404.php';
        if (file_exists($custom_404_template)) {
            return $custom_404_template;
        }
    }
    return $template; 
}
add_filter('template_include', 'my_custom_404_template');

function load_custom_page_templates($template) {
    if (is_page_template('templates/page-register.php')) {
        $new_template = locate_template(['templates/page-register.php']);
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    if (is_page_template('templates/page-login.php')) {
        $new_template = locate_template(['templates/page-login.php']);
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('page_template', 'load_custom_page_templates');

function load_account_section() {
    if ( isset($_POST['section']) ) {
        $section = sanitize_text_field( $_POST['section'] );
        switch ($section) {
            case 'section-1':
                get_template_part( '/parts/account/downloads' );
                break;
            case 'section-2':
                get_template_part( '/parts/account/become-an-author' );
                break;

            default:
                echo '<p>Invalid section.</p>';
                break;
        }
    }
    wp_die(); 
}
add_action( 'wp_ajax_load_account_section', 'load_account_section' );


function load_upload_category() {
    if ( isset($_POST['category']) ) {
        $category = sanitize_text_field( $_POST['category'] );
        switch ($category) {
            case 'theme':
                get_template_part( '/parts/upload-product/theme' );
                break;
            case 'elementor-kit':
                get_template_part( '/parts/upload-product/elementor-kit' );
                break;
            case 'plugin':
                get_template_part( '/parts/upload-product/plugin' );
                break;        
            default:
                echo '<p>Invalid category.</p>';
                break;
        }
    }
    wp_die(); 
}
add_action( 'wp_ajax_load_upload_category', 'load_upload_category' );

?>
