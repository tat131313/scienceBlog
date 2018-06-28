<?php

class Article
{

    /*public static function getAllArticles()
    {
        $db = db::getConnection();

        $allArticles = array();

        $result = $db->query('SELECT `id`, `autor`, `date`, `abstract` FROM `articles` ORDER BY `date` DESC LIMIT 5');
        $i = 0;
        while($row = $result->fetch())
        {
            $allArticles[$i]['id'] = $row['id'];
            $allArticles[$i]['autor'] = $row['autor'];
            $allArticles[$i]['date'] = $row['date'];
            $allArticles[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $allArticles;
    }*/

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

    public static function getArticle($articleName)
    {
        $db = db::getConnection();

        $getArticle = array();

        $result = $db->query("SELECT `article_name`, `autor`, `article` FROM `articles` WHERE `article_name` = '$articleName'");

        while($row = $result->fetch())
        {
            $getArticle['article_name'] = $row['article_name'];
            $getArticle['autor'] = $row['autor'];
            $getArticle['article'] = $row['article'];
        }

        return $getArticle;
    }
}
?>