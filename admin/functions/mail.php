<?php

if(isset($_POST['human'])){
	foreach ($_POST as $key => $item) {
		$result[$key] = mysql_escape_string(htmlspecialchars(strip_tags($item)));
	}
}