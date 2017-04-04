<?php
	
	require_once("functions/main.php");

	$link = db_connect();

	$pages = page_all($link);

	if(!$pages){
		$pages = [];
	}

	require_once("views/view-header.php");

	require_once("views/view-home.php");

	require_once("views/view-footer.php");

?>