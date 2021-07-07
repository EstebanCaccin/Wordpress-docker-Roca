<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
  wp_enqueue_style('wpwp-parent', get_template_directory_uri() . '/style.css');

  wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/addons/animate/animate.css', '', '4', 'all');
  wp_enqueue_style('fancy-css', get_stylesheet_directory_uri() . '/addons/fancy/jquery.fancybox.min.css', '', '4', 'all');
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/addons/bootstrap/css/bootstrap.min.css', '', '4', 'all');
  wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/addons/slick/slick.css', '', '4', 'all');

  wp_enqueue_style('awesome-css', get_stylesheet_directory_uri() . '/dist/fonts/css/font-awesome.min.css', '', '4', 'all');

  wp_enqueue_style('wpwp-css', get_stylesheet_directory_uri() . '/dist/css/main.min.css?v=2341234123', '', '4', 'all');

  wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/addons/wow/wow.min.js', array('jquery'), '4', true);
  wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/addons/slick/slick.min.js', array('jquery'), '4', true);
  wp_enqueue_script('fancy-js', get_stylesheet_directory_uri() . '/addons/fancy/jquery.fancybox.min.js', array('jquery'), '4', true);

  wp_enqueue_script('bundle-js', get_stylesheet_directory_uri() . '/addons/bootstrap/js/bootstrap.min.js', array('jquery'), '4', true);
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/addons/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '4', true);
  wp_enqueue_script('popper-js', get_stylesheet_directory_uri() . '/addons/bootstrap/js/popper.min.js', array('jquery'), '4', true);

  wp_enqueue_script('wpwp-js', get_stylesheet_directory_uri() . '/dist/js/main.min.js?v=23412134231', array('jquery'), '4', true);
}

add_action('wp_enqueue_scripts', 'twentytwenty_styles');

/**
 * Admin visual
 */
function my_admin_head()
{
  wp_enqueue_style('roots_bootstrap', get_stylesheet_directory_uri() . '/css/admin-visual.css', false, null);
}

add_action('admin_head', 'my_admin_head');
add_action('login_head', 'my_admin_head');

show_admin_bar(false);


/**
 * get_id_by_slug
 */
function get_id_by_slug($page_slug)
{
  $page = get_page_by_path($page_slug);
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

add_filter('upload_mimes', 'my_myme_types', 1, 1);

function my_myme_types($mime_types)
{
  $mime_types['svg'] = 'image/svg+xml';     // Adding .svg extension
  $mime_types['json'] = 'application/json'; // Adding .json extension

  unset($mime_types['xls']);  // Remove .xls extension
  unset($mime_types['xlsx']); // Remove .xlsx extension

  return $mime_types;
}

//LANGUAGE
$default_detected_language = "Español";
$default_detected_link = "es";
