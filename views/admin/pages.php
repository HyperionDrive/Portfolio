<?php require_once('layers/header.php'); ?>
<ul>
	<?php foreach($result as $item): ?>
		<li>
			<a href="/admin/index.php?route=page-controller&action=page_get&id=<?= $item['page_id'] ?>">
				<?= $item['title'] ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>