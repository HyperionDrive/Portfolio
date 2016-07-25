<?php	
	require_once("functions/main.php");

	$link = db_connect();

	$id = isset($_GET['id'])?$_GET['id']:header("Location: index.php");

	$pages = page_all($link);

	$page = side_page_get($link, $id);

	if(!$page){
		header("Location: index.php");
	}

	require_once("views/view-header.php");

	require_once("views/view-side-page.php");

	require_once("views/view-footer.php");

?>