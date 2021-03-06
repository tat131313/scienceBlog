<?php include_once("layouts/header.php"); ?>
    <br>

    <div> 
        <h3>Title: <?php echo $chooseArticle['article_name']; ?></h3>
        <p><strong>Autor:</strong> <?php echo $chooseArticle['autor']; ?></p>
        <p><strong>Article:</strong> <?php echo $chooseArticle['article']; ?></p>
        <p><strong>Rating:</strong> <?php echo $chooseArticle['rating']; ?></p>        
    </div>

    <form method="POST" action="/article/rating/<?php echo $chooseArticle['id']?>">
        <div class="form-group row">
            <div class="col-sm-11">
                <button type="submit" name="like" value="like" class="btn btn-danger">Like</button>
                <button type="submit" name="dislike" value="dislike" class="btn btn-secondary">Dislike</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/article/edit/<?php echo $chooseArticle['id']?>">
        <button type="submit" class="btn btn-outline-primary">Edit article</button>
    </form>

    <?php if(isset($e)):  ?>
    <p><?php echo $e ?></p>
    <?php endif ?>

    <hr><br>

    <form method="POST" action="/article/addComment/<?php echo $chooseArticle['id']?>">
        <div class="form-group row">
        <label for="name" class="col-sm-1 col-form-label">Name:</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="email" class="col-sm-1 col-form-label">Email:</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>
        </div>
        <div class="form-group row">
        <label for="comment" class="col-sm-1 col-form-label">Comment:</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter your comment">
        </div>
        </div>
        <div class="form-group row">
        <div align="center" class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>

    <br><hr><br>

    <div> 
        <?php foreach($showComments as $row): ?>
            <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
            <p><strong>Comment:</strong> <?php echo $row['comment']; ?></p> 
            <br>
        <?php endforeach ?>       
    </div>

    
<?php include_once("layouts/footer.php"); ?>