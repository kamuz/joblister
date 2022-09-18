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

	public function __get($key){
		return $this->vars[$key];
	}

	public function __set($key, $value){
		$this->vars[$key] = $value;
	}

	public function __toString(){
		extract($this->vars);
		ob_start();
		include $this->template;
		return ob_get_clean();
	}
}