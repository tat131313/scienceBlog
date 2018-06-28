<?php include_once("layouts/header.php"); ?>
<br>
    <div> 
        <?php foreach($chooseArticle as $row): ?>
            <h3>Title: <?php echo $row['article_name']; ?></h3>
            <p><strong>Autor:</strong> <?php echo $row['autor']; ?></p>
            <p><strong>Article:</strong> <?php echo $row['article']; ?></p>
            <br>  
        <?php endforeach; ?>        
    </div>
    
<?php include_once("layouts/footer.php"); ?>