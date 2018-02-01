<?php

add_theme_support('menus');

register_sidebar(
    array(
      'before_widget'=> '<div class="widget">',
      'after_widget'=> '</div>',
      'before_title'=> '<h3>',
      'after_title'=> '</h3>',
    )
  );

add_theme_support('post-thumbnails');

//add Format category
function add_theme_support_cb()
{
    add_theme_support('post-formats', array('gallery','image','video','audio'));
}
add_action('after_setup_theme', 'add_theme_support_cb');

function shortcode_tw()
{
    return '<a href="http://twitter.com/">Follow me</a>Follow me!!';
}
add_shortcode('tw', 'shortcode_tw');
