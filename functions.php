<?php

function stvinnies_theme_support()
{
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'stvinnies_theme_support');

function stvinnies_menus()
{
  $locations = array(
    'primary' => 'Main Menu in the Header',
    'footer' => 'Footer Menu'
  );
  register_nav_menus($locations);
}
add_action('init', 'stvinnies_menus');

function stvinnies_register_scripts()
{
  // enqueue fonts and styles
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('stvinnies_styles', get_stylesheet_uri(), array('stvinnies_fonts'), $version);
  wp_enqueue_style('stvinnies_fonts', "https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap", array(), $version);

  // enqueue javascript
  wp_enqueue_script('stvinnies_js', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'stvinnies_register_scripts');

// customiser
require_once get_template_directory() . '/inc/customizer.php';


