<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  // 'Amatic SC'フォントの読み込み
  wp_enqueue_style('google-font-amatic-sc', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap', false);

  // 'Damion'フォントの読み込み
  wp_enqueue_style('google-font-damion', 'https://fonts.googleapis.com/css2?family=Damion&display=swap', false);

  // 'Noto Serif JP'フォントの読み込み
  wp_enqueue_style('google-font-noto-serif-jp', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false);

  // 'Patua One'フォントの読み込み
  wp_enqueue_style('google-font-patua-one', 'https://fonts.googleapis.com/css2?family=Patua+One&display=swap', false);

  // swiper cssの読み込み
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', false);

  // スタイルシートの読み込み
  wp_enqueue_style('my', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');

  // jQueryの読み込み
  wp_enqueue_script('jquery');

  // swiper scriptの読み込み
  wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

  // jsの読み込み
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
