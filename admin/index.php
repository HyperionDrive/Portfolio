<?php

require_once("functions/db.php");

$link = db_connect();
$user = false;
$errors = false;

session_start(); 

	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
	}

	if(isset($_SESSION['errors'])){
		$errors = $_SESSION['errors'];
		unset($_SESSION['errors']);
	}
   
session_write_close(); 

$route = 'admin.php';
$action = "start";

if(isset($_GET['route'])){
	$route = $_GET['route'];
}

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if($user){

	if(file_exists("functions/".$route.'.php')){
		require_once("functions/".$route.'.php');

	}else{

		require_once("functions/admin.php");
	}
	
	if(function_exists($action)){
		$action($user);
	}elseif(isset($$action)){
		$$action($user);
	}

}else {
	require_once("functions/login.php");
	$start();
}

?>