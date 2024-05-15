<?php

add_theme_support('post-thumbnails');


function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'register_my_menus');


?>





<?php

function themeslug_enqueue_style()
{

  wp_enqueue_style('my-theme', get_stylesheet_uri(), 'style.css');
  wp_enqueue_style('fontasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
  wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css');
  wp_enqueue_style('default-theme', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css');
}

function themeslug_enqueue_script()
{


  wp_enqueue_script('my-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
  wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js');

  wp_enqueue_script('nav-bar', get_template_directory_uri() . '/assets/js/navbar.js');
  wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel.js');
}

add_action('wp_enqueue_scripts', 'themeslug_enqueue_style');
add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');

?>


<?php


function wporg_custom_post_type()
{


  register_post_type(
    'wporg_results',
    array(
      'labels' => array(
        'name' => __('Results', 'textdomain'),
        'singular_name' => __('Result', 'textdomain'),

      ),
      'public' => true,
      'has_archive' => true,                           // yes you want it to be public?
      'show_ui' => true,                           // you want it shown in the admin area
      'show_in_menu' => true,                      // show it in menus etc..
      'show_in_nav_menus' => true,                 // show in navigation menus
      'publicly_queryable' => true,                // include this in searches
      'query_var' => true,                         // do you want to pass values?
      'capability_type' => 'post',                 // is it like a post or page?
      'menu_position' => 25,
      'rewrite' => array('slug' => 'results'),
      'taxonomies' => array('category', 'post_tag'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author'),

    )
  );
}
add_action('init', 'wporg_custom_post_type');
?>