<?php 

class HomeController extends Controller{

	public function index(){
		
		$this->loadModel('Games');

		$games = $this->Games->GetAll();

		$this->set(compact('games'));
	}


}

?>