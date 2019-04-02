<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

register_sidebar(array(
	'name'=> 'Booking',
	'id' => 'booking',
	'before_widget' => '</li>',
	'before_title' => '<div class="widget-title"><h6>',
	'after_title' => '</h6></div>',
));
?>