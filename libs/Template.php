<?php

class Template{

	// Path to template
	protected $template;

	// Vars passed in
	protected $vars = array();

	// Constructor
	public function __construct($template){
		$this->template = $template;
	}

	// Get vars for template
	public function __get($key){
		return $this->vars[$key];
	}

	// Set vars for template
	public function __set($key, $value){
		$this->vars[$key] = $value;
	}

	// Extract vars and include template for display
	public function __toString(){
		extract($this->vars);
		ob_start();
		include $this->template;
		return ob_get_clean();
	}
}