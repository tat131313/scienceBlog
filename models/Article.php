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

        $result = $db->query('SELECT `id`, `autor`, `date`, `abstract` FROM `articles` ORDER BY `date` DESC LIMIT 5');
        $i = 0;
        while($row = $result->fetch())
        {
            $lastFiveArticles[$i]['id'] = $row['id'];
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

        /*include_once(ROOT."/views/articles.php");

        $articleName = POST['articleName'];

        var_dump($articleName);

        return $$articleName;*/
    }
}
?>