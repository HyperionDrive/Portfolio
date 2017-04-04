<?php if($user):	?>
	
	<?php require_once('layers/header.php'); ?>

<?php else:	?>
<form action="/admin/index.php?route=login&action=login" method="POST">
		<div>Вы должны войти</div>
		<button>Войти</button>
	</form>
<?php endif; ?>