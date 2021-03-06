<?php

	/**
	 * @author Kevin Newesil <newesil.kevin@gmail.com>
	 * @version 0.1-BETA
	 *
	 * @todo get icons for file extentions and show file extention as fileTypeIcon
	 */

	// Start session and enable error reporting to all for now as it's debugging version.
	session_start();
	error_reporting(-1);

	// Check for first runtime.
	if( !file_exists( 'init-/config/config.php' ) ) { header( 'location: init-/install.php' ); exit(1); }
	
	// Require the autoloader and helper file for easy access to rest of filestructure
	require_once('init-/core/autoloader.php');
	require_once('init-/core/helper.php');

	// Set the default date and timezone to amsterdam.
	date_default_timezone_set( \core\Helper::config( 'timezone' ) );

	// Register the autoloader because I'm lazy.
	\core\Helper::With('autoloader') -> registerLoad();

	die( \core\Helper::With('base') -> build() );

	//testing this shit mwuhaahaha;