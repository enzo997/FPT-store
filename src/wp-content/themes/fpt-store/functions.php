<?php
define('THEME_URI', get_template_directory_uri());
define('DF_IMAGE', THEME_URI. '/assets/images/default');
define('TP_PART', THEME_URI. '/template-part');
define('THEME_DIR', get_template_directory());
include TEMPLATEPATH .'/function/function.php';

// Local JSON acf
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-field';
    return $path;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-field';
    return $paths;
}
// ADD CSS AND JS
function fundesign_style() {
	$date = date('l jS \of F Y h:i:s A');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('slick', THEME_URI. '/assets/css/slick.css');
    wp_enqueue_style('bootstrap', THEME_URI. '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome5', THEME_URI. '/assets/fonts/fontawesome/css/all.css');

    //ADD Home CSS
    if(is_page_template('templates/home.php'))
        wp_enqueue_style('home', THEME_URI.'/assets/css/home.css?'.$date);
    // Add Main CSS
    wp_enqueue_style('single-service', THEME_URI.'/assets/css/single-service.css?'.$date);
    wp_enqueue_style('main', THEME_URI.'/assets/css/main.css?'.$date);

    // Add JS
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.js', '','' , true);
    wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.1.0.js', '','' , true);
    wp_enqueue_script( 'bootstrap', THEME_URI. '/assets/js/bootstrap.min.js', '','' , true);
    wp_enqueue_script( 'slick', THEME_URI. '/assets/js/slick.min.js', '','' , true);
    wp_enqueue_script( 'main', THEME_URI. '/assets/js/main.js', '','' , true);
    // wp_enqueue_script( 'animation', THEME_URI. '/assets/js/WOW.js', '','' , true);
    // wp_enqueue_script( 'ajax', THEME_URI. '/assets/js/ajax.js?'.$date, '','' , true);

    // wp_localize_script('ajax', 'ajax_var', array('url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'fundesign_style' );

// Menu
register_nav_menus(
    array(
        'Main-menu-top'  => __( 'Main menu top' )
    )
);
//acf_add_options_page('Theme Options');
if( function_exists('acf_add_options_page') ) {
    $parent = acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'Theme Option',
        'parent_slug'   => '',
        'redirect'      => false,
        'position'      => false,
        'icon_url'      => false,
    ));
};


