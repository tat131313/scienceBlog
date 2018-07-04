<?php include_once("layouts/header.php"); ?>

<br>
  <form>
    <div class="form-group row">
      <label for="articleName" class="col-sm-2 col-form-label">Article name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="articleName" id="articleName" placeholder="Article name">
      </div>
    </div>
    </div>
    <div class="form-group row">
      <label for="article" class="col-sm-2 col-form-label">Article:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="article" id="article" placeholder="Article">
      </div>
    </div>
    <div class="form-group row">
      <label for="abstract" class="col-sm-2 col-form-label">Abstract:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="abstract" id="abstract" placeholder="Abstract">
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