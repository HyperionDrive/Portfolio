<?php require_once('layers/header.php'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <br><br>

          <h2 class="sub-header">Страницы</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Название</th>
                  <th>Тип</th>
                  <th>Дата</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($result as $item): ?>
                <tr>
                  <td><?= $item['page_id'] ?></td>
                  <td>
                  	<a href="/admin/index.php?route=page-controller&action=page_get&id=<?= $item['page_id'] ?>">
                  		<?= $item['title'] ?>
                  	</a>
                  </td>
                  <td><?= $item['type'] ?></td>
                  <td><?= $item['date'] ?></td>
                  <td>sit</td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>





<?php require_once('layers/footer.php'); ?>