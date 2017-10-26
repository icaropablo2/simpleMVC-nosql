<?php 
	class View extends MVC{

		private $params;
		public $controller;

		function __construct(){
			$this->Html = new HtmlHelper();
		}

		public function render(){
			require_once('./src/Template/Layout/default.php');
		}

		public function fetch($file_name){
			extract($this->params);
			require_once("./src/Template/Home/index.php");
		}

		public function element(){

		}


		public function setParams($params){
			$this->params = $params;
		}


	}
?>