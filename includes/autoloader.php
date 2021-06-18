<?php
/**
 * Register plugin classes
 *
 * The autoloader registers plugin classes for later use.
 *
 * @package    User_Avatars
 * @subpackage Includes
 * @category   Classes
 * @since      1.0.0
 */

namespace User_Avatars;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Class files
 *
 * Defines the class directory and file prefix.
 *
 * @since 1.0.0
 * @var   string Defines the class file path.
 */
define( 'UAP_CLASS', UAP_PATH . 'includes/classes/class-' );

/**
 * Array of classes to register
 *
 * @since 1.0.0
 * @var   array Defines an array of class files to register.
 */
define( 'UAP_CLASSES', [
	__NAMESPACE__ . '\Classes\Assets' => UAP_CLASS . 'assets.php',
	__NAMESPACE__ . '\Classes\Users\User_Avatars' => UAP_CLASS . 'user-avatars.php'
] );

/**
 * Autoload class files
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
spl_autoload_register(
	function ( string $class ) {
		if ( isset( UAP_CLASSES[ $class ] ) ) {
			require UAP_CLASSES[ $class ];
		}
	}
);
