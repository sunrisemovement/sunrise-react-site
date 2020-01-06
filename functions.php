<?php

  function s_scripts() {

    wp_enqueue_script( 's_theme_js', get_stylesheet_directory_uri() . '/src/index.js', [ 'jquery' ], null, true );

    $site_data = [
      'theme' => get_stylesheet_directory_uri(),
      'home' => home_url(),
    ];
    wp_localize_script( 's_theme_js', 's_vars', $site_data );

    wp_enqueue_style( 's_theme_style', get_stylesheet_directory_uri() . '/style.css', [], null, 'all' );
  }

  add_action( 'wp_enqueue_scripts', 's_scripts' );

?>
