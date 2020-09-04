<?php


/**
 * Register and Enqueue Styles.
 */
function godding_register_styles() {

  $rand = rand( 1, 99999999999 );
  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style( 'godding-style', get_stylesheet_uri(), array(), $rand );

  wp_enqueue_style( 'godding-print-style', get_template_directory_uri() . '/_css/print.css', null, $theme_version, 'print' );
  wp_enqueue_style( 'godding-nav-style', get_template_directory_uri() . '/_css/nav.css', null, $rand);


}

add_action( 'wp_enqueue_scripts', 'godding_register_styles' );

?>
