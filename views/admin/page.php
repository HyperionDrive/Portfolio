<?php require_once('layers/header.php'); ?>

<form action="">
	<input type="text" name="title" value="<?= $result['title'] ?>">
	<br><br>
	<input type="text" name="image" value="<?= $result['image'] ?>">
	<br><br>
	<input type="text" name="href" value="<?= $result['href'] ?>">
	<br><br>
	<textarea name="review" cols="30" rows="10"><?= $result['review'] ?></textarea>
	<br><br>
	<textarea name="text" cols="30" rows="10"><?= $result['text'] ?></textarea>
</form>