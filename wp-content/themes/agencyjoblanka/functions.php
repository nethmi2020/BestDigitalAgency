<?php 




function agencystyle(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

function load_stylesheets()
{
    

    wp_register_style('boostrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(), false,'all');
    wp_enqueue_style('boostrap');

    wp_register_style('style',get_template_directory_uri() . '/style.css',array(), false,'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheets');





function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '',1,true);

    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');




function loadjs(){
    wp_register_script('customejs',get_template_directory_uri() . '/js/scripts.js','' ,1, true);
    wp_enqueue_script('customejs');
}
add_action('wp_enqueue_script','loadjs');
add_action('wp_enqueue_scripts', 'agencystyle');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




// nav menu

register_nav_menus(array(
    'primary'=>__('Primary Menu'),
    'footer'=>__('Footer Menu')
));





function learningwp_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180,120,true);
    add_image_size('banner-image', 920,210,array('left','top'));
}

add_action('after_setup_theme','learningwp_setup');

    
?>