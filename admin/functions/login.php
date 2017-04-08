<?php
$start = function () use ($user, $errors){

	if(isset($_GET['action'])){
		login();
	}
	
	require_once("../views/admin/login.php");
};

function login(){

	$user['login'] = $_POST['login'];
	$user['password'] = $_POST['password'];

	if(	$user['login'] == "demo" && $user['password'] == "demo"){
		session_start(); 

		$_SESSION['user'] = [
		"name" => 'Сергей',
		"role" => 1
		];
   
	session_write_close();

	header("Location: /admin");
	}

	session_start(); 

		$_SESSION['errors'] = [
			"auth" => [
				"Попробуйте логин и пароль - demo"
			]
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