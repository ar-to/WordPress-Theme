<?php
//Add theme support via add_theme_support( 'support' ); see https://developer.wordpress.org/themes/basics/theme-functions/
// Add Google Fonts
//Add scripts and stylesheets; see https://developer.wordpress.org/themes/basics/including-css-javascript/
function theme_scripts(){
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.theme.min.css'), array(), '3.3.7', 'all';
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css'), array(), '3.3.7', 'all';
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'3.3.7',true);
}
//Add add_action hooks here
add_action('wp_enqueue_scripts','theme_scripts');//load styles and scripts
?>
