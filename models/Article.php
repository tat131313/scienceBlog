<?php

class Article
{
    public static function getLastFiveArticles()
    {
        $db = db::getConnection();

        $lastFiveArticles = array();

        $result = $db->query('SELECT `id`,`article_name`, `autor`, `date`, `abstract` FROM `articles` ORDER BY `date` DESC LIMIT 5');
        $i = 0;
        while($row = $result->fetch())
        {
            $lastFiveArticles[$i]['id'] = $row['id'];
            $lastFiveArticles[$i]['article_name'] = $row['article_name'];
            $lastFiveArticles[$i]['autor'] = $row['autor'];
            $lastFiveArticles[$i]['date'] = $row['date'];
            $lastFiveArticles[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $lastFiveArticles;
    }

    public static function addNewArticle()
    {
        $db = db::getConnection();

        $articleName = $_POST['articleName'];
        $autor = $_POST['autor'];
        $article = $_POST['article'];
        $abstract = $_POST['abstract'];
        $category = $_POST['category'];

        $result = $db->query("INSERT INTO `articles` (`article_name`, `autor`, `article`, `abstract`, `category`) 
        VALUES ('$articleName', '$autor', '$article', '$abstract', '$category')");

        return true;
    }

    public static function getArticle($articleId)
    {
        $db = db::getConnection();

        $getArticle = array();

        $result = $db->query("SELECT `*` FROM `articles` WHERE `id` = '$articleId'");
        
        $getArticle = $result->fetch(PDO::FETCH_ASSOC);

        return $getArticle;
    }

    public static function addNewComment($articleId, $comment)
    {
        $db = db::getConnection();

        $name = $_POST['name'];
        $email = $_POST['email'];
        //$comment = $_POST['comment'];

        $result = $db->query("INSERT INTO `comments` (`article_id`, `name`, `email`, `comment`) 
        VALUES ('$articleId', '$name', '$email', '$comment')");

        return true;
    }

    public static function showAllComments($articleId)
    {
        $db = db::getConnection();

        $allComments = array();

        $result = $db->query("SELECT `*` FROM `comments` WHERE `article_id` = '$articleId'");
        
        $i = 0;
        while($row = $result->fetch())
        {
            $allComments[$i]['name'] = $row['name'];
            $allComments[$i]['email'] = $row['email'];
            $allComments[$i]['comment'] = $row['comment'];
            $i++;
        }

        return $allComments;
    }

    public static function fixArticle($articleId)
    {
        $db = db::getConnection();

        $article_name = $_POST['articleName'];
        $article = $_POST['article'];
        $abstract = $_POST['abstract'];

        $result = $db->query("UPDATE `articles` SET `article_name`='$article_name', `article`='$article', `abstract`='$abstract'  
        WHERE `id` = '$articleId'");

        //return $true;  
    }

    public static function likeRating($articleId)
    {
        $db = db::getConnection();

        $result = $db->query("SELECT `rating` FROM `articles` WHERE `id` = '$articleId'");
        $rating = $result->fetch(PDO::FETCH_ASSOC);
        
        $rating = implode($rating);
        $rating = (int)$rating;

        $newRating = $rating+1;

        $result1 = $db->query("UPDATE `articles` SET `rating`='$newRating' WHERE `id` = '$articleId'");
    }

    public static function dislikeRating($articleId)
    {
        $db = db::getConnection();

        $result = $db->query("SELECT `rating` FROM `articles` WHERE `id` = '$articleId'");
        $rating = $result->fetch(PDO::FETCH_ASSOC);
        
        $rating = implode($rating);
        $rating = (int)$rating;

        $newRating = $rating-1;

        $result1 = $db->query("UPDATE `articles` SET `rating`='$newRating' WHERE `id` = '$articleId'");
    }

    public static function fiveLikeArticles()
    {
        $db = db::getConnection();

        $fiveLikeArticles = array();

        $result = $db->query('SELECT `id`,`article_name`, `autor`, `date`, `abstract` FROM `articles` ORDER BY `rating` DESC LIMIT 5');
        $i = 0;
        while($row = $result->fetch())
        {
            $lastFiveArticles[$i]['id'] = $row['id'];
            $lastFiveArticles[$i]['article_name'] = $row['article_name'];
            $lastFiveArticles[$i]['autor'] = $row['autor'];
            $lastFiveArticles[$i]['date'] = $row['date'];
            $lastFiveArticles[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $lastFiveArticles;
    }
}
?>