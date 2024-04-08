<?php
/**
 * Plugin Name:     Wp Throw Critical Error
 * Plugin URI:      https://github.com/sandroschutt/wp-throw-critical error
 * Description:     Throws a silly critical error to test the Auto Update Rolbacks features introduced in WordPress 6.5
 * Author:          Sandro Schutt Jr
 * Author URI:      https://github.com/sandroschutt
 * Text Domain:     wp-throw-critical-error
 * Domain Path:     /languages
 * Version:         1.0.1
 *
 * @package         Wp_Throw_Critical_Error
 */

// Your code starts here.
throw new Error("Hope this breaks your site :)");
