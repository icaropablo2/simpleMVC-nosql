<?php

class Controller extends MVC{

	private $params = [];

	public function set($args = []){
		$this->params = array_merge($this->params, $args);
	}

	public function get(){
		return $this->params;
	}


}

?>