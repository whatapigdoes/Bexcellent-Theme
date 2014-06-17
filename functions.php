<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BeXcellent Theme' ),
) );
function beX_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'BeXcellent Theme' ),
		'id' => 'sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the gateway template', 'BeXcellent Theme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'beX_widgets_init' );


?>
