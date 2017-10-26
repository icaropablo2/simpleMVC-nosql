<?php
class Request extends MVC{

	private $params;

	function __construct(){

		$request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		$script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
		$parts = array_diff_assoc($request_uri, $script_name);
		if (empty($parts))
		{
			return '/';
		}
		$path = implode('/', $parts);
		if (($position = strpos($path, '?')) !== FALSE)
		{
			$path = substr($path, 0, $position);
		}

		$this->params = explode('/',$path);

	}

	public function getController(){
		
		if(!isset($this->params[0])) return 'HomeController';

		return "{$this->params[0]}Controller";
	}

	public function getAction(){
		
		if(!isset($this->params[1])) return 'index';

		return $this->params[1];
	}

}
?>