<?php
// add_action('get_header', 'remove_admin_login_header');

// function remove_admin_login_header() {
// 	remove_action('wp_head', '_admin_bar_bump_cb');
// }

## Registers navigation menus
function register_my_menus() {
	register_nav_menus(array(
    'primary-nav' => __( 'Primary Nav' ),
  ));
}
add_action( 'init', 'register_my_menus' );
?>
