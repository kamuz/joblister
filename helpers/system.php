<?php

// Autoloader
function autoloader($class) {
	$file = $_SERVER['DOCUMENT_ROOT'] . "/libs/{$class}.php";
	if(file_exists($file)) {
		require_once $file;
	}
}
// Autoload init
spl_autoload_register('autoloader');

// Redirect to page
function redirect($page = false, $message = null, $message_type = null){
	if(is_string($page)) {
		$location = $page;
	} else {
		$location = $_SERVER['SCRIPT_NAME'];
	}

	// Check for message
	if($message != null){
		// Set message
		$_SESSION['message'] = $message;
	}

	// Check for type
	if($message_type != null){
		// Set message type
		$_SESSION['message_type'] = $message_type;
	}

	// Redirect
	header('Location: ' . $location);
	exit;
}

// Display message
function displayMessage(){
	if(!empty($_SESSION['message'])){
		// Assign message variable
		$message = $_SESSION['message'];

		if(!empty($_SESSION['message_type'])){
			// Assign type variable
			$message_type = $_SESSION['message_type'];
			// Create output
			if($message_type == 'danger'){
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message . '</div>';
			} elseif($message_type == 'success'){
				echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message . '</div>';
			} elseif($message_type == 'warning') {
				echo '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message . '</div>';
			}
		}
	}
	// Unset message
	unset($_SESSION['message']);
	unset($_SESSION['message_type']);
}

// Debug
function dd($data){
	echo '<pre>' . print_r($data, true) . '</pre>';
}