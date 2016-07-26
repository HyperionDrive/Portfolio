<!-- Main -->
<div id="main">
	<div class="inner">
		<header>
			<h1>Примеры моих работ по web-разработке</h1>
			<p>Меня зовут Сергей, рад приветствовать на моём сайте, ниже вы можете ознакомиться с моими проектами</p>
		</header>
		<section class="tiles">
		<?php foreach($pages as $page): ?>
			<article class="style<?=rand(1, 6)?>">
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

