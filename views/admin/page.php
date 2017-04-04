<?php require_once('layers/header.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <br><br>

          <h2 class="sub-header">Страницы</h2>
          <div class="form">
            <form action="">
            <div class="col-sm-6">
            	<input class="form-control" type="text" name="title" value="<?= $result['title'] ?>">
            	<br><br>
            	<input class="form-control" type="text" name="image" value="<?= $result['image'] ?>">
            	<br><br>
            	<input class="form-control" type="text" name="href" value="<?= $result['href'] ?>">
            	<br><br>
            </div>
            <div class="col-sm-6">
            	<textarea class="form-control" name="review" cols="30" rows="10"><?= $result['review'] ?></textarea>
            	<br><br>
            	<textarea class="form-control" name="text" cols="30" rows="10"><?= $result['text'] ?></textarea>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>



<?php require_once('layers/footer.php'); ?>