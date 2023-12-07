<?php
function news_styles()
{
  // versionen specifieras i style.css
  $version = wp_get_theme()->get('Version');

  // enqueue styles
  wp_enqueue_style('news-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css", array(), '4.6.3', 'all');
  wp_enqueue_style('news-bootstrap3.3.7', "https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), '3.3.7', 'all');
  wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' . 'all');
  wp_enqueue_style('news-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

  // enqueue scripts
  wp_enqueue_script('news-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js", array(), '3.1.0', false);
  wp_enqueue_script('news-custom_script', get_template_directory_uri() . "/assets/js/script.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'news_styles');

function news_scripts()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script(
    'news-custom_script',
    get_template_directory_uri() . "/assets/js/script.js",
    array(),
    $version,
    true
  );
}
add_action('wp_enqueue_scripts', 'news_scripts');


function news_theme_handling()
{
  add_theme_support('post-thumbnails');
  add_image_size("medium", 1000, false);
}
add_action('after_setup_theme', 'news_theme_handling');

function news_menus()
{
  $locations = array(
    'primary' => 'Navbar second',
    'sidemenu' => 'Side menu'
  );
  register_nav_menus($locations);
}
add_action('init', 'news_menus');



?>
