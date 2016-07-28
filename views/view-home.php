<!-- Main -->
<div id="main">
	<div class="inner">
		<header>
			<h1 class="idmain__header">Примеры моих работ по web-разработке</h1>
		</header>
		<section class="tiles">
		<?php foreach($pages as $page): ?>
			<article>
				<span class="image">
					<img src="images/pages/<?=$page['image']?>" alt="" />
				</span>
				<a href="page.php?id=<?=$page['page_id']?>">
					<h2><?=$page['title']?></h2>
					<div class="content">
						<p><?=page_info($page['review']);?></p>
					</div>
				</a>
			</article>
		<?php endforeach; ?>
		</section>
	</div>
</div>

