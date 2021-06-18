<?php
/**
 * Plugin deactivation class
 *
 * Nothing to see here.
 *
 * @package    User_Avatars
 * @subpackage Classes
 * @category   Activate
 * @since      1.0.0
 */

namespace User_Avatars\Classes\Activate;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Deactivate {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {}

	/**
	 * Add & update options
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function options() {
		update_option( 'avatar_default', 'mystery' );
	}
}
