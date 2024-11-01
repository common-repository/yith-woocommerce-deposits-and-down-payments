<?php
/**
 * Premium Tab
 *
 * @author  Your Inspiration Themes
 * @package YITH WooCommerce Deposits adn Down Payments
 * @version 2.0.0
 */

if ( ! defined( 'YITH_WCDP' ) ) {
	exit;
} // Exit if accessed directly

return array(
	'premium' => array(
		'landing' => array(
			'type' => 'custom_tab',
			'action' => 'yith_wcdp_premium_tab'
		)
	)
);