<?php

class Model extends MVC{

	protected $rows = [];
	protected $table_name;

	function __construct(){
		$string = file_get_contents("./db/{$this->table_name}.json");
		$this->rows = json_decode($string,true);
	}

	public function GetAll(){
		return $this->rows;
	}

}

?>