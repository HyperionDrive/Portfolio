<?php

	function page_all(){
		global $link;
		global $user;
		
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
		global $link;
		global $user;

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

	$pageAdd = function () use ($user, $link) {
		$result = false;
		$errors = false;

		if(isset($_POST['title'])){
			foreach ($_POST as $key=>&$input) {

				if (strlen(trim($input))) {

					if ($key == "text"){
						$input = htmlspecialchars($input);
					}else{
						$input = strip_tags($input);
					}

					$result[$key] = $input;

				} else {
					$errors[$key] = "Зполните поле $key";
					$result[$key] = $input;
				}

			}

			if(!$errors){

				$query = "INSERT INTO pages (`page_id`, `title`, `text`, `image`, `href`, `review`, `type`) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', 'portfolio')";
				$query = sprintf($query, $result['title'], $result['image'], $result['href'], $result['review'], $result['text']);
				$res = mysqli_query($link, $query);

				header("Location: http://portfolio.io/admin/index.php?route=page-controller&action=page_all");
			}

		}

		require_once("../views/admin/pageAdd.php");
	} 




?>