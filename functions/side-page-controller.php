<?php

	function side_page_all($link){
		$query = "SELECT * FROM pages WHERE type='portfolio'";
		$result_temp = mysqli_query($link, $query);
		for($i=0; $i<mysqli_num_rows($result_temp); $i++){
			$result[] = mysqli_fetch_assoc($result_temp);
		}
		return $result;
	}

	function side_page_get($link, $id){
		$id = (int) $id;
		$query = "SELECT * FROM pages WHERE id='%d' AND type='side'";
		$query = sprintf($query, $id);
		$result = mysqli_fetch_assoc(mysqli_query($link, $query));
		return $result;
	}

	function side_page_info($text, $length = 100){
		$result = mb_substr($text, 0, $length);
		return $result;
	}

?>