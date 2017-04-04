<div>
	<form action="/admin/index.php?route=login&action=logout" method="POST">
		<div>Вы уже тут, <?= $user['name'] ?></div>
		<button>Выйти</button>
	</form>
</div>