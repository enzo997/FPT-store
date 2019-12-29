<?php
//=========== Add custom image size ===========//
add_filter('intermediate_image_sizes_advanced', 'hero_remove_default_image_sizes');
function hero_remove_default_image_sizes( $sizes) {
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['large']);
	unset( $sizes['medium_large']);
	return $sizes;
}
add_action( 'after_setup_theme', 'pp_setup' );
function pp_setup() {
    load_theme_textdomain( 'pp' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb-530x369', 530, 369, true);
    add_image_size( 'thumb-561x374', 561, 374, true);
    add_image_size( 'thumb-400x268', 400, 268, true);
    add_image_size( 'thumb-636x424', 636, 424, true);
}


//=========== upload svg or svgz ===========//
function my_custom_mime_types( $mimes ) {
    
    // New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );

//=============== Add file post-thumbnails ===========//
add_theme_support( 'post-thumbnails' );

//===================get link by slug ================//
function get_hr_link($name){
    if($link = get_permalink( get_page_by_path( $name ) ))
        return $link;
    return '#';
}
//==================== Limit Character ==============//
function excerpt($content, $limit="50", $more='…') {
    $excerpt = explode(' ', $content, $limit);
    
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(' ',$excerpt).$more;
    } else {
        $excerpt = implode(' ',$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}








