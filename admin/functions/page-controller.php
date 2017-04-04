<?php

	function page_all(){
		global $user;

		$link = db_connect();
		$query = "SELECT * FROM pages WHERE type='portfolio'";
		$result_temp = mysqli_query($link, $query);
		if(!$result_temp){
			return [];
		}
		for($i=0; $i<mysqli_num_rows($result_temp); $i++){
			$result[] = mysqli_fetch_assoc($result_temp);
		}
		
		require_once("../views/admin/pages.php");
	}

	function page_get(){
		global $user;
		
		$link = db_connect();

		isset($_GET['id']) ? $id = (int) $_GET['id'] : $id = 1;

		$query = "SELECT * FROM `pages` a LEFT JOIN images b ON b.parent = a.page_id WHERE a.page_id = %d";
		$query = sprintf($query, $id);
		$res = mysqli_query($link, $query);

		if(!$res){
			return [];
		}

		while($row=mysqli_fetch_assoc($res)){
			$img[]=$row['src'];
			$result = $row;
			$result['img'] = $img;
		}
		require_once("../views/admin/page.php");
	}

	function page_info($text, $length = 100){
		$result = mb_substr($text, 0, $length);
		return $result;
	}




?>