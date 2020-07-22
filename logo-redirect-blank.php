<?php
/**
 * Plugin Name: Logo Redirect (Custom Functions)
 * Plugin URI: 
 * Description: Redirects the custom logo for Woocommerce 'Storefront' Theme.
 * Author: Lisette D
 * Author URI: 
 * Version: 0.1.0
 */

/* Place custom code below this line. */

add_filter( 'get_custom_logo', function ( $html ) {

	$new_logo_url = '[INSERT NEW URL HERE]'; // <-- Just change this.

	$search  = sprintf( '<a href="%s"', esc_url( home_url( '/' ) ) );
	$replace = sprintf( '<a href="%s"', esc_url( $new_logo_url ) );

	return str_replace( $search, $replace, $html );

} );

/* Place custom code above this line. */
?>