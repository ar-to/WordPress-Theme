<?php
//Add theme support via add_theme_support( 'support' ); see https://developer.wordpress.org/themes/basics/theme-functions/
// Add Google Fonts
//Add scripts and stylesheets; see https://developer.wordpress.org/themes/basics/including-css-javascript/
function theme_scripts(){
  wp_enqueue_style('main', get_template_directory_uri().'/css/main.temp.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'3.3.7',true);
}
add_action('wp_enqueue_scripts','theme_scripts');//load styles and scripts
//Add additional functions here
//navigation menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
//Add Theme Features
//Feature Image for posts & pages
add_theme_support( 'post-thumbnails' );
// Image size for single posts
add_image_size( 'index-thumbnail', 120, 100, true );
add_image_size( 'page-thumbnail', 700, 200, true );
//Add additional add_action hooks here
?>
