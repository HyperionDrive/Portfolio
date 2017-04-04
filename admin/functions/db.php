<?php 
	
	require_once("../config/db-config.php");

	function db_connect(){
		$link = mysqli_connect(HOST, USER, PASSWORD, DB);
		mysqli_set_charset($link, 'utf8');
		return $link;
	};

?>