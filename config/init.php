<?php

// Config file
require_once 'config.php';

// Debug
function dd($data){
	echo '<pre>' . print_r($data, true) . '</pre>';
}

// Autoloader
function autoloader($class) {
	$file = $_SERVER['DOCUMENT_ROOT'] . "/libs/{$class}.php";
	if(file_exists($file)) {
		require_once $file;
	}
}
// Autoload init
spl_autoload_register('autoloader');