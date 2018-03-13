<?php

define('ASSETS_URL', get_template_directory_uri() . '/assets');
//Adding theme stiles and scripts
add_action('wp_enqueue_scripts', 'add_theme_scripts_n_styles');
function add_theme_scripts_n_styles() {
  if ( !is_admin() ) {
    wp_enqueue_style('style_css' , ASSETS_URL . '/css/style.css', array(), false);
    wp_enqueue_style('font_awesome_css' , ASSETS_URL . '/css/font-awesome.min.css', array(), false);
    //adding SCRIPTS
    wp_enqueue_script('app_js' , ASSETS_URL . '/js/app.js', array(), false, true);
    wp_enqueue_script('font_awesome_js_url', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('jquery'), false, true);
  }
}

//adding theme supports
add_action('init', 'paloma_theme_supports');
function paloma_theme_supports(){
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}


//registering menu_position
add_action('init', 'paloma_menus');
function paloma_menus(){
  register_nav_menus( array(
    'top-menu' => __('Pagrindinis meniu'),
    'menu-photos' => __('Galerijos meniu')
  ));
}

//hide admin bar
function hiding_admin_bar(){
  show_admin_bar(false);
}
add_action('init', 'hiding_admin_bar');
