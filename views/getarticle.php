<?php include_once("layouts/header.php"); ?>
<br>
    <div> 
        <h3>Title: <?php echo $chooseArticle['article_name']; ?></h3>
        <p><strong>Autor:</strong> <?php echo $chooseArticle['autor']; ?></p>
        <p><strong>Article:</strong> <?php echo $chooseArticle['article']; ?></p>        
    </div>

    <form method="POST" action="/article/edit">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    
<?php include_once("layouts/footer.php"); ?>