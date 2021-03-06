<!DOCTYPE HTML>
<html>
	<head>
		<title>Портфолио web-программиста</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/custom.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">Портфолио</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Меню</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Меню</h2>
						<ul>
							<li><a href="/">Главная</a></li>
							<li>Каталог :
								<?php foreach($pages as $item){ ?>
								<li><a href="/page.php?id=<?=$item['page_id']?>"> - <?=$item['title']?></a></li>
								<?php } ?>
							</li>
							<li><a href="/side-page.php?id=5">Обо мне</a></li>
							<li><a href="/side-page.php?id=4">Контакты</a></li>
						</ul>
					</nav>