<?php include_once("layouts/header.php"); ?>
    
    <div>
        <br><br><br><br><br><br><br> 
 
        <?php foreach($lastFiveArticles as $row): ?>
            <h3>Autor: <?php echo $row['autor']; ?></h3>
            <p><strong>Date:</strong> <?php echo $row['date']; ?></p>
            <p><strong>Abstract:</strong> <?php echo $row['abstract']; ?></p>
            <br>  
        <?php endforeach; ?>        
    </div>

<?php include_once("layouts/footer.php"); ?>