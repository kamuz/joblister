<?php
// Config file
require_once 'config.php';

// Autoloader
function autoloader($class) {
	$file = $_SERVER['DOCUMENT_ROOT'] . "/libs/{$class}.php";
	if(file_exists($file)) {
		require_once $file;
	}
}
spl_autoload_register('autoloader');