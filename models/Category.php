<?php

class Category
{

    public static function selectArticlesToChoosenCategory($category)
    {
        $db = db::getConnection();

        $showcategory = array();

        $result = $db->query("SELECT * FROM `articles` WHERE `category` = '$category' ORDER BY `date` DESC");
        $i = 0;
        while($row = $result->fetch())
        {
            $showcategory[$i]['id'] = $row['id'];
            $showcategory[$i]['article_name'] = $row['article_name'];
            $showcategory[$i]['autor'] = $row['autor'];
            $showcategory[$i]['date'] = $row['date'];
            $showcategory[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $showcategory;
    }

    public static function alpSort($category)
    {
        $db = db::getConnection();

        $showcategory = array();

        $result = $db->query("SELECT * FROM `articles` WHERE `category` = '$category' ORDER BY `article_name`");
        $i = 0;
        while($row = $result->fetch())
        {
            $showcategory[$i]['id'] = $row['id'];
            $showcategory[$i]['article_name'] = $row['article_name'];
            $showcategory[$i]['autor'] = $row['autor'];
            $showcategory[$i]['date'] = $row['date'];
            $showcategory[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $showcategory;
    }

    public static function likesort($category)
    {
        $db = db::getConnection();

        $showcategory = array();

        $result = $db->query("SELECT * FROM `articles` WHERE `category` = '$category' ORDER BY `rating` DESC");
        $i = 0;
        while($row = $result->fetch())
        {
            $showcategory[$i]['id'] = $row['id'];
            $showcategory[$i]['article_name'] = $row['article_name'];
            $showcategory[$i]['autor'] = $row['autor'];
            $showcategory[$i]['date'] = $row['date'];
            $showcategory[$i]['abstract'] = $row['abstract'];
            $i++;
        }

        return $showcategory;
    }
   
}
?>