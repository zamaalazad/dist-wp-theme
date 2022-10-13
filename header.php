<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 

<header>

  <div class="brand">
    <a href="<?php bloginfo('home'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
  </div>
  
  <?php 
    wp_nav_menu(array(
        'theme_location'        => 'main_menu',
        'container'             => 'ul',
        'menu_class'            => 'navigation',
    ));

    wp_nav_menu(array(
      'theme_location'        => 'social_menu',
      'container'             => 'ul',
      'menu_class'            => 'navigation',
  ));
  ?>
  
</header>