<?php include_once("layouts/header.php"); ?>
    
    <br>
    <h3 align="center"><strong>Last articles</strong></h3>
    <div> 
        <?php foreach($lastFiveArticles as $row): ?>
            <h3><strong>Autor:</strong> <?php echo $row['autor']; ?></h3>
            <h4><a href="/article/<?php echo $row['id'];?>"><strong> <?php echo $row['article_name']; ?></a></strong></h4>
            <p><strong>Date:</strong> <?php echo $row['date']; ?></p>
            <p><strong>Abstract:</strong> <?php echo $row['abstract']; ?></p>
            <br>  
        <?php endforeach; ?>        
    </div>

    <br>
    <h3 align="center"><strong>Most interesting articles</strong></h3>
    <div> 
        <?php foreach($fiveLikeArticles as $row): ?>
            <h3><strong>Autor:</strong> <?php echo $row['autor']; ?></h3>
            <h4><a href="/article/<?php echo $row['id'];?>"><strong> <?php echo $row['article_name']; ?></a></strong></h4>
            <p><strong>Date:</strong> <?php echo $row['date']; ?></p>
            <p><strong>Abstract:</strong> <?php echo $row['abstract']; ?></p>
            <br>  
        <?php endforeach; ?>        
    </div>

<?php include_once("layouts/footer.php"); ?>