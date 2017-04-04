<?php
function start($user){
	$user = $user;

	if(isset($_GET['action'])){
		login();
	}
	
	
	require_once("../views/admin/login.php");
}

function login(){

	session_start(); 

		$_SESSION['user'] = [
		"name" => 'Сергей',
		"role" => 1
		];
   
	session_write_close();

	header("Location: /admin");

}

function logout(){ 
	session_start(); 
		unset($_SESSION['user']);
	session_write_close();

	header("Location: /admin");
}

?>