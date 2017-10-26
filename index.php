<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require_once('./core/MVC.php');
	require_once('./core/Model.php');
	require_once('./core/Controller.php');
	require_once('./core/View.php');
	require_once('./core/Request.php');
	require_once('./core/Helper.php');
	require_once('./core/Helper/HtmlHelper.php');

	$mvc = new MVC();
	$mvc->start();

?>