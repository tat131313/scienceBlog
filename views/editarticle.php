<?php include_once("layouts/header.php"); ?>

<br>
  <form method="POST" action="/article/editarticle/<?php echo $chooseArticle['id']?>">
    <div class="form-group row">
      <label for="articleName" class="col-sm-2 col-form-label">Article name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="articleName" id="articleName" value="<?php echo $chooseArticle['article_name']; ?>">
      </div>
    </div>
    </div>
    <div class="form-group row">
      <label for="abstract" class="col-sm-2 col-form-label">Abstract:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="abstract" id="abstract" rows="5"><?php echo $chooseArticle['abstract']; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="article" class="col-sm-2 col-form-label">Article:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="article" id="article" rows="10"><?php echo $chooseArticle['article']; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div align="center" class="col-sm-10">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </div>
  </form>
    
    <?php if(isset($e)):  ?>
    <p><?php echo $e ?></p>
    <?php endif ?>


<?php include_once("layouts/footer.php"); ?>