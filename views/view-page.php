<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 class="idmain__header"><?=$page['title']?></h1>

							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							  	<?php if(!empty($page['img'][0])): $active = 'active'; foreach($page['img'] as $item): ?>
							    <div class="item <?=$active?>">
							      <img src="/images/pages/<?=$item?>" alt="" />
							      <div class="carousel-caption">
							      </div>
							    </div>
							    <?php $active=''; endforeach; endif;?>
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>

							<div class="page-content">
							<a class="button special" target="_blank" href="<?=$page['href']?>">Посмотреть</a>
								<h3>Описание проделанной работы:</h3>	
								<p><?=$page['text']?></p>
							</div>
						</div>
					</div>