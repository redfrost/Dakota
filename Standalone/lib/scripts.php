<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/bootstrap.css
 * 2. /theme/assets/css/bootstrap-responsive.css
 * 3. /theme/assets/css/app.css
 * 4. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/js/vendor/modernizr-2.6.2.min.js  (in head.php)
 * 2. jquery-1.8.2.min.js via Google CDN              (in head.php)
 * 3. /theme/assets/js/plugins.js
 * 4. /theme/assets/js/main.js
 */

function roots_scripts() {
  wp_enqueue_style('roots_bootstrap_style', get_template_directory_uri() . '/assets/css/base.css', false, null);
    
  if (current_theme_supports('bootstrap-responsive')) {
    wp_enqueue_style('roots_bootstrap_responsive_style', get_template_directory_uri() . '/assets/css/responsive.css', array('roots_bootstrap_style'), null);
  }

  if (current_theme_supports('bootstrap-responsive-max')) {
    wp_enqueue_style('roots_bootstrap_responsive_max_style', get_template_directory_uri() . '/assets/css/responsive-max.css', array('roots_bootstrap_style'), null);
  }

  if (current_theme_supports('bootstrap-test')) {
    wp_enqueue_style('roots_bootstrap_test', get_template_directory_uri() . '/assets/css/test.css', array('roots_bootstrap_style'), null);
  }
  
  wp_enqueue_style('roots_icons', get_template_directory_uri() . '/assets/css/font-awesome.css', false, null); //Font-awsome Icon

  wp_enqueue_style('roots_app', get_template_directory_uri() . '/assets/css/style.css', false, null);



  // Load style.css from child theme
  if (is_child_theme()) {
    wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.2', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/script.js', false, null, false);
  wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/custom.js', false, null, false);
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);
