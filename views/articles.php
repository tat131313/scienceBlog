<?php include_once("layouts/header.php"); ?>

<br>
<form method="POST" action="article/add">
  <div class="form-group row">
    <label for="articleName" class="col-sm-2 col-form-label">Article name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="articleName" id="articleName" placeholder="Article name">
    </div>
  </div>
  <div class="form-group row">
    <label for="autor" class="col-sm-2 col-form-label">Autor:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor">
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
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Category:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="category" id="gridRadios1" value="option1">
          <label class="form-check-label" for="gridRadios1">
            Sport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="category" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Science
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="category" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Info
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="category" id="gridRadios3" value="option4">
          <label class="form-check-label" for="gridRadios4">
            Other
          </label>
        </div>
      </div>
    </div>
  </fieldset>
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