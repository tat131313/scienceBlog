<?php

class Getarticle
{

    public static function getArticle($articleName)
    {
        $db = db::getConnection();

        $getArticle = array();

        $result = $db->query("SELECT `article_name`, `autor`, `article` FROM `articles` WHERE `article_name` = '$articleName'");

        while($row = $result->fetch())
        {
            $getArticle[$i]['article_name'] = $row['article_name'];
            $getArticle[$i]['autor'] = $row['autor'];
            $getArticle[$i]['article'] = $row['article'];
        }

        return $getArticle;
    }
}
?>