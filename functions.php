<?php
require_once(get_template_directory() . '/inc/class-nav-bootstrap-walker.php');
require_once('custom-elementor.php');

add_action( 'after_setup_theme', 'my_theme_setup' );

function my_theme_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  register_nav_menus(
    array(
      'primary' => 'Primary'
    )
    );
}

add_post_type_support( 'page', 'excerpt' );

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
function my_theme_scripts(){
  wp_enqueue_style('my-theme-bs',get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('cards',get_template_directory_uri() . '/assets/css/cards.css');
  wp_enqueue_style('animations',get_template_directory_uri() . '/assets/css/animations.css');
  wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'),'1',true);
  wp_enqueue_script('my-theme-bs',get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'),'1.0',true);
};

add_action('widgets_init' ,'my_theme_sidebars');
function my_theme_sidebars(){
  register_sidebar(array(
    'id' => 'primary-sidebar',
    'name' => 'Primary Sidebar',
    'before_widget' => '<div id="%1$s" class=""widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'id' => 'footer-sidebar-first',
    'name' => 'Footer Sidebar First',
    'before_widget' => '<div id="%1$s" class=""widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
  ));
  register_sidebar(array(
    'id' => 'footer-sidebar-second',
    'name' => 'Footer Sidebar Second',
    'before_widget' => '<div id="%1$s" class=""widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
  ));
  register_sidebar(array(
    'id' => 'footer-sidebar-third',
    'name' => 'Footer Sidebar Third',
    'before_widget' => '<div id="%1$s" class=""widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
  ));
  register_sidebar(array(
    'id' => 'footer-sidebar-fourth',
    'name' => 'Footer Sidebar Fourth',
    'before_widget' => '<div id="%1$s" class=""widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
  ));
}

add_action( 'after_setup_theme', 'custom_logo_theme');
function custom_logo_theme() {
  add_theme_support( 'title-tag' );  
  add_theme_support( 'custom-logo' );
}

