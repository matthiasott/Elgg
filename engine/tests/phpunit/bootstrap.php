<?php
$engine = dirname(dirname(dirname(__FILE__)));

/**
 * This is here as a temporary solution only. Instead of adding more global
 * state to this file as we migrate tests, try to refactor the code to be
 * testable without global state.
 */
global $CONFIG;
$CONFIG = (object) array(
	'dbprefix' => 'elgg_',
);

// Set up class auto-loading
require_once "$engine/lib/autoloader.php";

// Provide some basic global functions/initialization.
require_once "$engine/lib/elgglib.php";

// This is required by ElggEntity
require_once "$engine/lib/sessions.php";
