<?php

/** Enqueue Font Awesome from CDN if  your theme hasn't already included Font Awesome **/

add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
* Register and load font awesome CSS files using a CDN.
*
* @link http://www.bootstrapcdn.com/#fontawesome
* @author FAT Media
*/
function prefix_enqueue_awesome() {
wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '4.0.3' );
}

/** Add your Social Menu to genesis_header - you can use other hook locations as you wish **/


add_action('genesis_header','genesis_add_social', 10);

function genesis_add_social() {
	if ( has_nav_menu( 'social' ) ) {

		wp_nav_menu(
			array(
				'theme_location'  => 'social',
				'container'       => 'div',
				'container_id'    => 'menu-social',
				'container_class' => 'menu',
				'menu_id'         => 'menu-social-items',
				'menu_class'      => 'menu-items',
				'depth'           => 1,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
				'fallback_cb'     => '',
			)
		);
	
	}
}



?>