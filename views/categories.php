<?php include_once("layouts/header.php"); ?>
<br>
    <form method="POST">
        <div class="form-group row">
            <div class="col-sm-12" align="right">
                <button type="submit" name="alpSort" value="alfSort" class="btn btn-outline-primary">Sort by alphabet</button>
                <button type="submit" name="likeSort" value="likeSort" class="btn btn-outline-primary">Sort by interesting</button>
            </div>
        </div>
    </form>
    <div> 
        <?php foreach($articlesToChoosenCategory as $row): ?>
            <h4>Title:<a href="/article/<?php echo $row['id'];?>"><strong> <?php echo $row['article_name']; ?></a></strong></h4>
            <p><strong>Autor:</strong> <?php echo $row['autor']; ?></p>
            <p><strong>Date:</strong> <?php echo $row['date']; ?></p>
            <p><strong>Abstract:</strong> <?php echo $row['abstract']; ?></p>
            <br>  
        <?php endforeach; ?>        
    </div>
    
<?php include_once("layouts/footer.php"); ?>