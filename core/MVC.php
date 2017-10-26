<?php

class MVC{

		private $controller;
		private $action;
		private $request;


		public function start(){

			$this->request = new Request;
			
			$con = $this->request->getController();
			$act = $this->request->getAction();
			
			if(file_exists("./src/Controller/{$con}.php")){
				require_once("./src/Controller/{$con}.php");
			}else{
				$con = 'ErrorController';
				$act = 'index';	
				require_once("./src/Controller/{$con}.php");
			}

			$this->controller = new $con();
			$this->controller->{$act}();
			
			
			$view = new View;
			$view->controller = $con;
			$view->setParams( $this->controller->get() );
			$view->render();

		}

		public function loadHelper(){
			require_once("./src/Helper/{$methodName}.php");
			$this->{$methodName} = new $methodName();
		}


		public function loadModel($methodName){
			require_once("./src/Model/{$methodName}.php");
			$this->{$methodName} = new $methodName();
		}

		public function debug($text = ''){
			echo '<pre>';
			print_r($text);
			echo '</pre>';
		}

}

?>