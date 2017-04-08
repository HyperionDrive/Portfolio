<?php require_once('layers/header.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <br><br>

          <h2 class="sub-header">Страницы</h2>
          <div class="form">
            <form action="/admin/index.php?route=page-controller&action=pageAdd" method="post">
            <div class="col-sm-6">
            	<input <?= (isset($errors['title']))?'style="border:1px red solid"':"" ?> class="form-control" type="text" name="title" value="<?= ($result)?$result['title']:""; ?>">
            	<br><br>
            	<input <?= (isset($errors['image']))?'style="border:1px red solid"':"" ?> class="form-control" type="text" name="image" value="<?= ($result['image'])?:"";?>">
            	<br><br>
            	<input <?= (isset($errors['href']))?'style="border:1px red solid"':"" ?> class="form-control" type="text" name="href" value="<?= ($result)?$result['href']:"";?>">
            	<br><br>
            </div>
            <div class="col-sm-6">
            	<textarea <?= (isset($errors['review']))?'style="border:1px red solid"':"" ?> class="form-control" name="review" cols="30" rows="10"><?= ($result)?$result['review']:"";?></textarea>
            	<br><br>
            	<textarea <?= (isset($errors['text']))?'style="border:1px red solid"':"" ?> class="form-control" name="text" cols="30" rows="10"><?= ($result)?$result['text']:"";?></textarea>
            </div>

            <button>ОК</button>
            </form>
              
              <?php if($errors): ?>
                <div class="errors">
                  <ul>
                  <?php foreach($errors as $error):?>
                    <li>
                      <?=$error?>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>



<?php require_once('layers/footer.php'); ?>