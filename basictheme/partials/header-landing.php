<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); //display charset ?>" />
<meta name="author" content="ariel" />
<meta name="description" content="Basic theme for wordpress.org" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); //displays blog title from settings>general ?></title>
<?php wp_head();?> <!--allows plugins api hooks & function.php scripts to work-->
</head>
<body <?php body_class(); //classes can be added conditionally for different templates?>>

<div class="container">
  <div class="row">
    <nav class="site-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
  </div>
</div>
